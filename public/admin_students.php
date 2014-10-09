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
    $studentid2 = $_POST['studentid2'];


    if(isset($_POST['add'])){
            //insert query
        if(!empty($studentid)){
            $query = "INSERT INTO student VALUES('$studentid','$firstname $lastname','$password','$classid')";
            $rs = mysqli_query($r,$query);
            if($rs){
                $msg = "New student record added!";
            }  
            else{
                $msg = "Please enter a valid student-id.";
            }
        }  
        else{
            redirect_to("../template/admin_student.php");
        } 
    }

    else if (isset($_POST['edit'])){
        if(!empty($studentid)){
            $query = "UPDATE student SET student_id='$studentid', student_name='$firstname $lastname', password='$password', class_id='$classid' ";
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

    else if(isset($_POST['delete'])){
        if(!empty($studentid2)){
            $query = "DELETE FROM student WHERE STUDENT_ID = '$studentid2'";
                $rs = mysqli_query($r,$query);
                $msg = "Student record deleted successfully!";

        }
        else{
            $msg = "Please enter a valid student-id";
        }
    }

    if($rs){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>
