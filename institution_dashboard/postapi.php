<?php

    session_start();
	
	include_once '../contoller/select.php';
    
    $institution_id = $_SESSION['data']['institution_id'];
	
	$page = $_REQUEST['page'];

     $faculty = $_REQUEST['faculty'];


	switch ($page) {
		    
        case 'selectDepartment':
            
            
            $sod = new select();
          $list =  $sod->SelectOfDepartment($institution_id,$faculty);
            if($list):
                echo json_encode($list);
            endif;
           
        break;
		
		
		default:
			# code...
			break;
	}


	
















?>