<?php

include 'header.php';
include 'db.php';

	if(!isset($_SESSION['email']))
	{
		header('location: dashboard.php');
	}			
				if(isset($_REQUEST['sr']))
				{ 
                    $sr = $_REQUEST['sr'];
                    if(!empty($sr))
                    {

                    	  $sql = "SELECT id,email,name FROM `regs` WHERE username='$sr' OR email ='$sr'";
                    	  $res = mysqli_query($conn,$sql);
                    	  if(mysqli_num_rows($res) > 0)
                    	  {
                    	  	while($row = mysqli_fetch_assoc($res))
                    	  	{

                    	  	 

                    	  	  $name = $row['name'];
                    	  	  $_SESSION['q']=$row['id'];
                                $_SESSION['emailcheck']=$row['email'];
                                //print_r($_SESSION['q']);
                    	  	  echo "<div class='container'>";
                    	  	  echo "<a href='profile.php?$name'>";
                    	  	  echo $name;
                    	  	  echo "</a>";
                    	  	  echo "</div>";

                    	   	}
                    	   }
                    	   else
                    	   {
                    	   	  echo "<div class='alert alert-danger' align='center'>";
                    	   	  echo "No user Found";
                    	   	  echo "</div>";
                    	   }  

                    }
                    else
                    {
                    	echo "<div class='alert alert-danger' align='center'>";
                    	echo "Enter name or email to search";
                    	echo "</div>";
                    }
				}
				else
				{
					header('location:dashboard.php');
				}

?>