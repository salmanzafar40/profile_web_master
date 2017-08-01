<?php
include "header.php";
include "db.php";
if(!isset($_SESSION['email']))
{
  header('location:login.php');
}

 $email = $_SESSION['email'];
  $sql = "SELECT * FROM `regs` WHERE email='$email'";
  $res = mysqli_query($conn, $sql);
  global $name, $pass, $dob, $gdr;
  while($row = mysqli_fetch_assoc($res))
  {
      $name = $row['name'];
      $pass = $row['pass'];
      $dob  = $row['dob'];
      $gdr  = $row['gender'];
      //$date = date('Y-m-d',strtotime($dob));
      //echo "$date";
  }

?>

<form class="form-horizontal" method="post" action="update.php">
  <fieldset>
    <legend>Registration</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-6">
        <input type="text" name="name" class="form-control" id="inputPassword" value="<?php echo "$name";?>" required autofocus">
       </div>
      </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo "$email"; ?>" readonly required autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" name="pass" class="form-control" id="inputPassword" value="<?php  echo "$pass"; ?>" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-6">
        <select name="gender" class="form-control" id="select" required autofocus>
          <option>--Select--</option>
          <option <?php if($gdr==1) echo "selected='selected'"?>value="<?php echo "$gdr"; ?>">Male</option>
          <option <?php if($gdr==2) echo "selected='selected'"?>value="<?php echo "$gdr"; ?>">Female</option>
          <option <?php if($gdr==3) echo "selected='selected'"?>value="<?php echo "$gdr"; ?>">Unknown</option>
        </select>
        </div>
        </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Date of birth</label>
      <div class="col-lg-6">
        <input type="date" name="dob" value="<?php echo date('Y-m-d',strtotime($dob))?>" class="form-control" id="inputPassword" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" name="update" class="btn btn-primary">update</button>
      </div>
    </div>
      </fieldset>
      </form>