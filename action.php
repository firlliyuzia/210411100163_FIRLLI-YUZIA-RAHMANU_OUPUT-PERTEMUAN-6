<?php
include "koneksi.php";

$idmhs = $_POST['id_mhs'];
$nama = $_POST['nama_mhs'];
$prodi = $_POST['prodi_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$idmhs','$prodi','$nama','$alamat')";
$hasil = mysqli_query($koneksi,$sql);
/*if (!$hasil){
    echo"Eksekusi tambah data mahasiswa gagal";
}else{
    echo"Eksekusi tambah data mahasiswa berhasil <br>";
    echo"<a href='data_mhs.php'>Show data</a>"; 

}
?>*/
?>
<a href=data_mhs.php>showdata</a>