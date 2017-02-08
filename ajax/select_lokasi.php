<?php
include "../koneksi.php";
if (!empty($_GET['nms'])){
	$nms = $_GET['nms'];	
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM port where nama_nms='$nms' group by nama_lokasi"); 
		echo"<option>Pilih Nama NE</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['nama_lokasi'].">".$d['nama_lokasi']."</option>";
			// echo $d['nama_ne'];
		}
	// }
}
if (!empty($_GET['ne'])){
	$lok = $_GET['ne'];	
	$nms = $_GET['nm'];
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM port where nama_lokasi='$lok' and nama_nms='$nms' group by nama_ne"); 
		echo"<option>Pilih Nama NE</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['nama_ne'].">".$d['nama_ne']."</option>";
			// echo $d['nama_ne'];
		}
	// }
}
if (!empty($_GET['board'])){
$br = $_GET['board'];		

	// if (ctype_digit($_GET['ne'])) {

		$query = mysqli_query($conn,"SELECT * FROM port where nama_ne='$br'  group by board "); 

		echo"<option>Pilih Board</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['board'].">".$d['board']."</option>";
			//echo $d['nama_ne'];
		}
}
if (!empty($_GET['shelf'])){
	$t = $_GET['shelf'];
	//html_escape($t);
	// if (ctype_digit($_GET['ne'])) {
		$query = mysqli_query($conn,"SELECT * FROM port where nama_ne='$t' group by shelf"); 
		echo"<option>Pilih Shelf</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['shelf'].">".$d['shelf']."</option>";
			//echo $d['nama_ne'];
		}
	// }

}
 if (!empty($_GET['slot']) || $_GET['slot']=='0'){

$b = $_GET['slot'];
$t = $_GET['sh'];
$l = $_GET['n'];
	// if (ctype_digit($_GET['ne'])) {
		echo $l."----------------";


		$query = mysqli_query($conn,"SELECT * FROM port where shelf='$b' and nama_ne='$t' and nama_lokasi='$l' group by slot "); 
		if(!empty($query)){
			echo "lala";
		}
		echo"<option>Pilih Slot</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['slot'].">".$d['slot']."</option>";
			//echo $d['nama_ne'];
		}

	// }
 }



if (!empty($_GET['port'])){
$port = $_GET['port'];		

	// if (ctype_digit($_GET['ne'])) {


		$query = mysqli_query($conn,"SELECT * FROM port where board='$port' group by port"); 
		echo"<option>Pilih Port</option>";
		while($d = mysqli_fetch_array($query,MYSQLI_BOTH)){
			echo "<option value=".$d['port'].">".$d['port']."</option>";
			//echo $d['nama_ne'];
		}
}
 //echo $_GET['board'];
 // echo "<option value="hai">HAI</option>";
?>
