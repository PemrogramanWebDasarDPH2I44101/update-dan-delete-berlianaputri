<?php 
require_once("db.php");

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ttl = $_POST['ttl'];

$sql =	"INSERT INTO siswa(nim, nama, ttl)
		VALUES ('$nim', '$nama', '$ttl')";

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
}else{
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "<br>";
echo "<a href = list.php>Lihat List Data";
?>
