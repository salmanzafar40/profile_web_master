<?php
include 'header.php';
include 'db.php';
if(!isset($_SESSION['loggedin']))
{
	header('location:login.php');
}
             
             
             	$sql = "SELECT * FROM `regs`";
             	$res = mysqli_query($conn, $sql);
             	while($row=mysqli_fetch_Assoc($res))
             	{
             		$_SESSION['idofuser']=$row['id'];
             		
             	?>
  <div class="container">
             	<table class="table-hover">
             		<thead>
             			<tr>
             				<th>Name</th>
             				<th> Action </th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td><?php echo $row['name']; ?></td>
             				<td><?php echo "<a href='edit-users.php'> <button class='btn btn-primary'> Edit </button> </a>" ?></td>
             				<td><?php echo "<a href='delete-users.php'> <button class='btn btn-danger'> Delete </button> </a>" ?></td>
             			</tr>
             			<tr>
             				
             			</tr>
             		</tbody>
             	</table>
<?php
             	}
?>