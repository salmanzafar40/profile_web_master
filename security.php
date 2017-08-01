<?php

   include 'header.php';
   include 'db.php';
   if(!isset($_SESSION['emailtoverify']))
   {
   	header('location: login.php');
   }
   if(isset($_POST['ans']))
   {
         $ans = $_POST['ans'];
         $email = $_SESSION['emailtoverify'];
         $sql = "SELECT s_Ans FROM `regs` WHERE email='$email'";
         $res = mysqli_query($conn, $sql);
         if(mysqli_num_rows($res) > 0 )
         {
                    $row=mysqli_fetch_Assoc($res);
                    if($ans == $row['s_Ans'])
                    {
                    	header('location:changepass.php');

                    }
                    else
                    {
                    	echo "<div class='alert alert-danger' align='center'>";
                    	echo "Incorrect answer";
                    	echo "</div>";
                    	session_destroy();
                    }
         }
         else
         {
         	echo "<div class='alert alert-danger' align='center'>";
         	echo "Error Occured";
         	echo "</div>";
         	session_destroy();
         }
   }
   else
   {
   	echo "<div class='alert alert-danger' aling='center'>";
   	echo "Please Enter your answer";
   	echo "</div>";
   }

?>