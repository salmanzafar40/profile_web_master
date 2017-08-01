<?php
     
     include "header.php";
     include 'db.php';

?>
   <form class="form-horizontal" method="post" action="regs.php">
  <fieldset>
    <legend>Registration</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-6">
        <input type="text" name="name" class="form-control" id="inputPassword" placeholder="name" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">User Name</label>
      <div class="col-lg-6">
        <input type="text" name="uname" class="form-control" id="inputPassword" placeholder="Your name" required autofocus">
       </div>
      </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required autofocus>
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">confirm Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass1" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-6">
        <select name="gender" class="form-control" id="select" required autofocus>
          <option>--Select--</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
          <option value="3">Unknown</option>
        </select>
        </div>
        </div>
      <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Date of birth</label>
      <div class="col-lg-6">
        <input type="date" name="dob" class="form-control" id="inputPassword" required autofocus">
       </div>
      </div>
       <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Questions</label>
      <div class="col-lg-6">
        <select name="S_q_id" class="form-control" id="select" required autofocus>
          <option>--Select--</option>
          <?php
               $qr = "SELECT * FROM `s_ques`";
               $rs = mysqli_query($conn, $qr);
               while($row=mysqli_fetch_assoc($rs))
               {

          ?>
          <option value="<?php echo $row['id']?>"> <?php echo $row['q']?></option>
          <?php
            }
          ?>
        </select>
        </div>
        </div>
        <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Answer</label>
      <div class="col-lg-6">
        <input type="text" name="s_ans" class="form-control" id="inputPassword" required autofocus">
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