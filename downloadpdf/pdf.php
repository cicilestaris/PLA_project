<?php

include 'conn.php';

//mengambil data dari tabel
$sql=mysqli_query($conn, "SELECT id_link, host_a, host_b, fa_a, fa_b, nms, ne_a, board_a, shelf_a, slot_a, port_a, ne_b, board_b, shelf_b, slot_b, port_b FROM link_statis");

$data = array();
	while ($row = mysqli_fetch_assoc($sql)) {
   		array_push($data, $row);
	}
 
//mengisi judul dan header tabel

$judul = "DATA TEKNIS TRANSPORT";
$header = array(
			array("label"=>"No", "length"=>10, "align"=>"L"),
			array("label"=>"Node A", "length"=>17, "align"=>"L"),
			array("label"=>"Node B", "length"=>17, "align"=>"L"),
			array("label"=>"Client A", "length"=>17, "align"=>"L"),
			array("label"=>"Client B", "length"=>17, "align"=>"L"),
			array("label"=>"NMS", "length"=>13, "align"=>"L"),
			array("label"=>"NE A", "length"=>43, "align"=>"L"),
			array("label"=>"Board A", "length"=>20, "align"=>"L"),
			array("label"=>"Shelf A", "length"=>12, "align"=>"L"),
			array("label"=>"Slot A", "length"=>10, "align"=>"L"),
			array("label"=>"Port A", "length"=>10, "align"=>"L"),
			array("label"=>"NE B", "length"=>43, "align"=>"L"),
			array("label"=>"Board B", "length"=>20, "align"=>"L"),
			array("label"=>"Shelf B", "length"=>12, "align"=>"L"),
			array("label"=>"Slot B", "length"=>10, "align"=>"L"),
			array("label"=>"Port B", "length"=>10, "align"=>"L"),
		);
 



//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF('L');
$pdf->AddPage();
 
//tampilan Judul Laporan
$pdf->SetFont('Arial','B','12'); //Font Arial, Tebal/Bold, ukuran font 16
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
//Header Table
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(220,220,220); //warna dalam kolom header
$pdf->SetTextColor(0); //warna tulisan putih
$pdf->SetDrawColor(192,192,192); //warna border
$pdf->SetFont('Arial','B',8);
	foreach ($header as $kolom) {
    	$pdf->Cell($kolom['length'], 6, $kolom['label'], 1, '0', $kolom['align'], true);
	}

$pdf->Ln();
 
//menampilkan data table
$pdf->SetFillColor(220,220,220); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;

	foreach ($data as $baris) {
		$j = 0;
		foreach ($baris as $cell) {
			
				$pdf->Cell($header[$j]['length'], 6, $cell, 1, '0', 'C', $fill);
			
		$j++;
		}
		$fill = !$fill;
		$pdf->Ln();
		}
 
//output file pdf
$pdf->Output();
?>