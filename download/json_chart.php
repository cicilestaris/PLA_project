<?php
	include("config.php");
	
	$query = mysqli_query($conn,"SELECT count(substring(created_at,1,10)),substring(created_at,1,10) FROM link_statis group by substring(created_at,1,10)");
	$data = '';
	// echo "jml,tanggal\n";
	$data_chart="";
	$sudah = 0;
	while ($row = mysqli_fetch_array($query,MYSQLI_BOTH)) {
	    // $bulan = substr($row[1],5,2);
	    // $tanggal = substr($row[1],8,2);
	    // $tahun = substr($row[1],0,4);
	    // echo
	    // $row[0].",".
	    // $bulan."/".$tanggal."/".$tahun.
	    // "\n";
	    if($sudah==1){
	    	$data_chart=$data_chart.",";
	    }
	    $sudah = 1;
		$data_chart = $data_chart.'{
				 "label":"'.$row[1].'",
				 "value":"'.$row[0].'"
			  }';	
	}
	// echo $data_chart;
?>