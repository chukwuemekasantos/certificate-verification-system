
<?php

include_once 'db.php';

class insert extends dbconnect
{

	public function emailVal()
	{
		
	}

	public function input_validation($input)
	{
		return htmlentities(htmlspecialchars(stripcslashes(trim($input))));
	}
	
	public function registerNewAdmin()
	{
			if(isset($_POST['register'])):
				 $admin_status = "main admin";
				 $fname = $this->input_validation($_POST["fname"]);
				 $email = $this->input_validation($_POST['email']);
				 $password = $this->input_validation($_POST['password']);
				 $phone = $this->input_validation($_POST['phone']);
				  $newpass = password_hash($password , PASSWORD_DEFAULT);
				  $queryForSelect = "SELECT 1 FROM nuc_admin WHERE nuc_admin_email = :email";
				  $sqlForSelect = $this->conn->prepare($queryForSelect);
				  $sqlForSelect->execute([':email' => $email ]);

				 
				  if ($sqlForSelect->fetchColumn()) {
				  	return "userfound";
				  }else{
				  	$query = "INSERT INTO nuc_admin(nuc_admin_fname,nuc_admin_email,nuc_admin_pass,nuc_admin_phone,nuc_admin_status) VALUES(:fname,:email,:password,:phone,:status)";
					 $sql = $this->conn->prepare($query);
					 $feedback = $sql->execute([':fname' => $fname, ':email' => $email, ':password' => $newpass, ':phone' => $phone, ':status' => $admin_status]);
					 if ( $feedback) {
					 	return 'success';
					 	}else{		

					 	return 'nope';
					 }

				  }
			endif;
			 
	}


	
	public function add_institution(){

				if (isset($_POST['add_institution'])) {
					$institution_email = $_POST['institution_email'];
					$institution_name = ucwords($_POST['institution_name']);
					$institution_reg_status = "not fully registered";
					 $queryForSelect = "SELECT 1 FROM reg_institutions  WHERE institution_name  = ?";
					  $sqlForSelect = $this->conn->prepare($queryForSelect);
					  $sqlForSelect->execute([$institution_name]);
					  if (str_word_count($institution_name) > 1) {

					  	if ($sqlForSelect->fetchColumn()):
					 	 	return "institution_name_exit"; 
					  	else:
						  	$query = "INSERT INTO reg_institutions(institution_name,institution_email,institution_reg_status) VALUES(?,?,?)";
							 $sql = $this->conn->prepare($query);
							 $feedback = $sql->execute([$institution_name,$institution_email,$institution_reg_status]);
							 if ( $feedback) {
							 	return 'success';
							 }else{
							 	return 'nope';
							 }
						endif;
					  		
					  }else{

					  	return "institution_name_is_not_complete";
					  }
				}
	}


	public function add_department($institution_id){

				if (isset($_POST['add_department'])) {
					$faculty_id = $_POST['faculty_id'];
					$department_name = ucwords($_POST['department_name']);
					 $queryForSelect = "SELECT 1 FROM institution_department  WHERE department_name  = ?";
					  $sqlForSelect = $this->conn->prepare($queryForSelect);
					  $sqlForSelect->execute([$department_name]);
					  if (str_word_count($department_name) > 1) {

					  	if ($sqlForSelect->fetchColumn()):
					 	 	return "department_name_exit"; 
					  	else:
						  	$query = "INSERT INTO institution_department(department_name,faculty_id,institution_id) VALUES(?,?,?)";
							 $sql = $this->conn->prepare($query);
							 $feedback = $sql->execute([$department_name,$faculty_id,$institution_id]);
							 if ( $feedback) {
							 	return 'success';
							 }else{
							 	return 'nope';
							 }
						endif;
					  		
					  }else{

					  	return "department_name_is_not_complete";
					  }
				}
	}
    
    public function add_verification_method($institution_id){

				if (isset($_POST['send'])) {

					$verification_method = $_POST['verification_name'];
					 // $queryForSelect = "SELECT 1 FROM reg_institutions  WHERE institution_verify_method  = ?";
					 //  $sqlForSelect = $this->conn->prepare($queryForSelect);
					 //  $sqlForSelect->execute([$verification_method]);
					 //  if (str_word_count($verification_method) > 1) {

					  	// if ($sqlForSelect->fetchColumn()):
					 	 // 	return "verification_name_exit"; 
					  
						  	$query = "UPDATE reg_institutions SET institution_verify_method = ? WHERE institution_id = '$institution_id'";
							 $sql = $this->conn->prepare($query);
							 $feedback = $sql->execute([$verification_method]);
							 if ( $feedback) {
							 	return 'success';
							 }else{
							 	return 'nope';
							 }
						
					  		
				// 	  }else{

				// 	  	return "department_name_is_not_complete";
				// 	  }
			 }
	}


