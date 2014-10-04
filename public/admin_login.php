<?php

    include_once("../includes/functions.php");
    include_once("../includes/session.php");
     $host = "localhost";
      $user = "root";
      $password = "12345";
      $db = "jmi_moodle";
      $r = mysql_connect($host, $user, $password);
  
    mysql_select_db($db);
 
    $user = $_POST['username'];
    $password = $_POST['password'];

    if(isset($_POST['submit']) && isset($user) && isset($password)){
        $query = "SELECT * from admin";
        $rs = mysql_query($query);
        confirm_query($rs);
        $row = mysql_fetch_row($rs);
        if($user === $row[0] && $password === $row[1]){
            $_SESSION['loggedin'] = 1;
            $_SESSION['user_id'] = $user;
            redirect_to("../template/admin_home.php");
        }
    } 
        redirect_to("../template/homepage.php");
    
?>