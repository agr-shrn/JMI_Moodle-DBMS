<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Teacher: Posts</title>

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
          <a class="blog-nav-item" align="right" href="logout.php">Logout</a>
         </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        
        <p class="blog-post-title">Add books </p>
        <hr>
        <form class="form-horizontal" role="form" method="post" action="teacher_books.html">
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
              <input type="text" name="bookname" placeholder="enter book title with author name " class="form-control">
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

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="lead blog-description">Books for the course:</h2>
           <hr>
            <ul>
            <li><p >A book this by that</p></li>
            <li> <p >A book this by that</p></li>
             </ul>
             </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <!--search input -->
        <div class="well">
                <h4>View books by course:</h4>
                <div class="input-group">
                    <form action="teacher_view.html" method="post">
                        <input type="text" placeholder="enter course" name="coursename" class="form-control">
                        
                    </form>
                </div>
            </div>
          <!--List of courses-->      
          <ul class="list-group">
              <li class="list-group-item active">Courses:</li>
              <li class="list-group-item">Dapibus ac facilisis in</li>
              <li class="list-group-item">Morbi leo risus</li>
              <li class="list-group-item">Porta ac consectetur ac</li>
              <li class="list-group-item">Vestibulum at eros</li>
            </ul>
         
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
