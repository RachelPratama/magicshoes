<?php
  include 'koneksi.php';
  include 'fpdf/fpdf.php';

  $pdf = new FPDF("L","cm","A4");
  $pdf->SetMargins(0.5,1,1);
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial', 'B', '14');
  $pdf->Cell(25.5,0.7,"DATA SEPATU PRIA",0,10,'C');
  $pdf->Line(1,3.1,28.5,3.1);
  $pdf->SetLineWidth(0.1);
  $pdf->Line(1,3.1,28.5,3.2);
  $pdf->SetLineWidth(0);
  $pdf->Ln(1);
  $pdf->Ln(1);
  $pdf->SetFont('Arial', 'B',9);
  $pdf->Cell(1,0.8,'NO',1,0,'C');
  $pdf->Cell(4,0.8,'ID ',1,0,'C');
  $pdf->Cell(4,0.8,'Nama',1,0,'C');
  $pdf->Cell(4.5,0.8,'Harga',1,0,'C');
  $pdf->Cell(4.5,0.8,'Stok',1,0,'C');
  $pdf->Cell(4.5,0.8,'Size',1,0,'C');
  $pdf->Cell(4.5,0.8,'Merk',1,0,'C');
  $pdf->Cell(4.5,0.8,'Warna',1,1,'C');
  $pdf->SetFont('Arial','',9);
  $no=1;
  $query=mysqli_query($koneksi, "SELECT * FROM men");
  while($lihat = mysqli_fetch_array($query)) {
    $pdf->Cell(1,0.8,$no,1,0,'C');
    $pdf->Cell(4,0.8,$lihat['idmen'],1,0,'C');
    $pdf->Cell(4,0.8,$lihat['nama'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['harga'], 1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['stok'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['size'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['merk'],1,0,'C');
    $pdf->Cell(4.5,0.8,$lihat['warna'],1,1,'C');
    $no++;
  }
  $pdf->Output("laporan_men.pdf", "I");
?>