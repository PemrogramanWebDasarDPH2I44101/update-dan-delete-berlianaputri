<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<table>
		<form action="koneksidb.php" method="post">
			<tr>
				<td>Nama</td>
				<td> : </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td> : </td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td> : </td>
				<td><input type="date" name="ttl"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Submit">
				</td>
			</tr>
		</form>
	</table>

</body>
</html>