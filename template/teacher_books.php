<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Teacher: Books</title>

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
          <a class="blog-nav-item" href="teacher_view.php">View post</a>
          <a class="blog-nav-item" href="teacher_post.php">New Post</a>
          <a class="blog-nav-item active" href="teacher_books.php">Books</a>
          <a class="blog-nav-item" href="teacher_account.php">MyAccount</a>
          <a class="blog-nav-item" href="../public/logout.php">Logout</a>
          </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        
        <p class="blog-post-title">Add books </p>
        <hr>
        <form class="form-horizontal" role="form" method="post" action="../public/teacher_books.php">
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">courseID</label>
            <div class="col-sm-5">
              <input type="text" name="courseid" placeholder="enter course-ID" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Book Name</label>
            <div class="col-sm-5">
              <input type="text" name="bookname" placeholder="enter book title" class="form-control">
            </div>
          </div>

           <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Author Name</label>
            <div class="col-sm-5">
              <input type="text" name="authname" placeholder="enter author name" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
              <div class="pull-right">
                <button type="submit" name="add" class="btn btn-primary">Add</button>
              </div>
            </div>
          </div>
      </form>
      </div>
      <hr>
      <div class="row">

        <div class="col-sm-6 blog-main">

          <div class="blog-post">
            <h2 class="lead blog-description">Books for the course:</h2>
           <hr>
            <ul>
              
                <?php 
                
                  if(isset($_POST['coursename']))
                  {
                    $cname = $_POST['coursename'];
                    $fetch_id = "SELECT COURSE_ID from courses WHERE COURSE_NAME = '$cname'";
                    $rslt = mysqli_query($connection,$fetch_id);
                    $cid = mysqli_fetch_row($rslt);
              
                    $qu = "SELECT BOOK_NAME, AUTHOR from books WHERE COURSE_ID= '$cid[0]'";
                    $run = mysqli_query($connection,$qu);
                    
                    $n = mysqli_num_rows($run);
                    for($i=0; $i<$n; $i++)
                    {
                      echo '<div class="col-sm-8 ">';
                      $row = mysqli_fetch_row($run);
                      echo  '<div class="blog-post">';
                      echo   '<h2 class="book-title">'.$row[0].'</h2>';
                      //echo "  BY\n";
                      echo  '<p>'.$row[1].'</p>';
                      echo'</div>';
                      echo'</div>';
                                           
                    }
                  }
                      
                 ?>
             </ul>
             </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

        <div class="col-sm-4 col-sm-offset-1 blog-sidebar">
        <!--search input -->
        <div class="well">

          <form method="post" action="teacher_books.php">
                
          <div class="col-sm-6">
          <select class="form-control" name="coursename" > 
                  
          <?php 
          $tr = $_SESSION['user_id'];
          $query = "SELECT COURSE_NAME FROM courses WHERE TR_ID='$tr'";
          $rs = mysqli_query($connection,$query);
          $nm = mysqli_num_rows($rs);
          for( $i=0; $i<$nm; $i++)
          {
              $row = mysqli_fetch_row($rs);
              echo '<option>'.$row[0].'</option>';
          }

          ?>

          </select>
          </div>
           <button type="submit" name="courseid" class="btn btn-primary">Submit</button>
          </form>

            </div>
         
         

        </div><!-- /.blog-sidebar -->

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
