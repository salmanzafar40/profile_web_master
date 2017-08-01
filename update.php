<?php
include 'header.php';
include 'db.php';
$email=$_SESSION['email'];

           if(isset($_POST['update']))
           {
                     $name = $_POST['name'];
                     $pass = $_POST['pass'];
                     $gdr  = $_POST['gender'];
                     $dob  = $_POST['dob'];

                     if(!empty($name) && !empty($pass) && !empty($gdr) && !empty($dob))
                     {

                     	$sql = "UPDATE `regs` SET name ='$name', pass ='$pass', dob ='$dob', gender = '$gdr' WHERE email = '$email'";
                     	$res = mysqli_query($conn, $sql);
                     	if($res > 0)
                     	{
                     		  header('location: dashboard.php');

                     	}
                     	else
                     	{ 

                     		echo "Failed to update information";

                     	}

                     }
                     else
                     {
                     	echo "<div class='alert alert-danger'>";
                     	echo "Fill all the fields";
                     	echo "</div>";
                     }
           }
           else
           {
           	 header('location: edit.php');
           }

?>