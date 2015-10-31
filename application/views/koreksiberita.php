<?php
echo "<h2>Koreksi data berita</h2>";
echo form_open('admin/simpan_berita');
echo "<table align='left' width='100%'>";
$field1=array('name' => 'id','size'=>'15','value'=>$databerita[0]->id);
echo "<tr><td width='10%'>id</td><td width='1%'> :</td><td>".form_input($field1)."</td></tr>";
	
$field2=array('name' => 'judul','size'=>'30','value'=>$databerita[0]->judul);
echo "<tr><td>Judul</td><td> :</td><td>".form_input($field2)."</td></tr>";
	
$field3=array('name' => 'content','size'=>'30','value'=>$databerita[0]->content);
echo "<tr><td>Content</td><td> :</td><td>".form_input($field3)."</td></tr>";
	
echo form_hidden('mode', 'koreksi');
echo "<tr><td>".form_submit('mysubmit','Simpan')."</tr></td>" ;	

echo "</table>";
echo form_close();
echo "<p>".anchor('admin', 'Kembali')."</p>";
?>