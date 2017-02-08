<?php
	// Fungsi header dengan mengirimkan raw data excel
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename = datektransport.csv");

	include("config.php");
	$query = mysqli_query($conn,"SELECT count(substring(created_at,1,10)),substring(created_at,1,10) FROM link_statis group by substring(created_at,1,10)");
	$data = '';
	echo "jml,tanggal\n";
		while ($row = mysqli_fetch_array($query,MYSQLI_BOTH)) {
			$bulan = substr($row[1],5,2);
			$tanggal = substr($row[1],8,2);
			$tahun = substr($row[1],0,4);
			echo
			$row[0].",".
			$bulan."/".$tanggal."/".$tahun.
			"\n";
		}
	//melakukan penulisan ke csv
	// $target = fopen($file_report, 'w');
?>
