<?php
echo "<h2>Tampil data berita</h2>";
echo "<table border=1>";
echo "<tr><th>kode berita</th> <th>judul berita</th> <th> content </th> <th>Aksi</th>";
foreach ($databerita as $isi)
    {
    echo "<tr>";
            echo "<td>$isi->id</td>";
            echo "<td>$isi->judul</td>";
            echo "<td>$isi->content</td>";
   echo "<td>";
   echo anchor('admin/koreksi_berita/'.$isi->id, 'Edit')." | ";
   echo anchor('admin/konfirm_hapus_berita/'.$isi->id, 'Hapus');
   echo "</td>";
    echo "</tr>";
    }
echo "</table>";
echo "<p>".anchor('admin/berita', 'Kembali')."</p>";
?>
