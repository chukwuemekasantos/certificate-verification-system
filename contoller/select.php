<?php
include_once 'db.php';

class select extends dbconnect
{


	public function input_validation($input)
	{
		return htmlentities(htmlspecialchars(stripcslashes(trim($input))));
	}
	
	public function loginAdmin()
	{
		if (isset($_POST['login'])) {
			$email  = $this->input_validation($_POST['email']);
			$pass = $this->input_validation($_POST['password']);
			$query = "SELECT * FROM nuc_admin WHERE nuc_admin_email = :email"; 
			$sql = $this->conn->prepare($query);
			$sql->execute([':email' => $email ]);
			$res = $sql->fetch();
			if ($email  == $res['nuc_admin_email'] AND password_verify($pass,$res['nuc_admin_pass'])) {
				//$_SESSION['username'] = $res['username'];
				$_SESSION['data'] = $res;
				 header('location:../nuc_dashboard/dashboard.php');
			}else{
				return "invaliduser";
			}
		}
	}

	public function loginUser()
	{
		if (isset($_POST['login'])) {
			$email  = $this->input_validation($_POST['email']);
			$pass = $this->input_validation($_POST['password']);
			$query = "SELECT * FROM reg_institutions WHERE institution_email = :email"; 
			$sql = $this->conn->prepare($query);
			$sql->execute([':email' => $email ]);
			$res = $sql->fetch();
			if ($email  == $res['institution_email'] AND password_verify($pass,$res['institution_password'])) {
				//$_SESSION['username'] = $res['username'];
				$_SESSION['data'] = $res;
				 header('location:../institution_dashboard/dashboard.php');
			}else{
				return "invaliduser";
			}
		}
	}
    
    
    
     public function countIns(){
         
         
        $status = "not fully registered"; 
        
        $stmt = $this->conn->prepare("SELECT count(*) FROM reg_institutions WHERE institution_reg_status = ?");
        $stmt->execute([$status]);
        $count = $stmt->fetchColumn();
        return $count;
        
    }
    
     public function countInsR(){
         
         
        $status = "Fully Registered"; 
        
        $stmt = $this->conn->prepare("SELECT count(*) FROM reg_institutions WHERE institution_reg_status = ?");
        $stmt->execute([$status]);
        $count = $stmt->fetchColumn();
        return $count;
        
    }
    
    public function countF($institution_id){
        
        $stmt = $this->conn->prepare("SELECT count(*) FROM institution_faculty WHERE institution_id = ?");
        $stmt->execute([$institution_id]);
        $count = $stmt->fetchColumn();
        return $count;
        
    }
    
    public function countD($institution_id){
        
        $stmt = $this->conn->prepare("SELECT count(*) FROM institution_department WHERE institution_id = ?");
        $stmt->execute([$institution_id]);
        $count = $stmt->fetchColumn();
        return $count;
        
    }
   

     public function select_ins_veri_method($institution_id){
        
        $stmt = $this->conn->prepare("SELECT institution_verify_method FROM reg_institutions WHERE institution_id = ?");
        $stmt->execute([$institution_id]);
        $count = $stmt->fetchColumn();
        return $count;
        
    }
   

    public function countS($institution_id){
        
        $stmt = $this->conn->prepare("SELECT count(*) FROM student_certificate_info WHERE institution_id = ?");
        $stmt->execute([$institution_id]);
        $count = $stmt->fetchColumn();
        return $count;
        
    }
    
    public function verify_student($institution_id){
        
        if(isset($_POST['verify_student'])):
        
        $auth_val = $_POST['verify'];
        
         $queryForSelect = "SELECT * FROM student_certificate_info  WHERE institution_id  = ? AND verification_pin = ?";
					  $sqlForSelect = $this->conn->prepare($queryForSelect);
					  $sqlForSelect->execute([$institution_id,$auth_val]);
				      $res =  $sqlForSelect->fetchAll(PDO::FETCH_ASSOC);
                        
                        if($res):
                            return ['result' => $res,'message' => 'success'];
                        else:
                             return ['message' => 'nope'];
                        endif;
             endif;
    }
    
    
    public function verification_method($institution_id)
	{
		$institution_id = $institution_id;
		$query = "SELECT verification_method, institution_id FROM institution_verification_method WHERE institution_id = '$institution_id'";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}
    
    public function selectVerfyMethod($institution_id)
	{
		$institution_id = $institution_id;
		$query = "SELECT institution_verify_method FROM reg_institutions WHERE institution_id = '$institution_id'";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}

    
	public function SelectInstitutions()
	{
		$query = "SELECT institution_name,institution_email,reg_date,institution_reg_status FROM reg_institutions";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}

	public function SelectInstitutionInfo($institution_id)
	{
		$query = "SELECT * FROM reg_institutions WHERE institution_id = '$institution_id'";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll(PDO::FETCH_NUM);
		return $res;
	}
    
    
    public function SelectInsInfo($ins_name,$institution_id)
	{
		$query = "SELECT institution_name,institution_email,institution_verify_method,institution_logo FROM reg_institutions WHERE institution_id = '$institution_id' ";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}
    
    public function SearchInstitutions($search)
	{
        $full = 'Fully Registered';
        $query = "SELECT institution_id, institution_name FROM reg_institutions WHERE institution_name LIKE '%$search%' AND institution_reg_status = '$full'";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}
    
	public function ListOfInstitutionfaculty($institution_id)
	{
		$institution_id = $institution_id;
		$query = "SELECT faculty_id, faculty_name, institution_id FROM institution_faculty WHERE institution_id = '$institution_id'";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}
    
    public function SelectOfDepartment($institution_id,$faculty)
	{
//		if (!empty($_POST['faculty'])) {
            $institution_id = $institution_id;
            $query = "SELECT department_id, department_name, institution_id, faculty_id FROM institution_department WHERE institution_id = '$institution_id' AND faculty_id = '$faculty'";
            $sql = $this->conn->prepare($query);
            $sql->execute();
            $res = $sql->fetchAll();
            return $res;
        //}
	}
    
    public function ListOfDepartment()
	{
		$query = "SELECT institution_department.department_name, institution_faculty.faculty_name FROM institution_department INNER JOIN institution_faculty ON institution_department.faculty_id=institution_faculty.faculty_id AND institution_department.institution_id=institution_faculty.institution_id";
		$sql = $this->conn->prepare($query);
		$sql->execute();
		$res = $sql->fetchAll();
		return $res;
	}
    
    
    
	// public function SelectProductOnCategoryFastFood()
	// {
	// 	$productCategory = "fastfood";
	// 	$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory";
	// 	$sql = $this->conn->prepare($query);
	// 	$sql->execute([':productCategory' => $productCategory]);
	// 	$res = $sql->fetchAll();
	// 	return $res;
	// }


	// public function SelectProductOnCategorySwallow()
	// {
	// 	$productCategory = "swallow";
	// 	$query = "SELECT * FROM admin_add_product WHERE product_category = :productCategory";
	// 	$sql = $this->conn->prepare($query);
	// 	$sql->execute([':productCategory' => $productCategory]);
	// 	$res = $sql->fetchAll();
	// 	return $res;
	// }



}

?>