    <?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());


    $class_id = $_POST['classid'];
    $dept = $_POST['department'];
    $attend = $_POST['attendance'];
    $semester = $_POST['sem'];
    $res = $_POST['result'];
    $class_id_2 = $_POST['classid2'];


    if(isset($_POST['add'])){
            //insert query
        if(!empty($class_id)){
            $query = "INSERT INTO class VALUES('$class_id','$dept','$attend','$semester','$res')";
            $rs = mysqli_query($r,$query);
            if($rs){
                $msg = "New class record added!";
            }  
            else{
                $msg = "Please enter a valid class-id.";
            }
        }  
        else{
            redirect_to("../template/class.php");
        } 

    }

    else if (isset($_POST['edit'])){
        if(!empty($class_id)){
            $query = "DELETE FROM class WHERE CLASS_ID = '$class_id'";
            $p = mysqli_query($r,$query);
            $nm = mysqli_affected_rows($p);
            if($nm == 0){
                redirect_to("../template/admin_class.php");
            } else {
             
                $query = "INSERT INTO class VALUES('$class_id','$dept','$attend','$semester','$res')";
                $rs = mysqli_query($r,$query);
                $msg="Class record edited successfully!";
            }
        }
        else{
            $msg = "Please enter a valid class-id";
        }
    }

    else if(isset($_POST['delete'])){
        if(!empty($class_id_2)){
            $query = "DELETE FROM class WHERE CLASS_ID = '$class_id_2'";
                $rs = mysqli_query($r,$query);
                $msg = "Class record deleted successfully!";

        }
        else{
            $msg = "Please enter a valid class-id";
        }
    }

    if($rs){
        require 'header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>
