<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h4 class="mt-4">Edit Mahasiswa</h4>
    <?php
    // Koneksi ke database
    include "koneksi.php";
    // Mendapatkan ID mahasiswa berdasarkan ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);
    ?>
    <form action="aksi_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>" required>
        </div>
