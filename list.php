<?php 
require_once("db.php");
?>

<table border="1">
	<thead>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tgl Lahir</th>
		<th>Action</th>
	</thead>
	<tbody>
<?php 
$sql = "SELECT * from siswa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	//output data
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<tr>";
		echo "<td>" . $row['nim'] . "</td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['ttl'] . "</td>";
		echo "<td> <a href='formupdate.php?id=$id'>Update</a> <a href='delete.php?id=$id'>Delete</a> </td>";
		echo "</tr>";
	}
}else{
	echo "0 result";
}
mysqli_close($conn);
?>
	</tbody>
</table>
