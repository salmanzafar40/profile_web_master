<?php
include 'header.php';
include 'db.php';
      if(isset($_POST['email'], $_POST['pass']))
      {
           $email = $_POST['email'];
           $pass  = $_POST['pass'];

               if(!empty($email) && !empty($pass))
               {
                      $sql = "SELECT * FROM `admiin` WHERE username = '$email' AND pass = '$pass'";
                      $res = mysqli_query($conn,$sql);
                     // var_dump($res);
                       if(mysqli_num_rows($res) > 0)
                       {
                       	   $_SESSION['loggedin']=$email;
                       	  // print_r($_SESSION['email']);
                          header('location:admin-dashboard.php');
                       }
                       else
                       {
                             echo "<div class='alert alert-danger' align='center'>";
                             echo "No admin Found";
                             echo "</div>";
                       }
                      
               }
               else
               {
                      echo "<div class='alert alert-danger'> Incorrect email or password </div>";
               }
      }

?>