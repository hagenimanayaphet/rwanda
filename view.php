<?php
if (isset($_GET['user_id'])) {
	$get_user_id=$_GET['user_id'];
	$conn=mysqli_connect("mysql-btech","root","","23rp01253_shareride_db");
	$sql="SELECT * FROM tbl_users WHERE user_id=$get_user_id";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query){
		while($row=mysqli_fetch_assoc($query)){
			$user_id=$row['user_id'];
			$user_firstname=$row['user_firstname'];
			$user_lasttname=$row['user_lasttname'];
			$user_lastname=$row['user_lastname'];
			?>
<!DOCTYPE html>
<html>
<head>
	<title> VIEW</title>
</head>
<body>
<table border="1">
	<tr>  <td>ID</td><td><?=$id;?></td> </tr>
	<tr> <td>Full Name</td> <td><?=$name;?></td> </tr>
	<tr> <td>REG NUMBER</td> <td><?=$Regnoo;?></td> </tr>
	
	</table>
    <a href="index.php">Back Home</a> 
</table>

</body>
</html>
		<?php
		}  } } ?>
