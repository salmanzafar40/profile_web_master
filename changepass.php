<?php
 include 'header.php';
 include 'db.php';
 if(!isset($_SESSION['emailtoverify']))
 {
 	header('location:login.php');
 }
      if(isset($_POST['pass'], $_POST['pass1']))
      {
      	$pass  = $_POST['pass'];
      	$pass1 = $_POST['pass1'];
      	if(!empty($pass) && !empty($pass1))
      	{
                 if($pass == $pass1)
                 {
                 	 $email = $_SESSION['emailtoverify'];
  			$sql = "UPDATE `regs` SET  pass ='$pass' WHERE email = '$email'";
                     	$res = mysqli_query($conn, $sql);
                       if($res > 0)
                       {
                          header('location: login.php');
                          session_destroy();
                       }
                       else
                       {
                       	  echo "<div class='alert alert-danger' align='center'>";
                       	  echo "Unable to update try again..!!";
                       	  echo "</div>";
                       }
                 }
                 else
                 {
                 	echo "<div class='alert alert-danger' align='center'>";
                 	echo "Password do not match";
                 	echo "</div>";
                 }
      	} 
      	else
      	{
      		echo "<div class='alert alert-danger' aling='center'>";
      		echo "Please Fill both Fields";
      		echo "</div>";
      	}
      }
?>

   <form class="form-horizontal" method="post">
  <fieldset>
    <legend>Change Password</legend>
<div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">confirm Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="inputPassword" placeholder="Re-enter Password" name="pass1" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" name="register" class="btn btn-primary">Submit</button>
      </div>
    </div>
      </fieldset>
      </form>