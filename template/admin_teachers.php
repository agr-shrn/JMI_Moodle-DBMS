<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin: Students</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
   
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="admin_home.php">Home</a>
          <a class="blog-nav-item" href="admin_course.php">Courses</a>
          <a class="blog-nav-item" href="admin_students.php">Students</a>
          <a class="blog-nav-item active" href="admin_teachers.php">Teachers</a>
          <a class="blog-nav-item" href="admin_class.php">Classes</a>
          <a class="blog-nav-item" href="admin_post.php">Posts$Comments</a>
          <a class="blog-nav-item" href="admin_account.php">MyAccount</a>
       </nav>
      </div>
    </div>

    <div class="container">
        <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Add/Edit Teacher Accounts</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Teacher-ID</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Enter Teacher-id without spaces" class="form-control">
            </div>
          </div>

         <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">first name</label>
            <div class="col-sm-4">
              <input type="text" placeholder="first name" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">last name</label>
            <div class="col-sm-4">
              <input type="text" placeholder="last name" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Password</label>
            <div class="col-sm-10">
              <input type="password" placeholder="Enter default password" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-default">Edit</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->

    <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Delete Teacher Account</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Teacher-ID</label>
            <div class="col-sm-10">
              <input type="text" placeholder="Enter Teacher-ID without spaces" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Delete</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
    </div>
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
