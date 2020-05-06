<?php
$nama = $_POST['Nama'];
$nim = $_POST['NIM'];
$tanggal = $_POST['Tgl_lhr'];
$tempat = $_POST['Tmp_lhr'];
$umur = $_POST['Umur'];
$hobi = $_POST['Hobi'];
$keterangan = $_POST['Keterangan'];

echo "Nama : ", $nama;
echo "<br><br>"; 
echo "NIM : ", $nim;
echo "<br><br>"; 
echo "Tanggal Lahir : ", $tanggal;
echo "<br><br>"; 
echo "Tempat Lahir : ", $tempat;
echo "<br><br>"; 
echo "Umur : ", $umur, " ";

if ($umur <= 10){
    echo "(Anak-anak)";}
elseif ($umur <= 20){
    echo "(Remaja)";}
elseif ($umur <= 25){
    echo "(Dewasa)";}
else{
    echo "(Tua)";}

echo "<br><br>"; 
echo "Hobi : ", $hobi;
echo "<br><br>"; 
echo "Keterangan : ", $keterangan;
?>