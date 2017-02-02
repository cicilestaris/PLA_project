<?php
include "../koneksi.php";
if (!empty($_GET['q'])){
	$l = $_GET['q'];


			echo "<input type='text' name='jalur' value=".$l.">".$l."</input>";
	

}