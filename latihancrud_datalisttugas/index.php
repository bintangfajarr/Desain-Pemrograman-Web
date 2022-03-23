<?php

include 'config/connection.php';

$sql = 'SELECT * FROM tabeltugas';

// Searching

// Untuk Mengambil data yang di serach
$search = @$_GET['searchData'];

// Jika variable $search tidak kosong (artinya user mengisi inputan search pada form) maka, tambahkan sintaks SQL untuk mencari data
// sql untuk mencari data
if (!empty($search)) {
    // Perhatikan tanda spasi sebelum WHERE karena variable sql sudah di inisialisasi di atas jadi query ini akan meneruskan query yang di atas
    $sql .= " WHERE
        Id LIKE '%$search%' OR
        matkul LIKE '%$search%' OR
        namatugas LIKE '%$search%' OR
        deadline LIKE '%$search%'";
}

$list = $mysqli->query($sql);

include 'view/v_index.php';
