<?php

include("../model/config.php");
    $status = $_GET['id'];

    // buat query update
    $sql = "UPDATE pendaftar SET isLulus=-1 WHERE id=$status";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        var_dump($query);
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../view/admin.php');
    } else {
        var_dump($query);
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
;
