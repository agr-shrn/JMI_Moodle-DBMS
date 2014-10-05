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
          <a class="blog-nav-item" href="logout.php">Logout</a>
         </nav>
      </div>
    </div>



    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">JMI Teacher's Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <h4>Comments</h4>
            <ul>
            <li>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
            <p >This blog post shows a few different types of content that's supported and styled with Bootstrap. </p>
             </li>
             </ul>
             </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <!--search input -->
        <div class="well">
                <h4>Blog Search</h4>
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
