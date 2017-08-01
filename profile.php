<?php
include 'header.php';
include 'db.php';
         if(!isset($_SESSION['email']))
         {
         	header('location:login.php');
         }   

 //            $a = "SELECT email FROM `regs`";
 //            $b = mysqli_query($conn, $a);
 //            $d=0;
 //            while($c = mysqli_fetch_assoc($b))
 //            {
 //                $d = $c['email'];
 //            }
 // echo "$d";
 //            if($d == $_SESSION['q'])
 //            {
 //                echo "Well done";
 //            }
 //            else
 //            {
 //              //  header('location:404.php');

 //            }

            if(isset($_SESSION['q']))
            {
            	   $name  = $_SESSION['q'];
                    $sql = "SELECT * FROM `regs` WHERE id='$name'";
                    /*print_r($sql);
                    die();
*/                    $res = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($res) > 0 )
                    {
                         while($row = mysqli_fetch_assoc($res))
                         {
                         // echo "<pre>";
                         // print_r($row);
                         // echo "</pre>";
                         ?>
                        <style type="text/css" media="screen">
                            .profile-img{
                                max-width: 150px;
                                border: 5px solid #fff;
                                border-radius: 100%;
                                box-shadow: 0 2px 2px rgba(0,0,0,0.3);
                            }
                        </style>
                        
                                <div class="row">
                                  <div class="col-md-6 col-md-offset-3">
                                    <div class="panel panel-default">
                                      <div class="panel-body text-center">
                                        <img class="profile-img" src="https://fb-s-d-a.akamaihd.net/h-ak-xpt1/v/t1.0-1/c0.13.160.160/p160x160/10344775_975776505826683_6685819669297775210_n.jpg?oh=dece52c797ac43946ec74f0720bdbba4&oe=5989BCF6&__gda__=1501683429_5d6acc79e007cc0dbf86efafd6cf89d9" alt="">
                                         <h1><?php echo $row['name'];
                                         ?></h1>
                                         <h3><?php echo $row['email']; ?></h3>
                                         <h3> <?php $dob =$row['dob']; 
                                           $dob1 = date('d-M-Y', strtotime($dob));
                                           echo "$dob1"."<br>"; 
                                           ?></h3>
                                           <h3>
                                               <?php $years = date('Y') - date('Y', strtotime($dob));
                                           echo "$years years";
                                           ?>
                                           </h3>
                                            <a href="portfolio.php?id=<?php echo $row['id'];?>&&name=<?php echo $row['name']; ?>">
                                            <button class="btn btn-primary">View Portfolio</button>
                                            </a>

                                      </div>
                                    </div>
                                  </div>
                                    
                                </div>
                        </div>

                         <?php
                    }
                }
                    else
                    {
                    	header('location: 404.php');
                    }
            }
            


?>