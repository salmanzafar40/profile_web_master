<?php
include 'db.php';
include 'header.php';
if(!isset($_SESSION['loggedin']))
{
	header('location:login.php');
}

if(isset($_POST['addpt']))
{
         
         $p_name = $_POST['p_name'];
         $c_name = $_POST['c_name'];
         $url    = $_POST['url'];
         $img    = $_FILES['img']['name'];

         if(!empty($p_name) && !empty($c_name))
         {
                      $sql = "INSERT INTO `portfolio`(p_name,c_name,url,img) VALUES('$p_name','$c_name', '$url', '$img')";
                      print_r($sql);
                      die();
                       $res = mysqli_query($conn, $sql);
                       // print_r($res);
                       // die();
                       if($res > 0 && mysqli_affected_rows($res) > 0)
                       {
                       	     header('location:add-portfolio.php');
                       }
                       else
                       {
                       	  echo "<div class='alert alert-danger' align='center'> Failed to add portfolio </div>";
                       }
         }
         else
         {
         	echo "<div class='alert alert-danger' align='center'>";
         	echo "project name and cpmany name are mandatory";
         	echo "</div>";
         }

}
else
{
	header('location:add-portfolio.php');
}



?>