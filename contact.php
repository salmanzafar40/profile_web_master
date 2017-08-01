<?php
include "header.php";
?>


<form class="form-horizontal" method="post" action="contactres.php">
  <fieldset>
    <legend>Contact Us</legend>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-6">
        <input type="text" name="name" class="form-control" id="inputPassword" placeholder="name" required autofocus">
      </div>
      </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-6">
        <input type="email" name="email" class="form-control" id="inputPassword" placeholder="your@email" required autofocus">
      </div>
      </div>
       <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Message</label>
      <div class="col-lg-6">
        <textarea class="form-control" name="msg" rows="3" id="textArea" required autofocus></textarea>
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