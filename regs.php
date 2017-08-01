<?php
include "header.php";
include "db.php";

if(isset($_POST['register']))
{
    $name    = $_POST['name'];
    $uname   = $_POST['uname'];
    $email   = $_POST['email'];
    $pass    = $_POST['pass'];
    $pass1   = $_POST['pass1'];
    $gender  = $_POST['gender'];
    $dob     = $_POST['dob'];
    $s_q_id  = $_POST['S_q_id'];
    $s_Ans   = $_POST['s_ans'];

    if(!empty($name) && !empty($uname) && !empty($email) && !empty($pass) && !empty($pass1) && !empty($gender) && !empty($dob) && !empty($s_q_id) && !empty($s_Ans))
    {
                  if($pass == $pass1)
                  {
                       $sql ="SELECT username ,email FROM `regs`";
                       $res = mysqli_query($conn, $sql);
                       $mail=0;
                       $username=0;
                       while($row=mysqli_fetch_assoc($res))
                       {
                       	  $mail = $row['email'];
                          $username = $row['username'];
                          // echo "<pre>";
                          // print_r($row);

                       }
                       //die();
                       if($email == $mail)
                       {
                           echo "<div class='alert alert-danger' align='center'>";
                           echo "Email already Exists";
                           echo "</div>";
                       }
                       else
                       {

                           if($uname == $username)
                           {
                             echo "<div class='alert alert-danger' align='center'>";
                           echo "username already Exists";
                           echo "</div>";
                           }
                           else
                           {
                          
                       	 $q = "INSERT INTO `regs`(name,username,email,pass,dob,gender,s_q_id,s_Ans) VALUES('$name','$uname','$email','$pass','$dob','$gender', '$s_q_id', '$s_Ans')";
                       	 $res1 = mysqli_query($conn, $q);
                       	 if($res1 > 0)
                       	 {
                                     	echo "<div class='alert alert-success' align='center'>";
                           				echo "Registration sucessFull";
                           				echo "</div>";
                       	 }
                       	 else
                       	 {

                       	 	  echo "<div class='alert alert-danger' align='center'>";
                              echo "Failed to Register";
                              echo "</div>";

                       	 }
                        }
                        
                       }
                  }
                  else
                  {
                        	echo "<div class='alert alert-danger'>";
    						echo "Password do not match";
    						echo "</div>";
                  }
    }
    else
    {
    	echo "<div class='alert alert-danger'>";
    	echo "Please fill all the fields";
    	echo "</div>";
    }

}
else
{
   header('location: registration.php');
}




?>