<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold mb-4">📦 Data Barang</h2>
        <a href="tambah.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 inline-block mb-4">+ Tambah Barang</a>
        <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">Nama Barang</th>
                    <th class="py-2 px-4">Stok</th>
                    <th class="py-2 px-4">Harga</th>
                    <th class="py-2 px-4">Tanggal Expired</th>
                    <th class="py-2 px-4">Aksi</th>
                    

                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM barang");
                while ($data = mysqli_fetch_array($query)) {
                    echo "<tr class='border-b hover:bg-gray-50'>
                        <td class='py-2 px-4'>{$data['id_barang']}</td>
                        <td class='py-2 px-4'>{$data['nama_barang']}</td>
                        <td class='py-2 px-4'>{$data['stok']}</td>
                        <td class='py-2 px-4'>{$data['harga']}</td>
                        <td class='py-2 px-4'>{$data['tanggal_expired']}</td>
                        <td class='py-2 px-4'>
                            <a href='ubah.php?id={$data['id_barang']}' class='bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500'>Ubah</a>
                            <a href='hapus.php?id={$data['id_barang']}' onclick=\"return confirm('Yakin hapus?');\" class='bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2'>Hapus</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>



