<?php
include '../config.php';
session_start();

$query = mysqli_query($config, "
    SELECT 
        transaksi.*, 
        buku.judul, 
        users.nama
    FROM transaksi
    JOIN buku ON transaksi.id_buku = buku.id_buku
    JOIN users ON transaksi.id_user = users.id_user
    ORDER BY transaksi.id_transaksi DESC
");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/logo_title.png" type="image/png">
    <title>Daftar Transaksi</title>
    <link href="../src/output.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-cyan-100 to-teal-50 min-h-screen">

<?php include 'partials/sidebar.php'; ?>

<main class="flex-1 ml-64 p-8 mt-20">

<h1 class="text-2xl font-bold text-blue-600 mb-6">
    Daftar Peminjaman
</h1>

<div class="bg-white p-6 rounded-lg shadow-lg">

    <!-- SEARCH -->
    <div class="mb-6 flex items-center gap-4 flex-wrap">
        <a href="tambah_transaksi.php"
           class="bg-blue-600 text-xs text-white px-4 py-2 rounded-full hover:bg-blue-500">
            + Tambah Peminjaman
        </a>

        <input 
            id="search-input"
            placeholder="Cari transaksi..."
            type="text"
            class="flex-1 px-4 py-2 text-xs border-2 border-gray-300 rounded-full focus:outline-none focus:border-teal-500"
        >
    </div>

    <!-- TABLE -->
    <table class="min-w-full table-auto">
        <thead>
            <tr class="bg-blue-secondary text-white">
                <th class="px-4 py-2 text-left text-sm">ID</th>
                <th class="px-4 py-2 text-left text-sm">Nama</th>
                <th class="px-4 py-2 text-left text-sm">Judul</th>
                 <th class="px-4 py-2 text-left text-sm">Jumlah Dipinjam</th>
                <th class="px-4 py-2 text-left text-sm">Tgl Pinjam</th>
                <th class="px-4 py-2 text-left text-sm">Tgl Kembali</th>
                <th class="px-4 py-2 text-left text-sm">Status</th>
                <th class="px-4 py-2 text-left text-sm">Aksi</th>
            </tr>
        </thead>

        <tbody id="transaksi-body">
        <?php if(mysqli_num_rows($query) > 0){ ?>
            <?php while($t = mysqli_fetch_array($query)){ ?>
            
            <tr class="transaksi-item border-b-gray-500"
                data-id="<?= strtolower($t['id_transaksi']); ?>"
                data-nama="<?= strtolower($t['nama']); ?>"
                data-judul="<?= strtolower($t['judul']); ?>"
                data-status="<?= strtolower($t['status']); ?>">

                <td class="px-4 py-3 text-sm"><?= $t['id_transaksi']; ?></td>
                <td class="px-4 py-3 text-sm"><?= $t['nama']; ?></td>
                <td class="px-4 py-3 text-sm"><?= $t['judul']; ?></td>
                <td class="px-4 py-3 text-sm"><?= $t['jumlah']; ?></td> 
                <td class="px-4 py-3 text-sm"><?= $t['tanggal_pinjam']; ?></td>
                <td class="px-4 py-3 text-sm"><?= $t['tanggal_kembali']; ?></td>

                <td class="px-4 py-3 text-sm">
                    <?php if($t['status'] == 'dipinjam'): ?>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">Dipinjam</span>
                    <?php else: ?>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Dikembalikan</span>
                    <?php endif; ?>
                </td>

                <td class="px-4 py-3 text-sm">
                    <a href="detail_transaksi.php?id=<?= $t['id_transaksi']; ?>" class="text-blue-secondary hover:text-blue-primary mr-2">Detail</a>
                    <a href="hapus_transaksi.php?id=<?= $t['id_transaksi']; ?>" onclick="return confirm('Yakin?')" class="text-red-500 hover:text-red-700">Hapus</a>
                </td>
            </tr>

            <?php } ?>
        <?php } ?>
        </tbody>
    </table>

    <div id="empty-transaksi" class="hidden text-center text-gray-500 mt-6">
        Transaksi tidak ditemukan
    </div>

</div>
</main>