<?php

//Create connection
$koneksi = mysqli_connect("localhost", "root", "", "data_mhs");

$sql = "SELECT id_mhs,nama_mhs,nama_prodi,alamat_mhs FROM tbl_mhs m, tbl_prodi p WHERE m.id_prodi=p.id_prodi";
$hasil = mysqli_query($koneksi,$sql); //sudah disimpan dalam bentuk array
/*
while($baris=mysqli_fetch_assoc($hasil)) 
{
    echo "<br>nama: ".$baris ['nama_mhs']."| alamat:".$baris['alamat_mhs']; 
}*/


?>