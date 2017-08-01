<?php
include "header.php";
include "db.php";

 if(isset($_POST['email'], $_POST['msg'], $_POST['name']))
 {
       $email = $_POST['email'];
       $name  = $_POST['name'];
       $msg   = $_POST['msg'];

       if(!empty($email) && !empty($name) && !empty($msg))
       {
             $sql = "INSERT INTO `contact`(name,email,message) VALUES('$name', '$email', '$msg')";
             $res = mysqli_query($conn,$sql);
             if($res > 0)
             {
               echo "<div class='alert alert-success' align='center'>";
               echo "Your Response has been submitted";
               echo "</div>";
             }
             else
             {
                echo "Error";
             }
       }
       else
       {
            echo "<div class='alert alert-danger'> Please fill all the fields </div>";
       }
 }
 else
 {
    header('location:contact.php');
 }
 //http://cricketgateway.pk/ipl-2017/livestreaming.html

?>