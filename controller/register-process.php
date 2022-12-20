<?php
// Load file koneksi.php
include "../model/config.php";
// Ambil Data yang Dikirim dari Form
$username = $_POST['username'];
$password = $_POST['password'];
$nik = $_POST['nik'];
$fotoKtp = $_FILES['foto_ktp']['name'];
$tmp = $_FILES['foto_ktp']['tmp_name'];

$role = "user";
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').'-'.$username.'-foto_ktp'.$fotoKtp;
// Set path folder tempat menyimpan fotonya
$path = "../images/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO akun(username, password, nik, foto_ktp, role) VALUES(:username,:password,:nik,:fotoKtp, :role)");
  $sql->bindParam(':username', $username);
  $sql->bindParam(':password', $password);
  $sql->bindParam(':nik', $nik);
  $sql->bindParam(':fotoKtp', $fotobaru);
  $sql->bindParam(':role', $role);
  $sql->execute(); // Eksekusi query insert
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "Sukses.".$username.$password.$nik.$fotoKtp.$role ;    
    // log the sql pdo variables
    // echo $sql->debugDumpParams();
    header("Location: ../view/login.php?success=Akun berhasil dibuat");
       
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='../view/register.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='../view/register.php'>Kembali Ke Form</a>";
}
?>