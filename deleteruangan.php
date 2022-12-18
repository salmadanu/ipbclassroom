<?php
include("config.php");

if(isset($_POST['deleteruangan'])){

    $kode_ruangan = $_POST['kode_ruangan'];

    $query = pg_query("DELETE FROM peminjaman WHERE kode_ruangan_peminjaman = '$kode_ruangan'");
    $query2 = pg_query("DELETE FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");

	if( $query==TRUE && $query2==TRUE ) {
		header('Location: ruangan_admin.php?status3=hapusRuanganBerhasil');
	} else {
		header('Location: ruangan_admin.php?status4=hapusRuanganGagal');
	}


} else {
	die("Akses dilarang...");
}
?>

