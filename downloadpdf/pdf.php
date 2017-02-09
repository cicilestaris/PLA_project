<?php
include "conn.php";
//mengambil data dari tabel
$sql=mysqli_query($conn,"SELECT * FROM link_statis");
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
    array_push($data, $row);
}
 
//mengisi judul dan header tabel
$judul = "DATA TEKNIS TRANSPORT";
$header = array(
array("label"=>"No", "length"=>30, "align"=>"L"),
array("label"=>"Node A", "length"=>30, "align"=>"L"),
array("label"=>"Node B", "length"=>30, "align"=>"L"),
array("label"=>"Client A", "length"=>30, "align"=>"L"),
array("label"=>"Client B", "length"=>30, "align"=>"L"),
array("label"=>"NMS", "length"=>30, "align"=>"L"),
array("label"=>"NE A", "length"=>30, "align"=>"L"),
array("label"=>"Board A", "length"=>30, "align"=>"L"),
array("label"=>"Shelf A", "length"=>30, "align"=>"L"),
array("label"=>"Slot A", "length"=>30, "align"=>"L"),
array("label"=>"Port A", "length"=>30, "align"=>"L"),
);
 
//memanggil fpdf
require_once ("fpdf/fpdf.php");
$pdf = new FPDF('L');
$pdf->AddPage();
 
//tampilan Judul Laporan
$pdf->SetFont('Arial','B','16'); //Font Arial, Tebal/Bold, ukuran font 16
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
//Header Table
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(139, 69, 19); //warna dalam kolom header
$pdf->SetTextColor(255); //warna tulisan putih
$pdf->SetDrawColor(222, 184, 135); //warna border
foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
//menampilkan data table
$pdf->SetFillColor(245, 222, 179); //warna dalam kolom data
$pdf->SetTextColor(0); //warna tulisan hitam
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
//$i++;
}
$fill = !$fill;
$pdf->Ln();
 }
//output file pdf
$pdf->Output();
?>