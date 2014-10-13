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
                     
              echo '<!-- Text input-->
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
               <input type="file" name="attendance" id="attendance">    
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
                 <input type="file" name="results" id="results">
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