	public function send_email_link($ins_name,$ins_email,$link)
	{

		if (isset($_POST['send'])):

			$institution_name = $_POST['reg_link_for_institution'];
			
			if (empty($institution_name)):

				return "select_institution";

			else:
				 
				if ($institution_name == $ins_name):

					 return  "success";
						
				// 	$emailfrom = "cvs@gmail.com";
				// 	$EmailTo = $ins_email;
				// 	$msg_subject = "CVS PLATFORM";
				// 	$message = $link;
				// 	$Subject = "CVS Registration Link";

				// 	// prepare email body text
				// 	$Body = "";
				// 	$Body .= "Name: ";
				// 	$Body .= $institution_name;
				// 	$Body .= "\n";
				// 	$Body .= "Email: ";
				// 	$Body .= $emailfrom;
				// 	$Body .= "\n";
				// 	$Body .= "Subject: ";
				// 	$Body .= $msg_subject;
				// 	$Body .= "\n";
				// 	$Body .= "Message: ";
				// 	$Body .= $message;
				// 	$Body .= "\n";

				// // send email
				// $successemail = mail($EmailTo, $Subject, $Body, "From:".$emailfrom);
				// if ($successemail){
				//    return  "success";
				// }else{
				//     return "nope";
				// }
				else:
					return "";
				endif;
			 endif;	
		endif;
	}
    
    
    public function institution_register()
	{
			
			if(isset($_POST['register'])):



				$institution_name = $_POST['name'];

				$institution_address = $_POST['institution_address'];

				$institution_city = $_POST['city'];

				$institution_state = $_POST['state'];

				$institution_country = $_POST['country'];

				$institution_zip_code = $_POST['zip_code'];

				$institution_phone = $_POST['phone'];

				$institution_email = $_POST['email'];

				$password = $_POST['password'];
        
                $veri_method = $_POST['veri_method'];

                $reg_date = date("jS".' - '."F".' - '."Y");

				$institution_password = password_hash($password , PASSWORD_DEFAULT);

				$institution_logo_name = $_FILES['institution_logo']['name'];

				$institution_logo_size = $_FILES['institution_logo']['size'];

				$institution_logo_tmp = $_FILES['institution_logo']['tmp_name'];

				$status = "Fully Registered";
				
				$target_file = "./institution_logo/".$_FILES['institution_logo']['name'];

				$check_image = 'cc';



				if($check_image == ''):
					return "select_image_file";
				else:
					if($institution_logo_size > 729014):
						return "too_large";
					else:
						$sql = "UPDATE reg_institutions SET institution_name = :institution_name, institution_address = :institution_address 
						,institution_city = :city, institution_country = :country, institution_state = :state, institution_zip_code = :zip_code, institution_phone = :phone, institution_email = :email, institution_password = :institution_password, institution_logo = :institution_logo_tmp, institution_verify_method = :veri_method, institution_reg_status = :status  WHERE institution_name = '$institution_name' ";
						$query = $this->conn->prepare($sql);
						$res = $query->execute([':institution_name' => $institution_name, ':institution_address' => $institution_address, ':city' => $institution_city, ':country' => $institution_country, ':state' => $institution_state, ':zip_code' => $institution_zip_code, ':phone' => $institution_phone, ':email' => $institution_email, ':institution_password' => $institution_password, ':institution_logo_tmp' => $institution_logo_name,':veri_method' => $veri_method,':status' => $status]);
						if ($res):
							move_uploaded_file($institution_logo_tmp, $target_file);
							
						  	return "success";
						else:
							return "failed_to_upload_file";
						endif;
					
				endif;
			endif;


		endif;
	}
    
    
	public function student_certificate_info($institution_id)
	{
			
			if(isset($_POST['add_student'])):



				$student_namef = $_POST['fname'];
        
                $student_namel = $_POST['lname'];
        
                $student_oname = $_POST['oname'];
        
                $student_fname = $student_namef.' '.$student_namel.' '.$student_oname;

				$faculty_name = $_POST['faculty_name'];
            
                $department_name = $_POST['department_name'];
        
                $program = $_POST['program'];
        
                $grade = $_POST['grade'];
        
                $degree = $_POST['degree'];
        
                $date_of_add = $_POST['date_of_add'];
        
                $date_of_grage = $_POST['date_of_grage'];
        
                $verification_p = $_POST['verification_p'];

				$student_picture_name = $_FILES['student_picture']['name'];

				$student_name_size = $_FILES['student_picture']['size'];

				$student_name_tmp = $_FILES['student_picture']['tmp_name'];

				
        
                $target_file = "./student_picture/".$_FILES['student_picture']['name'];

				$check_image = "cc";
        
                $queryForSelect = "SELECT 1 FROM student_certificate_info  WHERE verification_pin  = ? AND institution_id = ?";
					  $sqlForSelect = $this->conn->prepare($queryForSelect);
					  $sqlForSelect->execute([$verification_p,$institution_id]);

				if($sqlForSelect->fetchColumn()):
					return "regno_already_exits";
				else:
					if($student_name_size > 777048):
						return "too_large";
					else:
						$sql = "INSERT INTO student_certificate_info(student_fname,student_faculty_id,student_department_id,student_program,student_grade,student_degree,student_dof_admission,student_dof_graduation,verification_pin,student_passport,institution_id)
                        VALUES(?,?,?,?,?,?,?,?,?,?,?)";
                        $query = $this->conn->prepare($sql);
				        $feedback = $query->execute([$student_fname,$faculty_name,$department_name,$program,$grade,$degree,
                                                  $date_of_add,$date_of_grage,$verification_p,$student_picture_name,$institution_id]);
						if ($feedback):
							move_uploaded_file($student_name_tmp, $target_file);
							
						  	return "success";
						else:
							return "failed_to_upload_file";
						endif;
					
				endif;
			endif;


		endif;
	}

