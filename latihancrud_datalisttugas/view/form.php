<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar List Tugas C1</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<center>
    <h2>Form Input Data Tugas Ilmu Komputer C1</h2>
</center>
<br>
<div class="card">
    <br>
    <a href="http://localhost/latihancrud_datalisttugas" class="back">Kembali</a>
    <br><br><br>
    <form action="" method="POST">
        <div class="form-group">
            <b>Kode Tugas</b>
            <input type="text" name="Id" value="<?= @$tabeltugas['Id'] ?>">
        </div>
        <div class="form-group">
            <b>Mata Kuliah</b>
            <input type="text" name="matkul" value="<?= @$tabeltugas['matkul'] ?>">
        </div>
        <div class="form-group">
            <b>Nama Tugas</b>
            <input type="text" name="namatugas" value="<?= @$tabeltugas['namatugas'] ?>">
        </div>
        <div class="form-group">
            <b>Deadline Pengumpulan</b>
            <input type="date" name="deadline" value="<?= @$tabeltugas['deadline'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="simpan">Simpan Data</button>
        </div>
    </form>
</div>


<body>

</body>

</html>