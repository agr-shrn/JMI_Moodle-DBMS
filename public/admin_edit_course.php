<?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());
  
  	$file_name = $_FILES['syllabus']['name'];
	$file_type = $_FILES['syllabus']['type'];
	$file_tmp_name = $_FILES['syllabus']['tmp_name'];
	$location = '../uploads/';


    $courseid = $_POST['courseid'];
    $coursename = $_POST['coursename'];
    $teacherid = $_POST['trid'];
    $syllabus = $file_name;
	
    if (isset($_POST['submit'])){
        if(!empty($courseid)){
            $query = "UPDATE courses SET course_id='$courseid', course_name='$coursename', syllabus='$syllabus', tr_id='$teacherid'";
			$query .= "WHERE course_id='{$courseid}'";
            mysqli_query($r,$query);
			
			//$rs=1;
            if(mysqli_affected_rows($r)){
                $msg = "Course record edited!"; 	  
			
				if(isset($file_name)){
					if(!empty($file_name)){
						move_uploaded_file($file_tmp_name,$location.$file_name);
						$msg = "Course record edited!";
					}	
					else{
						$msg = "Error! File not uploaded. But the new course has been edited.";
					}
				}
			}
            else{
                $msg = "Please enter a valid course-id.";
            }           
		}
		else{
            redirect_to("../template/admin_course.php");
        } 
    }
	
	if(1){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>