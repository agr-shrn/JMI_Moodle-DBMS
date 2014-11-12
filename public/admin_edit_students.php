<?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());


    $studentid = $_POST['studentid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $classid = $_POST['classid'];
    $password = $_POST['password'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	
	
    if (isset($_POST['submit'])){
        if(!empty($studentid)){
            if($lastname === "")
                $firstname=$firstname." ";
            $query = "UPDATE student SET student_id='$studentid', student_name='$firstname $lastname', password='$password', class_id='$classid', contact='$contact', email='$email' ";
			$query .= "WHERE student_id='{$studentid}'";
            mysqli_query($r,$query);
			$rs=1;
            if(mysqli_affected_rows($r)){
                $msg = "Student record edited!";
            }  
            else{
                $msg = "Please enter a valid student-id.";
            }           
		}
		else{
            redirect_to("../template/admin_student.php");
        } 
    }
	
    if(1){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>
