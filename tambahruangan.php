<?php
include("config.php");

if(isset($_POST['tambahruangan'])){

    $kode_ruangan = $_POST['kode_ruangan'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $ruangan_nama = $_POST['ruangan_nama'];
    $ruangan_lokasi = $_POST['ruangan_lokasi'];
    $ruangan_kapasitas = (int)$_POST['ruangan_kapasitas'];
    $ketersediaan = $_POST['bisa_dipinjam'];
    if ($ketersediaan === 'Iya'){
        $ketersediaan = 'true';
    } elseif ($ketersediaan === 'Tidak') {
        $ketersediaan = 'false';
    }

    $query = pg_query("INSERT INTO ruangan (kode_ruangan, ruangan_fakultas, ruangan_nama, ruangan_lokasi, ruangan_kapasitas, bisa_dipinjam) 
            VALUES('$kode_ruangan', '$ruangan_fakultas', '$ruangan_nama', '$ruangan_lokasi', $ruangan_kapasitas, $ketersediaan)");

	if( $query==TRUE ) {
		header('Location: ruangan_admin.php?status5=penambahanRuanganBerhasil');
	} else {
		header('Location: tambah_ruangan.php');
	}
} else {
	die("Akses dilarang...");
}
?>