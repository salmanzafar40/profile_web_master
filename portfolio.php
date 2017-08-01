<?php

  include 'header.php';
  include 'db.php';

    
   $id   = $_REQUEST['id'];
   $name = $_REQUEST['name'];

  
     if(isset($_SESSION['emailcheck']))
     {
     if($_SESSION['email'] == $_SESSION['emailcheck'])
     {

  	echo "<div class='alert alert-info' align='center'>";
  	echo "This is your portfolio link";
  	echo "</div>";

  	
     }
 
    }

   if(!empty($id) && !empty($name))
   {
               $sql = "SELECT * FROM `portfolio` WHERE u_id='$id'";
               $res = mysqli_query($conn, $sql);

                if(mysqli_num_rows($res) > 0)
                {

                while($row = mysqli_fetch_assoc($res))
                {
                 
                 $path = 'p_images/';
                 $s = $row['img'];
                 ?>
        <!--         <style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;
}

.container:hover .overlay {
  bottom: 0;
  height: 100%;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style> -->
<!-- <div class="view overlay hm-blue-light">
    <img src="<?= $path.$s ?>" class="img-fluid " alt="">
    <div class="mask flex-center">
        <p class="white-text"><?php echo $row['p_name'];?></p>
    </div>
</div> -->
<!-- <div class="container">
  <img src="<?= $path.$s ?>" alt="" class="image">
  <div class="overlay">
    <div class="text"><?php echo $row['p_name'];?></div>
  </div>
</div> -->

<div class="well text-center">
    <span>Sister Properties:</span>
    <div class="col-md-6">
        <img class="img-thumbnail" src="<?= $path.$s ?>" alt="inn_logo" />
    </div>
    </div>
                <!--  <div class="container">
              <img src="<?php echo htmlspecialchars($path.$image); ?>" alt='<?php echo $s;?>' class='image'><div class='overlay'>
                <div class="overlay">
               <div class="text">Hello World</div>
               </div>
               </div>
 -->
                
                    

                 <?php
            //  echo ' <img src="'.$path.$s.'" alt="">'; 
                //echo "<pre>";
                 //echo " <img src=\"'.$path.$s.' \" alt='Avatar' class='image'><div class='overlay'>
   // <div class='text'>Hello World</div>
  //</div>";
                //print_r($row);
                //echo "</pre>";
                }
                }
                else

                {
                	echo "<div class='alert alert-danger' align='center'>";
                	echo "No Record Found";
                	echo "</div>";
                }


   }
   else
   {
   	  header('location:login.php');
   } 

?>