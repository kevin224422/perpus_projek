<?php
include'../koneksi.php';

$id_transaksi=$_POST['id_transaksi'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$tanggal_kembali=$_POST['tanggal_kembali'];

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET idanggota='$id_anggota', idbuku='$id_buku', tglpinjam='$tanggal_pinjam',tglkembali='$tanggal_kembali'
		WHERE idtransaksi='$id_transaksi'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>