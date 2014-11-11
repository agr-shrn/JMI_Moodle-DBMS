<?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());


    $courseid = $_POST['courseid'];
    $coursename = $_POST['coursename'];
    $teacherid = $_POST['teacherid'];
    $syllabus = $_POST['syllabus'];
    $courseid2 = $_POST['courseid2'];


    if(isset($_POST['add'])){
        
            //insert query
        if(!empty($courseid)){
            $query = "INSERT INTO courses VALUES('$courseid','$coursename','$syllabus','$teacherid')";
			$rs = mysqli_query($r,$query);
			if($rs){
                $msg = "New course record added!";
            }  
            else{
                $msg = "Please enter a valid course-id.";
            }
        }  
        else{
            redirect_to("../template/admin_course.php");
        } 

    }

    else if (isset($_POST['edit'])){
        if(!empty($courseid)){
            $query = "UPDATE courses SET course_id='$courseid', course_name='$coursename', syllabus='$syllabus', tr_id='$teacherid'";
			$query .= "WHERE course_id='{$courseid}'";
            mysqli_query($r,$query);
			
			$rs=1;
            if(mysqli_affected_rows($r)){
                $msg = "Course record edited!";
            }  
            else{
                $msg = "Please enter a valid course-id.";
            }           
		}
		else{
            redirect_to("../template/admin_course.php");
        } 
    }

    else if(isset($_POST['delete'])){
        if(!empty($courseid2)){
            $query = "DELETE FROM courses WHERE COURSE_ID = '$courseid2'";
                $rs = mysqli_query($r,$query);
                $msg = "Course record deleted successfully!";

        }
        else{
            $msg = "Please enter a valid course-id";
        }
    }

   
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

   

    ?>
