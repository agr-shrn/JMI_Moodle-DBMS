<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("admin_header.php"); ?>


<div class="container">
  <div class="row">
        
          
        <?php 
          echo '<div class="col-md-10 col-md-offset-1">';
          if(isset($_POST['add'])){
             echo  '<form class="form-horizontal" role="form" method="post" action="admin_course.php">
                  <fieldset>
                    <legend>Edit Course</legend>';
                      //if(!isset($_POST['submit']))
                      //{
                          
                       echo '<div class="form-group">
                          <label class="col-sm-2 control-label" for="textinput">Course-ID</label>
                          <div class="col-sm-10">
                          <input type="text"  value="'.$_POST['cid'].'" disabled="disabled" class="form-control" >
                          </div>
                          </div>';
                          
                      $cid = $_POST['cid'];

                      $query = "SELECT `COURSE_NAME`, `SYLLABUS`, `TR_ID` FROM `courses` WHERE COURSE_ID='$cid'";
                      $run = mysqli_query($connection,$query);
                      $row = mysqli_fetch_row($run);
              echo '<!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Course Name</label>
                <div class="col-sm-10">
                  <input type="text" name="cname" value="'.$row[0].'" class="form-control">
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Teacher Id</label>
                <div class="col-sm-10">
                  <input type="text" name="teacherid"  value="'.$row[2].'" class="form-control">
                </div>
              </div>

              <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Syllabus</label>
            <div class="col-sm-10">
              <input type="file" name="syllabus" id="syllabus" value="'.$row[1].'">
            </div>
          </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="pull-right">
                    <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                  </div>
                </div>
              </div>

              </fieldset>
              </form>
              </div>';
          }
        ?>
        
        </div>
      </div>
<?php require_once("footer.php"); ?>