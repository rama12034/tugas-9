<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$data = mysqli_fetch_array($query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $stok        = $_POST['stok'];
    $harga       = $_POST['harga'];
    $harga       = $_POST['tanggal_expired'];

    $update = mysqli_query($koneksi, "UPDATE barang SET nama_barang='$nama_barang', stok='$stok', harga='$harga',tanggal_expired='$tanggal_expired' WHERE id_barang='$id'");

    if ($update) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal mengubah data: " . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4">✏ Ubah Barang</h2>
        <form method="post" class="bg-white p-6 rounded shadow w-full max-w-md">
            <label class="block mb-2">Nama Barang</label>
            <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" class="border p-2 w-full mb-4 rounded" required>

            <label class="block mb-2">Stok</label>
            <input type="number" name="stok" value="<?php echo $data['stok']; ?>" class="border p-2 w-full mb-4 rounded" required>

            <label class="block mb-2">Harga</label>
            <input type="number" name="harga" value="<?php echo $data['harga']; ?>" class="border p-2 w-full mb-4 rounded" required>

           <label class="block mb-2">Tanggal Expired</label>
    <input type="date" name="tanggal_expired" 
           value="<?php echo $data['tanggal_expired']; ?>" 
           class="border p-2 w-full mb-4 rounded" required>
    <button type="submit" class="bg-yellow-400 text-white px-4 py-2 rounded hover:bg-yellow-500">Update</button>
</form>

    </div>
</body>
</html>

