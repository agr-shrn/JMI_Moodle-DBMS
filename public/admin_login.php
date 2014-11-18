<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php

    $user = $_POST['username'];
    $password = $_POST['password'];


    if(isset($_POST['submit']) && isset($user) && isset($password))
    {
        $query = "SELECT * from admin";
        $rs = mysqli_query($connection, $query);
        confirm_query($rs);
        $row = mysqli_fetch_row($rs);
        $hashed_password = sha1($password);
        if($user === $row[0] && $hashed_password === $row[1]){
            $_SESSION['loggedin'] = 1;
            $_SESSION['user_id'] = $user;
            redirect_to("../template/admin_home.php");
        }
    } 

        redirect_to("../template/homepage.php");
    
?>