	public function add_faculty($institution_id){

				if (isset($_POST['add_faculty'])) {

					$faculty_name = $this->input_validation(ucwords($_POST['add_faculty_name']));
					 $queryForSelect = "SELECT 1 FROM institution_faculty  WHERE faculty_name  = ?";
					  $sqlForSelect = $this->conn->prepare($queryForSelect);
					  $sqlForSelect->execute([$faculty_name]);
					  if (str_word_count($faculty_name) > 1) {

					  	if ($sqlForSelect->fetchColumn()):
					 	 	return "faculty_name_exit"; 
					  	else:
						  	$query = "INSERT INTO institution_faculty(faculty_name,institution_id) VALUES(?,?)";
							 $sql = $this->conn->prepare($query);
							 $feedback = $sql->execute([$faculty_name,$institution_id]);
							 if ( $feedback) {
							 	return 'success';
							 }else{
							 	return 'nope';
							 }
						endif;
					  		
					  }else{

					  	return "falcuty_name_is_not_complete";
					  }
				}
	}


// 	public function updateFastFood()
// 	{
// 		if (isset($_POST['updatefastfood'])) {
// 			$productid = $_POST['product_id'];
// 			$fname = $_POST['full_name'];
// 			$password = $_POST['product_price'];
// 			$email = $_POST['product_category'];
// 			$phone = $_POST['product_status'];
			
// 			$sql = "UPDATE admin_add_product SET full_name = :fname, product_category = :email 
// 			,product_price = :password, product_status = :phone WHERE product_id = '$productid'";
// 			$query = $this->conn->prepare($sql);
// 			$res = $query->execute([':fname' => $fname, ':email' => $email, ':password' => $password, ':phone' => $phone]);
// 			if ($res) {
// 				return 'successful';
// 			}
// 		}
// 	}


// 	public function updateSwallowProduct()
// 	{
// 		if (isset($_POST['updateswallow'])) {
// 			$productid = $_POST['product_id'];
// 			$fname = $_POST['full_name'];
// 			$password = $_POST['product_price'];
// 			$email = $_POST['product_category'];
// 			$phone = $_POST['product_status'];
			
// 			$sql = "UPDATE admin_add_product SET full_name = :fname, product_category = :email 
// 			,product_price = :password, product_status = :phone WHERE product_id = '$productid'";
// 			$query = $this->conn->prepare($sql);
// 			$res = $query->execute([':fname' => $fname, ':email' => $email, ':password' => $password, ':phone' => $phone]);
// 			if ($res) {
// 				return 'successful';
// 			}
// 		}
// 	}

}


?>