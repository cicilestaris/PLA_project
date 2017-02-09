<?php
function cek_pesan($teks){
	$kata_kotor = array("bbm","naik");
	$hasil = 0;
	$jml_kata = count($kata_kotor);	
	 
		for ($i=0;$i<$jml_kata;$i++) {
			if (stristr($teks,$kata_kotor[$i])){ 
				$hasil=1;
			}
		}
	return $hasil;	 
}
?>

<?php
$pesan = "Hari ini bbm bakal naik";
	if (cek_pesan($pesan)) {
		echo "Eits, tidak bisa..tidak bisa. Ada kata-kata kotor dalam pesan kamu";
	}else {
		echo "Aman";
	}
?>