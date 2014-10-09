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
    $teacherid2 = $_POST['teacherid2'];


    if(isset($_POST['add'])){
            //insert query
        if(!empty($teacherid)){
            $query = "INSERT INTO teacher VALUES('$teacherid','$firstname $lastname','$password')";
            $rs = mysqli_query($r,$query);
            if($rs){
                $msg = "New teacher record added!";
            }  
            else{
                $msg = "Please enter a valid teacher-id.";
            }
        }  
        else{
            redirect_to("../template/admin_teacher.php");
        } 
    }

    else if (isset($_POST['edit'])){
        if(!empty($teacherid)){
            $query = "UPDATE teacher SET tr_id='$teacherid', tr_name='$firstname $lastname', password='$password' ";
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

    else if(isset($_POST['delete'])){
        if(!empty($teacherid2)){
            $query = "DELETE FROM teacher WHERE TR_ID = '$teacherid2'";
                $rs = mysqli_query($r,$query);
                $msg = "Teacher record deleted successfully!";

        }
        else{
            $msg = "Please enter a valid teacher-id";
        }
    }

    if($rs){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>
