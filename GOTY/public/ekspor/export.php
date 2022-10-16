<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table goty berdasarkan nis secara Descending
$goty = query("SELECT * FROM games ORDER BY id DESC");

// Membuat nama file
$filename = "data game-" . date('Ymd') . ".xls";

// Kodingam untuk export ke excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data GOTY.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Pengembang</th>
            <th>Penerbit</th>
            <th>Platform</th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php $nom = 1; ?>
        <?php foreach ($goty as $row) : ?>
            <tr>
                <td><?= $nom++; ?></td>
                
                <td><?= $row['judul']; ?></td>
                <td><?= $row['tahun']; ?></td>
                <td><?= $row['pengembang']; ?></td>
                <td><?= $row['penerbit']; ?></td>
                <td><?= $row['platform']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
