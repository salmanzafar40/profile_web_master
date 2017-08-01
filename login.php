<?php
include "header.php";
?>

<form class="form-horizontal" method="post" action="lognres.php">
  <fieldset>
    <legend>User Login</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="email" name="email" class="form-control" id="inputPassword" placeholder="your@email" required autofocus">
       </div>
      </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required autofocus">
       </div>
      </div>
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" name="login" class="btn btn-primary">Submit</button> <br>
        <a href="forgetpass.php">Forget password</a>
      </div>
    </div>

      </fieldset>
      </form>
      <form class="form-horizontal" method="post" action="adminres.php">
  <fieldset>
    <legend>Admin Login</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="text" name="email" class="form-control" id="inputPassword" placeholder="admin@email" required autofocus">
       </div>
      </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password" required autofocus">
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

