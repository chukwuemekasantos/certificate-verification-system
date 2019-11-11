<?php

   
	
	include_once '../contoller/select.php';
    
   
	$page = $_REQUEST['page'];

     $search = $_REQUEST['searchvalue'];

	switch ($page) {
		       
        case 'selectInstitution':
            
            
            $sod = new select();
          $list =  $sod->SearchInstitutions($search);
            if($list):
                echo json_encode($list);
            endif;
           
        break;
		
		
		default:
			# code...
			break;
	}


	
















?>