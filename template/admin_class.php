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

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

   
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="admin_home.php">Home</a>
          <a class="blog-nav-item" href="admin_course.php">Courses</a>
          <a class="blog-nav-item" href="admin_students.php">Students</a>
          <a class="blog-nav-item" href="admin_teachers.php">Teachers</a>
          <a class="blog-nav-item active" href="admin_class.php">Classes</a>
          <a class="blog-nav-item" href="admin_post.php">Posts$Comments</a>
          <a class="blog-nav-item" href="admin_account.php">MyAccount</a>
      </nav>
      </div>
    </div>

    <div class="container">
        <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="form-horizontal" role="form" method="post" action="../public/admin_class.php">
        <fieldset>

          <!-- Form Name -->
          <legend>Add/Edit Class record</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Class-ID</label>
            <div class="col-sm-10">
              <input type="text" name="classid" id="classid" placeholder="Enter Class-id without spaces" class="form-control">
            </div>
          </div>

         <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Department</label>
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

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Attendance</label>
            <div class="col-sm-10">
              <input type="text" name="attendance" id="attendance" placeholder="Enter Attendance url or leave blank" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
           <label class="col-sm-2 control-label" for="textinput">Semester</label>
            <div class="col-sm-10">
                 <select class="form-control" name="sem" >
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  </select>
               </div>
          </div>
<!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Results</label>
            <div class="col-sm-10">
              <input type="text" name="result" id="result" placeholder="Enter results url or leave blank" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" name="edit" class="btn btn-default" id="">Edit</button>
                <button type="submit" name="add" class="btn btn-primary">Add</button>
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