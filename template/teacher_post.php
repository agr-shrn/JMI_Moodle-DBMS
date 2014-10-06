<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

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
          <a class="blog-nav-item active" href="teacher_post.php">New Post</a>
          <a class="blog-nav-item" href="teacher_books.php">Books</a>
          <a class="blog-nav-item" href="teacher_account.php">MyAccount</a>
          <a class="blog-nav-item" align="right" href="logout.php">Logout</a>
         </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <p class="text-center"><h4>Add new posts here.</h4></p>
      </div>

      <div class="row">
      <div class="col-md-10 col-md-offset-1">
      <form role="form">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Select course</label>
            <div class="col-sm-10">
                 <select class="form-control" name="department" >
                  <option value="computer engineering">computer engineering</option>
                  <option value="electrical engineering" >electrical engineering</option>
                  <option value="civil engineering">civil engineering</option>
                  <option value="mechanical engineering">mechanical engineering</option>
                  <option value="electronics and communication engineering">electronics and communication engineering</option>
                  </select>
               </div>
            </div>
          <br />
          <br />
          <br />
          <textarea class="form-control" rows="3" placeholder="Content here."></textarea>
          
          <br />
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
      </div>
      </div>

    </div><!-- /.container -->

    <!--footer-->
    <div class="push"></div>
    <div class="blog-footer">
      <p>project by <a href="#">Sushmita-Sharan-Ashar</a></p>
    </div>
    <!--footer-->
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>