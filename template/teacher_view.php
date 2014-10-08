  <?php require_once("../includes/session.php"); ?>
  <?php require_once("../includes/connection.php"); ?>
  <?php require_once("../includes/functions.php"); ?>

  <?php 

    if(isset($_POST['go'])){
      
        $comment = $_POST['comment'];
         $user_id = $_SESSION['user_id'];
         $post_id = $_POST['postid'];
         $query = "SELECT TR_NAME FROM teacher where TR_ID='$user_id'";
         $r = mysqli_query($connection,$query);
         $row = mysqli_fetch_row($r);
         $user = $row[0];
         $_POST['coursename']= $_POST['reload'] ;
         //get back here after posts are handled.
         $qry = "INSERT into comments (CONTENT, USER, USER_ID, POST_ID) VALUES ('$comment','$user','$user_id','$post_id')";
         $rs = mysqli_query($connection,$qry);
         if(!$rs){
          echo "error";     
         }

      }

  ?>

  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">

      <title>Teacher: View</title>

      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
       <link href="css/style.css" rel="stylesheet">

    </head>

    <body>

      <div class="blog-masthead">
        <div class="container">
          <nav class="blog-nav">
            <a class="blog-nav-item" href="teacher_home.php">Home</a>
            <a class="blog-nav-item active" href="teacher_view.php">View post</a>
            <a class="blog-nav-item" href="teacher_post.php">New Post</a>
            <a class="blog-nav-item" href="teacher_books.php">Books</a>
            <a class="blog-nav-item" href="teacher_account.php">MyAccount</a>
            <a class="blog-nav-item" href="../public/logout.php">Logout</a>
           </nav>
        </div>
      </div>



      <div class="container">
     
        <div class="blog-header">
          <h1 class="blog-title">JMI Teacher's Blog</h1>
          <p class="lead blog-description">Search specific courses to see the related posts.</p>
        </div>

        <div class="row">

          
          <?php 
            if(isset($_POST['coursename']))
            {
              $cname = $_POST['coursename'];
              $qu = "SELECT COURSE_ID from courses WHERE COURSE_NAME='$cname'";
              $run = mysqli_query($connection,$qu);
              $cid = mysqli_fetch_row($run);
              
              $query = "SELECT POST_TITLE,POST_ID,CONTENT,TIME_STAMP FROM posts WHERE COURSE_ID='$cid[0]' ORDER BY TIME_STAMP DESC";
              $rs = mysqli_query($connection,$query);
              
              $n = mysqli_num_rows($rs);
              for($i=0; $i<$n; $i++)
              {
                echo '<div class="col-sm-8 ">';
                $row = mysqli_fetch_row($rs);
                echo  '<div class="blog-post">';
                 echo   '<h2 class="blog-post-title">'.$row[0].'</h2>';
                   echo '<p class="blog-post-meta">POST#'.$row[1].' dated '.$row[3].'</p>';
                   echo  '<p>'.$row[2].'</p>';
                  
                    $qry = "SELECT CONTENT,USER,TIME_STAMP FROM `comments` WHERE POST_ID=$row[1] ORDER BY TIME_STAMP DESC";
                    $p = mysqli_query($connection,$qry);
                    
                    $count = mysqli_num_rows($p);
                    
                    if($count <> 0)
                    {
                       echo '<hr>';
                      echo '<h4>Comments</h4>';
                    }
                    
                    for($j=0; $j<$count; $j++)
                    {
                        $all = mysqli_fetch_row($p);  
                        echo '<ul>';
                        echo '<li>';
                        echo '<p class="blog-post-meta">'.$all[1].' Posted on '.$all[2].'</p>';
                        echo '<p >'.$all[0]. '</p>';
                        echo  '</li>';
                        echo '</ul>';
                    }
                     echo '<hr>';
                     echo '<h4>Add comments</h4>
                          <div class="col-lg-8">
                          <form action="teacher_view.php" method="post" role="form">
                            <div class="input-group">
                              <input type="hidden" name="reload" value="'.$cname.'">
                              <input type="hidden" name="postid" value="'.$row[1].'">
                              <input type="text" name="comment" class="form-control">
                              <span class="input-group-btn">
                                <button class="btn btn-default" name="go" type="submit">Go!</button>
                              </span>
                              </form>
                            </div><!-- /input-group -->
                          </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->';
                        echo '<hr>';
                      
                     echo '</div><!-- /.blog-post -->';
                }
                echo '</div>';
            }  echo '</div>';
          ?>
      
          <div class="col-md-12">
          <!--search input -->
          <form method="post" action="teacher_view.php">
                
                   <label class="col-sm-2 control-label" for="textinput">Filter by course</label>
                    <div class="col-sm-4">
                  <select class="form-control" name="coursename" > 
                  
                 <?php 
                    $tr = $_SESSION['user_id'];
                    $query = "SELECT COURSE_NAME FROM courses WHERE TR_ID='$tr'";
                    $rs = mysqli_query($connection,$query);
                    $nm = mysqli_num_rows($rs);
                    for( $i=0; $i<$nm; $i++){
                      $row = mysqli_fetch_row($rs);
            echo '<option>'.$row[0].'</option>';
                      } ?>

                  </select>
                  </div>
                   <button type="submit" name="courseid" class="btn btn-primary">Submit</button>
                  </form>
                  </div>
        </div><!-- /.row -->

      <!--footer-->
      <div class="push"></div>
      <div class="blog-footer">
        <p>project by <a href="#">Sushmita-Sharan-Ashar</a></p>
      </div>
      <!--footer-->

      </div><!-- /.container -->


      <script src="../../dist/js/bootstrap.min.js"></script>
      <script src="../../assets/js/docs.min.js"></script>
    </body>
  </html>
