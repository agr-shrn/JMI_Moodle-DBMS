<?php

    include_once("../includes/functions.php");
    include_once("../includes/session.php");
      
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());

    $user = $_POST['username'];
    $password = $_POST['password'];

  

    if(isset($_POST['submit']) && isset($user) && isset($password)){
        $query = "SELECT * from admin";
        $rs = mysqli_query($r, $query);
        confirm_query($rs);
        $row = mysqli_fetch_row($rs);
        if($user === $row[0] && $password === $row[1]){
            $_SESSION['loggedin'] = 1;
            $_SESSION['user_id'] = $user;
            redirect_to("../template/admin_home.php");
        }
    } 

        redirect_to("../template/homepage.php");
    
?>