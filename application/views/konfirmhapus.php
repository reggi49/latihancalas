<?php
echo "<h2>Konfirmasi hapus data berita</h2>";
echo "<p>Apakah data berita berikut ini akan dihapus?</p>";
echo "<table border=1>";
echo "<tr><th>id</th> <th>judul</th> <th> content </th>";
foreach ($databerita as $isi)
    {
    echo "<tr>";
            echo "<td>$isi->id</td>";
            echo "<td>$isi->judul</td>";
            echo "<td>$isi->content</td>";
    echo "</tr>";
    }
echo "</table>";
echo "<p>".anchor('admin/hapus_berita/'.$isi->id, 'Ya')." | ";
echo anchor('admin', 'Tidak')."</p>";
?>
