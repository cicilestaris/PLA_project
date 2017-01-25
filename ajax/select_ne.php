<?php
include "../koneksi.php";
if (!empty($_GET['board'])){
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM port where nama_ne=$_GET['board']  ");
		echo"<option>Pilih Board</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['board'].">".$d['board']."</option>";
			//echo $d['nama_ne'];
		}
	// }
}