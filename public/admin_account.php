<?php

	include_once("../includes/functions.php");
	include_once("../includes/session.php");
    
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "12345");
	define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

	$r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());
  
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$conf_newpass = $_POST['conf_newpass'];
	$user = $_SESSION['user_id'];
  
    if(isset($_POST['submit'])){
            //insert query
        if(!empty($oldpass)){
			$query = "SELECT * FROM admin WHERE username = '$user' and password = '$oldpass'";
			$rs = mysqli_query($r,$query);
			$nm = mysqli_num_rows($rs);
            if($nm==1 and $newpass==$conf_newpass){
				$query2 = "UPDATE admin SET password='$newpass' WHERE username='$user'";
				$rs2 = mysqli_query($r,$query2);
                $msg = "Password changed successfully!";
            }  
            else{
                $msg = "Please enter the correct old password or re-check the new password";
            }			
        }  
        else{
            redirect_to("../template/admin_account.php");
        } 
		$rs=1;
    }
	
	    if($rs){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>