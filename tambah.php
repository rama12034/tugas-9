<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $stok        = $_POST['stok'];
    $harga       = $_POST['harga'];
    $tanggal_expired = $_POST['tanggal_expired'];

    $insert = mysqli_query($koneksi, "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama_barang', '$stok', '$harga')");

    if ($insert) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambah data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4">➕ Tambah Barang</h2>
        <form method="post" class="bg-white p-6 rounded shadow w-full max-w-md">
            <label class="block mb-2">Nama Barang</label>
            <input type="text" name="nama_barang" class="border p-2 w-full mb-4 rounded" required>

            <label class="block mb-2">Stok</label>
            <input type="number" name="stok" class="border p-2 w-full mb-4 rounded" required>

            <label class="block mb-2">Harga</label>
            <input type="number" name="harga" class="border p-2 w-full mb-4 rounded" required>

              <label class="block mb-2">Tanggal Expired</label>
            <input type="date" name="tanggal_expired" class="border p-2 w-full mb-4 rounded" required>


            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
            <a href="index.php" class="ml-2 text-gray-600 hover:underline">Kembali</a>
        </form>
    </div>
</body>
</html>
