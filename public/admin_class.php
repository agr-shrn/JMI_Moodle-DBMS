<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php


        
        $class_id = $_POST['classid'];
        $dept = $_POST['department'];
        $attend = $_POST['attendance'];
        $semester = $_POST['sem'];
        $res = $_POST['result'];

        
    if(isset($_POST['add'])){
        //insert query
        if(!empty($class_id)){
            $query = "INSERT INTO class VALUES('$class_id','$dept','$attend','$semester','$res')";
            $rs = mysqli_query($connection,$query);
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
            $p = mysqli_query($connection,$query);
            $nm = mysqli_num_rows($p);
            if($nm == 0){
                redirect_to("../template/class.php");
            }
            $query = "INSERT INTO class VALUES('$class_id','$dept','$attend','$semester','$res')";
            $rs = mysqli_query($connection,$query);
            $msg="Class record edited successfully!";
        }
        else{
            $msg = "Please enter a valid class-id";
        }
    }

    if($rs){
        require '../template/header.php';
        require '../template/main.php';
        echo '<div class="blog-header">
                <h4 class="blog-title" align="center">'."$msg".'</h4>
            </div>';
        require '../template/footer.php';
    }


?>
