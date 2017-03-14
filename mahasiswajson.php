<?php
$json_data=file_get_contents("mahasiswa2.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "Prodi : "; echo $obj->prodi;
echo "<br>";
echo "Mata Kuliah: ";echo $obj->matakuliah[0];
echo "<br>";
echo "Mata Kuliah: ";echo $obj->matakuliah[1];
echo "<br>";
echo "Mata Kuliah: ";echo $obj->matakuliah[2];
?>