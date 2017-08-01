<?php
 include 'header.php';
 include 'db.php';
 if(!isset($_SESSION['emailtoverify']))
 {
 	header('location:login.php');
 }
        $email = $_SESSION['emailtoverify'];
        $sql = "SELECT * FROM `regs` WHERE email='$email'";
                $res = mysqli_query($conn, $sql);
                if(mysqli_num_rows($res) > 0 )
                {
                	$row=mysqli_fetch_assoc($res);
                	$q_id = $row['s_q_id'];
                	 $sql2 = "SELECT q FROM `s_ques` WHERE id ='$q_id'";
                	 $rsl = mysqli_query($conn, $sql2);
                	 $row1 = mysqli_fetch_assoc($rsl);
                	?>
                
              <form class="form-horizontal" method="post" action="security.php">
  <fieldset>
    <legend></legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Secret Question</label>
      <div class="col-lg-6">
        <input type="text" name="s_q" class="form-control" id="inputPassword" value="<?php echo $row1['q']; ?>" readonly autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Answer</label>
      <div class="col-lg-6">
        <input type="text" name="ans" class="form-control" id="inputPassword" placeholder="your Answer" required autofocus">
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
                	<?php
                }
                else
                {
                	echo "<div class='alert alert-danger' align='center'>";
                	echo "Error Occured";
                	echo "</div>";
                	session_destroy();
                }
?>