<?php
	$koneksi = mysqli_connect("localhost","root","","users");
 ?>
	<?php
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body style="font-family: 'Helvetica',sans-serif">
	<table align="center" border="1" width="70%">
		<tr>
			<td colspan="6s">
				<h3><center>DATA</center></h3>
			</td>
		</tr>
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Fullname</th>
		</tr>
			<?php
				$sql_tampil="SELECT * FROM phpapi";
				$qry = mysqli_query($koneksi,$sql_tampil);
				while($data = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
			 ?>
		<tr>
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['level']; ?></td>
			<td><?php echo $data['fullname']; ?></td>

		
		</tr>
</body>
</html>	
<?php
}
}
?>