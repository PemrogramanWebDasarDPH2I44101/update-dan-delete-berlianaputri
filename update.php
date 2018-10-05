<?php 
require_once("db.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$ttl = $_POST['ttl'];

$sql =	"UPDATE siswa SET nim='$nim', nama='$nama', ttl='$ttl' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
	echo "Update successfully";
}else{
	echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
echo "<br>";
echo "<a href = list.php>Lihat List Data";

?>