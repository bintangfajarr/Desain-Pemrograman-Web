<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Tugas</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <center>
        <h2>Daftar Tugas Ilmu Komputer C1</h2>
    </center>
    <div class="layout">
        <!-- Tambahan Fitur Search -->
        <div class="search">
            <form method="GET" action="index.php">
                <input type="text" name="searchData" id="search" value="<?= @$search ?>" autocomplete="off" class="search_field">
                <button type="submit" class="search_data">Cari</button>
            </form>
            <!-- Link directory -->
            <a href="http://localhost/latihancrud_datalisttugas" class="refresh_data">Refresh</a>
        </div>
        <!-- Direct ke halaman create.php -->
        <a href="create.php" class="create_data">Tambah</a>
    </div>
    <table class="my_table">
        <tr>
            <th>Aksi</th>
            <th>Kode Tugas</th>
            <th>Mata Kuliah</th>
            <th>Nama Tugas</th>
            <th>Deadline Pengumpulan</th>
        </tr>
        <?php

        while ($data = @$list->fetch_array()) {
        ?>
            <tr align="center">
                <td>
                    <div class="flex">
                        <a href="delete.php?id=<?= $data['Id'] ?>" onclick="return confirm('Yakin untuk menghapus data ini?');">Delete</a>
                        <a href="update.php?id=<?= $data['Id'] ?>">Edit</a>
                    </div>
                </td>
                <td><?= $data['Id'] ?></td>
                <td align="left"><?= $data['matkul'] ?></td>
                <td><?= $data['namatugas'] ?></td>
                <td>
                    <?php
                    $date = date_create($data['deadline']);
                    echo date_format($date, "d F Y");
                    ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>