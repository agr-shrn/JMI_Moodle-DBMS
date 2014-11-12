<?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());


    $teacherid = $_POST['teacherid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
	$email = $_POST['email'];
 //   $teacherid2 = $_POST['teacherid2'];
	
    if (isset($_POST['submit'])){
        if(!empty($teacherid)){
            $query = "UPDATE teacher SET tr_id='$teacherid', tr_name='$firstname $lastname', password='$password', email='$email' ";
			$query .= "WHERE tr_id='{$teacherid}'";
            mysqli_query($r,$query);
			$rs=1;
            if(mysqli_affected_rows($r)){
                $msg = "Teacher record edited!";
            }  
            else{
                $msg = "Please enter a valid teacher-id.";
            }           
		}
		else{
            redirect_to("../template/admin_teacher.php");
        } 
    }
	
    if(1){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>