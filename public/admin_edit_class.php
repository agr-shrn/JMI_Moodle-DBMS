    <?php

    include_once("../includes/functions.php");

    
  define("DB_SERVER", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "12345");
  define("DB_NAME", "jmi_moodle");


      //$r = mysqli_connect($host, $user, $password,$db);

  $r = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die("Database connection failed: " . mysql_error());

    $file_name1 = $_FILES['attendance']['name'];
	$file_type1 = $_FILES['attendance']['type'];
	$file_tmp_name1 = $_FILES['attendance']['tmp_name'];
    $file_name2 = $_FILES['results']['name'];
	$file_type2 = $_FILES['results']['type'];
	$file_tmp_name2 = $_FILES['results']['tmp_name'];
	$location = '../uploads/';

    $class_id = $_POST['classid'];
    $dept = $_POST['department'];
    $attend = $file_name1;
    $semester = $_POST['sem'];
    $res = $file_name2;
	
    if (isset($_POST['submit'])){
        if(!empty($class_id)){
            $query = "UPDATE class SET class_id='$class_id', department='$dept', attendance='$attend', semester=$semester, results='$res' ";
			$query .= "WHERE class_id='{$class_id}'";
            mysqli_query($r,$query);
			
			//$rs=1;
			
            if(mysqli_affected_rows($r)){
                $msg = "Class record edited!";
				if(isset($file_name1)){
					if(!empty($file_name1)){
						move_uploaded_file($file_tmp_name1,$location.$file_name1);
					}
				}	
				else{
					$msg = "Error! Attendance file not uploaded. But the new course has been added.";
				} 
				
				if(isset($file_name2)){
					if(!empty($file_name2)){
						move_uploaded_file($file_tmp_name2,$location.$file_name2);
					}
				}	
				else{
					$msg = "Error! Result file not uploaded. But the new course has been added.";
				} 		
            }  
            else{
                $msg = "Please enter a valid class-id.";
            }           
		}
		else{
            redirect_to("../template/admin_class.php");
        } 
    }
	
    if(1){
        require 'admin_header.php';
        echo '<div class="container"><br /><br/><h1>'."$msg".'</h1></div>';
        require 'footer.php';

    }


    ?>