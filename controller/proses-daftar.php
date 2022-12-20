<?php
session_start();
  include('../model/config.php');

  if(isset($_POST['simpan'])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    // $tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $telp = $_POST['telp'];
    $foto_diri = $_FILES['foto_diri']['name'];
    $tmp_fotodiri = $_FILES['foto_diri']['tmp_name'];
    $foto_ktp = $_FILES['foto_ktp']['name'];
    $tmp_fotoktp = $_FILES['foto_ktp']['tmp_name'];

    // foto diri
    $new_fotodiri = date('dmYHis').$foto_diri;
    $path_fotodiri = "../images/".$new_fotodiri;
    // foto ktp
    $new_fotoktp = date('dmYHis').$foto_ktp;
    $path_fotoktp = "../images/".$new_fotoktp;
    $akun_id = $_SESSION['id'];
    // no peserta

    if(move_uploaded_file($tmp_fotodiri, $path_fotodiri) && move_uploaded_file($tmp_fotoktp, $path_fotoktp)){
      
      $sql = "INSERT INTO pendaftar (nik, nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, agama, telp, foto_diri, foto_ktp, akun_id) VALUES ('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$agama', '$telp', '$new_fotodiri', '$new_fotoktp', '$akun_id')";
      $query = mysqli_query($conn, $sql);
      
      if($query){
        header('Location: ../view/home.php');
      } else {
        header('Location: ../view/home.php?status=gagal');
      }
    }
  }
