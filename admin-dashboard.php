<?php
include "header.php";
if(!isset($_SESSION['loggedin']))
{
	header('location: login.php');
}
?>
 <div class="container">
 <span>
 	<div class="col col-lg-2">
 	    <a href="users.php">
 		<button class="btn btn-primary" name="view"> View Users </button>
 		</a>
 	</div>
 	<div class="col col-lg-2">
 		<button class="btn btn-success">View Profile</button>
 	</div>
 	<div class="col col-lg-2">
 	    <a href="add-portfolio.php">
 		<button class="btn btn-danger">Add portfolio</button>
 		</a>
 	</div>
 </span>
 	
 </div>