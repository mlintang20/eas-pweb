<?php
session_start();
  require("../phpfpdf/fpdf.php");

  include "../model/config.php";

  $pdf = new FPDF("L", "mm", "A4");

  $pdf->AddPage();
  $pdf->SetFont('Times', 'B', 16);
  $pdf->Cell($pdf->GetPageWidth() - 20, 7, "Kartu Ujian", 0, 0, "C");
  $pdf->Cell(20, 7, "", 0, 1, "C");
  // $pdf->Cell($pdf->GetPageWidth(), 7, "", 0, 1, "C");
  // $pdf->Cell($pdf->GetPageWidth(), 7, "", 0, 1, "C");
  $pdf->Ln();
  $pdf->Ln();

  $query = "SELECT * FROM pendaftar WHERE id ='$_SESSION[id]'";
  $result = mysqli_query($conn, $query);

  if($result){
    while($pendaftar = mysqli_fetch_array($result)){
      $pdf->Cell($pdf->GetPageWidth() / 2 - 30, 50, "", 0, 0);
      $image = $pendaftar["foto_diri"];
      $pdf->Cell(30, 50, $pdf->Image("../images/".$image, $pdf->GetX(), $pdf->GetY(), 30, 30), 0, 1, "C", false);
      $pdf->SetLeftMargin(50);
      $pdf->SetFont("Times", "B", 16);
      $pdf->Cell(20, 10, "NIK                                                                               : " . $pendaftar['nik'], 0, 1);
      $pdf->Cell(20, 10, "Nomor Peserta                                                            : ", 0, 0);
      $pdf->SetFont("Times", "B", 20);
      $pdf->Cell(20, 10, "                                                            ".date("Y-md-his")."-" . $pendaftar['id'], 0, 1);
      $pdf->SetFont("Times", "B", 16);
      $pdf->Cell(20, 10, "Nama                                                                            : " . $pendaftar['nama'], 0, 1);
      $pdf->Cell(20, 10, "Jenis Kelamin                                                              : " . $pendaftar['jenis_kelamin'], 0, 1);
      $pdf->Cell(20, 10, "Tempat/Tanggal Lahir                                               : " . $pendaftar['tempat_lahir'] . ", " . $pendaftar['tanggal_lahir'], 0, 1);
    }

    $pdf->Output();
  }

  // if($result){
  //   $pdf->SetFont("Times", "B", 12);
  //   // $pdf->Cell(28, 10, "NO", 1, 0, "C");
  //   $pdf->Cell(50, 10, "Foto Diri", 0, 0, "C");
  //   // $pdf->Cell(50, 10, "Foto KTP", 0, 0, "C");
  //   $pdf->Cell(35, 10, "NIK", 0, 0, "C");
  //   $pdf->Cell(35, 10, "No Peserta", 0, 0, "C");
  //   $pdf->Cell(35, 10, "Nama", 0, 0, "C");
  //   $pdf->Cell(35, 10, "Tempat", 0, 0, "C");
  //   $pdf->Cell(35, 10, "Tanggal", 0, 0, "C");
  //   // $pdf->Cell(28, 10, "Alamat", 1, 0, "C");
  //   $pdf->Cell(28, 10, "Jenis Kelamin", 0, 1, "C");
  //   // $pdf->Cell(28, 10, "Agama", 1, 0, "C");
  //   // $pdf->Cell(28, 10, "No Telpon", 1, 1, "C");

  //   $pdf->SetFont("Times", "", 12);
    
  //   while($pendaftar = mysqli_fetch_array($result)){
  //     // $pdf->Cell(28, 30, $pendaftar["id"], 1, 0, "C");
  //     $image = $pendaftar["foto_diri"];
  //     $pdf->Cell(50, 30, $pdf->Image("images/".$image, $pdf->GetX() + 7.5, $pdf->GetY(), 30, 30), 0, 0, "C", false);
  //     // $image = $pendaftar["foto_ktp"];
  //     // $pdf->Cell(50, 30, $pdf->Image("images/".$image, $pdf->GetX(), $pdf->GetY(), 50, 30), 0, 0, "C", false);
  //     $pdf->Cell(35, 30, $pendaftar["nik"], 0, 0, "C");
  //     $pdf->Cell(35, 30, date("Y-md-his"), 0, 0, "C");
  //     $pdf->Cell(35, 30, $pendaftar["nama"], 0, 0, "C");
  //     $pdf->Cell(35, 30, $pendaftar["tempat_lahir"], 0, 0, "C");
  //     $pdf->Cell(35, 30, date("d-m-Y", strtotime($pendaftar["tanggal_lahir"])), 0, 0, "C");
  //     // $pdf->Cell(28, 30, $pendaftar["alamat"], 1, 0, "C");
  //     $pdf->Cell(28, 30, $pendaftar["jenis_kelamin"], 0, 1, "C");
  //     // $pdf->Cell(28, 30, $pendaftar["agama"], 1, 0, "C");
  //     // $pdf->Cell(28, 30, $pendaftar["telp"], 1, 1, "C");
  //   }

  //   $pdf->Output();
  // }

?>