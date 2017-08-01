<?php
//session_start();
include "header.php";
include 'db.php';
if(!isset($_SESSION['email']))
{
	header('location: login.php');
}
?>

<div class="container">
  <span>
       <div class="col col-lg-2">
       <a href="add-portfolio.php">
  	       <button type="submit" class="btn btn-primary">Create Portfolio</button>
      </a>
  	  </div>
  	  <div class="col col-lg-2">
  	  <a href="edit.php">
  	  <button type="submit" class="btn btn-success"> Edit Details</button>
  	  </a>
  	  </div>
      <div class="col col-lg-2">
      <?php
          $email = $_SESSION['email'];
          $sql = "SELECT id,name FROM `regs` WHERE email='$email'";
          //$_SESSION['u_id']=$row['id'];
          $res = mysqli_query($conn, $sql);
          if(mysqli_num_rows($res) > 0)
          {

              $row=mysqli_fetch_assoc($res);
              //print_r($row);
      ?>
      <a href="portfolio.php?id=<?php echo $row['id'];?>?<?php echo md5(rand(0,10));?>&&name=<?php echo $row['name']; ?>">
                                            <button class="btn btn-info">View Portfolio</button>
                                            </a>
 <?php
      }
          else
          {
            echo "Error";
          }
 ?>
      </div>
  </span>
	
</div>