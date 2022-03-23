<?php

include 'config/connection.php';

// Jika ada request POST yang masuk
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
    $Id          = @$_POST['Id'];
    $matkul      = @$_POST['matkul'];
    $namatugas   = @$_POST['namatugas'];
    $deadline    = @$_POST['deadline'];

    // Jika nim kosong maka hentikan program dan keluarkan perintah (karena kolom nim di database di set NOT NULL artinya tidah boleh kosong)
    if (empty($Id)) {
        die("Masukan Id");
    }
    // Jika nama kosong maka hentikan program dan keluarkan perintah (karena kolom nama di database di set NOT NULL artinya tidah boleh kosong)
    else if (empty($namatugas)) {
        die("Masukan Nama Tugas");
    } else if (empty($deadline)) {
        die("Masukan deadline");
    }

    // Untuk membuat SQL string untuk memasukan data ke tabel mahasiswa
    $sql = "INSERT INTO tabeltugas VALUES ( $Id, '$matkul', '$namatugas', '$deadline')";

    // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
    $mysqli->query($sql) or die($mysqli->error);

    // Digunakan untuk mengarahkan (redirect) halaman ke index.php
    header('location: index.php');
}

include 'view/form.php';
