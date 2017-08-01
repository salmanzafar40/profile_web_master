<?php
include 'header.php';
include 'db.php';
// session_start();
  // if(!isset($_SESSION['email']))
  // {
  //   header('location:login.php');
  // }
      if(isset($_POST['email'], $_POST['pass']))
      {
           $email = $_POST['email'];
           $pass  = $_POST['pass'];

               if(!empty($email) && !empty($pass))
               {
                      $sql = "SELECT * FROM `regs` WHERE email = '$email' AND pass = '$pass'";
                      $res = mysqli_query($conn,$sql);
                     // var_dump($res);
                       if(mysqli_num_rows($res) > 0)
                       {
                       	   $_SESSION['email']=$email;
                       	  // print_r($_SESSION['email']);
                          header('location:dashboard.php');
                       }
                       else
                       {
                             echo "<div class='alert alert-danger' align='center'>";
                             echo "User Not Exist";
                             echo "</div>";
                       }
                      
               }
               else
               {
                      echo "<div class='alert alert-danger'> Incorrect email or password </div>";
               }
      }
      else
      {

          header('location:login.php');

      }

?>