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

    <title>JMI-Moodle</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
</head>

<body>

    <div id="wrapper">

       
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="students_dashboard.html">JMI-Moodle</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 
                        $id = $_SESSION['user_id'];
                        $query = "SELECT STUDENT_NAME FROM student WHERE STUDENT_ID='$id'";
                        $rs = mysqli_query($connection,$query);
                        $name=mysqli_fetch_row($rs);
                        echo $name[0];
                        
                    ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="students_profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="students_account.php"><i class="fa fa-fw fa-gear"></i>Account</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../public/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="students_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li >
                        <a href="students_courses.php"><span class="glyphicon glyphicon-chevron-right"></span> Select course</a>
                    </li>
                    <li class="active">
                        <a href="students_blog.php"><span class="glyphicon glyphicon-comment"></span> Blog</a>
                    </li>
                    
                    <li>
                        <a href="students_view.php"><span class="glyphicon glyphicon-user"></span> Students/Teachers</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><span class="glyphicon glyphicon-chevron-down"></span> Resources <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="students_syllabus.php">Syllabus</a>
                            </li>
                            <li>
                                <a href="students_attendance.php">Attendance</a>
                            </li>                                                   
                            <li>
                                <a href="students_result.php">Results</a>
                            </li>
                            <li>
                                <a href="students_holiday.php">Holiday Calendar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="students_books.php"><span class="glyphicon glyphicon-book"></span> Books/Reference</a>
                    </li>
                </ul>
            </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="page-header">
                            <h1 style="font-family:centaur; font-weight:bold">BLOG <small>recent posts</small></h1> <!--make recent posts to active course-->
                        </div> 
                        <!--single blog style-->
                        <div class="well" style="margin-top:20px; background-color:#E5F1C8">
                            <div class="blog-post">
                                <p style="font-family:Eras Medium ITC; font-weight:550; font-size:20px">Content goes here. Please make sure posts are written in proper case.</p>
                                <p class="blog-post-meta" style="font-size:10px"><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                                <hr style="border-color:#000000">
                                <h5>Comments:</h5>
                                <ul>
                                    <li>
                                    <p class="blog-post-meta" >shehzad</p>
                                    <p >comments go here</p>
                                    </li>
                                    <li>
                                    <p class="blog-post-meta">August 28, 2013 11:00</p>
                                    <p >comments go here</p>
                                    </li>
                                </ul>
                                
                                <form action="teacher_view.php" method="post" role="form">
                                    <div class="input-group">
                                        <input type="text" name="comment" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" name="go" type="submit">comment</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div><!-- /.row -->
                        </div>
                                <!--single blog ends-->
                                <!--single blog style-->
                        <div class="well" style="margin-top:20px; background-color:#E5F1C8">
                            <div class="blog-post">
                                <p style="font-family:Eras Medium ITC; font-weight:550; font-size:20px">Content goes here. Please make sure posts are written in proper case.</p>
                                <p class="blog-post-meta" style="font-size:10px"><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                                <hr style="border-color:#000000">
                                <h5>Comments:</h5>
                                <ul>
                                    <li>
                                    <p class="blog-post-meta" >shehzad</p>
                                    <p >comments go here</p>
                                    </li>
                                    <li>
                                    <p class="blog-post-meta">August 28, 2013 11:00</p>
                                    <p >comments go here</p>
                                    </li>
                                </ul>
                                
                                <form action="teacher_view.php" method="post" role="form">
                                    <div class="input-group">
                                        <input type="text" name="comment" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" name="go" type="submit">comment</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div><!-- /.row -->
                        </div>
                                <!--single blog ends-->

                    </div>  
                                     
                                
                          
                    <div class="col-lg-3 col-lg-offset-1">
                    <br /><br /><br /><br /><br /><br />  
                    <div class="well" style="background-color:#c0d6e4">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                    </div>
                      
                    <ul class="list-group">
                    <!-- php code has to go here to autogenerate the courses corresponding to student -->
                      <li class="list-group-item active">Courses:</li>
                      <li class="list-group-item">Computer Architecture</li>
                      <li class="list-group-item">Data Structures</li>
                      <li class="list-group-item">Analog and Digital</li>
                      <li class="list-group-item">Automata Theory</li>
                    </ul>
                    </div> 

                      <div class="col-lg-12">   
                               
                        <hr>
                        <p align="center">Project by <a href="">Sushmita-Sharan-Ashar</a></p>
    
                    </div> 

                </div>       
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
