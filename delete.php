<?php 
	if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		require_once("db.php");
		
		$sql = "DELETE FROM siswa WHERE id='$id'";

		if (mysqli_query($conn, $sql)) {
			echo "Record Deleted";
		}else{
			echo "Error : " . $sql . "<br>" . mysqli_error($conn);
		}
	}

	mysqli_close($conn);
	echo "<br>";
	echo "<a href = list.php>Lihat List Data";
?>