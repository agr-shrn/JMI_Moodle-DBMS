<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php

	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$conf_newpass = $_POST['conf_newpass'];
	$user = $_SESSION['user_id'];
  
    if(isset($_POST['submit'])){
            //insert query
        if(!empty($oldpass)){
			$query = "SELECT * FROM admin WHERE username = '$user' and password = '$oldpass'";
			$rs = mysqli_query($connection,$query);
			$nm = mysqli_num_rows($rs);
            if($nm==1 and $newpass==$conf_newpass){
				$query2 = "UPDATE admin SET password='$newpass' WHERE username='$user'";
				$rs2 = mysqli_query($connection,$query2);
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