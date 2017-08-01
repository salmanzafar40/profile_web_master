<?php
  include 'header.php';
  include 'db.php';
  if(!isset($_SESSION['loggedin']) AND !isset($_SESSION['email']))
  {
  	 header('location:login.php');
  }

    $email = $_SESSION['email'];
   $sqll = "SELECT id FROM `regs` WHERE email='$email'";
   $ress = mysqli_query($conn, $sqll);
   $row = mysqli_fetch_assoc($ress);
   $u_id = $row['id'];
   //echo "$u_id";
  //$u_id   = $_SESSION['u_id'];
      
      if(isset($_POST['addpt']))
      {
        $p_name = $_POST['p_name'];
        $c_name = $_POST['c_name'];
        $url    = $_POST['url'];
        $img    = $_FILES['img']['name'];
        $filetype =$_FILES ['img']['type'];
        $allowed = array("image/jpeg", "image/gif", "image/png");
        $location = 'p_images/'; 
        $path = $location.basename($_FILES['img']['name']); 
        // print_r($location);
        // die();


        //$img    = $_POST['img'];
        


           if(!empty($p_name) && !empty($c_name))
           {
                if(in_array($_FILES['img']['type'], $allowed))
                  {

                      if(file_exists("$location/$img"))
                      {
                        //printf($A);
                        //die();
                        $img = generatename()."_".$_FILES['img']['name'];

                        if(move_uploaded_file($_FILES['img']['tmp_name'], "$location/$img"))
                        {
                            $sql = "INSERT INTO `portfolio`(p_name, c_name, url, img, u_id) VALUES('$p_name','$c_name', '$url', '$img', '$u_id')";
                    $res = mysqli_query($conn, $sql);
                    if( $res > 0)
                    {
                            echo "<div class='alert-dismissable alert-danger' align='center'>";
                            echo "Project added";
                            echo "</div>";
                    }
                    else
                    {
                      echo "<div class='alert alert-danger' align='center'>";
                      echo "Error";
                      echo "</div>";
                    }
                        }
                           
                      }
                      else{

                              if(move_uploaded_file($_FILES['img']['tmp_name'], $path))
                              {
                                 $sql = "INSERT INTO `portfolio`(p_name, c_name, url, img, u_id) VALUES('$p_name','$c_name', '$url', '$img', '$u_id')";
                    $res = mysqli_query($conn, $sql);
                    if( $res > 0)
                    {
                            echo "<div class='alert alert-danger' align='center'>";
                            echo "Project added";
                            echo "</div>";
                    }
                    else
                    {
                      echo "<div class='alert alert-danger' align='center'>";
                      echo "Error";
                      echo "</div>";
                    }
                              }
                           
                      }
                  }
                  else
                  {

                      echo "Invalid image type";

                  }

                   
           }
           else
           {
              echo "<div class='alert alert-danger' align-='center'>";
              echo "Project name and Organization name are mandatory";
              echo "</div>";
           }



      }


function generatename()
{
  $newname = "abcdefghijklmnopqrstuvwxyz".rand(0,10);
  return $newname;
}

?>

<div class="container">
                   
<form class="form-horizontal" method="post"   enctype="multipart/form-data">
  <fieldset>
    <legend>Portfolio</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Project Name</label>
      <div class="col-lg-6">
        <input type="text" name="p_name" class="form-control" id="inputPassword" placeholder="e.g admission system" required autofocus">
       </div>
      </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Organization</label>
      <div class="col-lg-6">
        <input type="text" name="c_name" class="form-control" id="inputPassword" placeholder="Company name" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Project Url</label>
      <div class="col-lg-6">
        <input type="url" name="url" class="form-control" id="inputPassword" placeholder="Company name"  autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Project Image</label>
      <div class="col-lg-6">
        <input type="file" name="img" class="form-control" id="inputPassword" placeholder="Company name"  autofocus">
       </div>
      </div>
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Reset</button>
        <button type="submit" name="addpt" class="btn btn-primary">Add</button>
      </div>
    </div>
      </fieldset>
      </form>
	
</div>