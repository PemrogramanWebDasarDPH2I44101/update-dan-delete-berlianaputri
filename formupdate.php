<?php 
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		require_once("db.php");
		
		$sql = "SELECT * from siswa where id='$id'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$id = $row['id'];
				$nim = $row['nim'];
				$nama = $row['nama'];
				$ttl = $row['ttl'];
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
</head>
<body>
	<table>
		<form action="update.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td> : </td>
				<td><input type="date" name="ttl" value="<?php echo $ttl; ?>"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Update">
				</td>
			</tr>
		</form>
	</table>

</body>
</html>