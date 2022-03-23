<?php

include 'config/connection.php';

// Digunakan untuk mengambil value dari GET parameter dengan key id
$id = $_GET['id'];

// Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Digunakan untuk memeriksa apakah ada request dalam bentuk POST yang dikirim ke halaman ini? (Halaman create.php)
    $Id          = @$_POST['Id'];
    $matkul      = @$_POST['matkul'];
    $namatugas   = @$_POST['namatugas'];
    $deadline    = @$_POST['deadline'];

    // Jika nim kosong maka hentikan program dan keluarkan perintah (karena kolom nim di database di set NOT NULL artinya tidah boleh kosong)
    if (empty($Id)) {
        die("Masukan Kode Tugas");
    }
    // Jika nama kosong maka hentikan program dan keluarkan perintah (karena kolom nama di database di set NOT NULL artinya tidah boleh kosong)
    else if (empty($namatugas)) {
        die("Masukan Nama Tugas");
    } else if (empty($deadline)) {
        die("Masukan Deadline");
    }

    // Digunakan untuk membuat SQL string untuk mengubah data pada tabel mahasiswa
    $sql = "UPDATE tabeltugas SET
        Id= '$Id',
        matkul = '$matkul',
        namatugas = '$namatugas', 
        deadline = '$deadline'
        WHERE id = $id";

    // Digunakan untuk eksekusi query ke SQL. Apabila error maka akan memunculkan pesan error nya
    $mysqli->query($sql) or die($mysqli->error);

    // Digunakan untuk mengarahkan (redirect) halaman ke index.php
    header('location: index.php');
}

// Digunakan untuk memeriksa apakah parameter id ada pada url? Jika tidak ada maka arahkan halaman kembali ke index.php
if (empty($id)) header('location : index.php');

// Mengambil data dari tabel mahasiswa berdasarkan id sesuai dengan parameter get nya
$sql    = "SELECT * FROM tabeltugas WHERE Id = '$id' ";
$query  = $mysqli->query($sql);

// $query->fetch_array() tanpa looping artinya hanya mengambil hasil query baris pertama saja (1 data)
$tabeltugas  = $query->fetch_array();

// Digunakan untuk memeriksa apakah data mahasiswa dengan id tersebut ada pada tabel mahasiswa? Jika tidak ada maka arahkan halaman kembali ke index.php
if (empty($tabeltugas)) header('location : index.php');


include 'view/form.php';
