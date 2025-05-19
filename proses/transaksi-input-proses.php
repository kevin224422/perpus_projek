<?php
include'../koneksi.php';
$id_transaksi=$_POST['id_transaksi'];
$id_buku=$_POST['id_buku'];
$id_anggota=$_POST['id_anggota'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$tanggal_kembali=$_POST['tanggal_kembali'];
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbtransaksi
		VALUES('$id_transaksi','$id_buku','$id_anggota','$tanggal_pinjam','$tanggal_kembali')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=transaksi-peminjaman");
}
?>