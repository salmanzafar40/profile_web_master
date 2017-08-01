<?php
   include 'header.php';
   include 'db.php';

   if(isset($_POST['email']))
   {
            $email = $_POST['email'];
            if(!empty($email))
            {
                $sql = "SELECT * FROM `regs` WHERE email='$email'";
                $res = mysqli_query($conn, $sql);
                if(mysqli_num_rows($res) > 0 )
                {
                	$row=mysqli_fetch_assoc($res);
                	$_SESSION['emailtoverify']=$email;
                	header('location:verifydetails.php');
                    
                   
                }
                else
                {
                	echo "<div class='alert alert-danger' align='center' >";
                	echo "No such email found";
                	echo "</div>";
                	session_destroy();
                }
            }
            else
            {
            	echo "<div class='alert alert-danger' align='center'>";
            	echo "Enter your Email";
            	echo "</div>";
            }
   }
?>

  <form class="form-horizontal" method="post">
  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="text" name="email" class="form-control" id="inputPassword" placeholder="your@email.com" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </div>
    </div>
      </fieldset>
      </form>