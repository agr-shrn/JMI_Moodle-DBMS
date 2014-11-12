<?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());

    $rs = 0;
    $postid = $_POST['postid'];
	$commentid = $_POST['commentid'];
	
	 if(isset($_POST['delete_post'])){
        if(!empty($postid)){
            $query = "DELETE FROM posts WHERE POST_ID = '$postid'";
                $rs = mysqli_query($r,$query);
                $msg = "Post deleted successfully!";

        }
        else{
            $msg = "Please enter a valid post-id";
        }
    }
	
	 if(isset($_POST['delete_comment'])){
        if(!empty($commentid)){
            $query = "DELETE FROM comments WHERE COMMENT_ID = '$commentid'";
                $rs = mysqli_query($r,$query);
                $msg = "Comment deleted successfully!";

        }
        else{
            $msg = "Please enter a valid comment-id";
        }
    }

    if(1){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>