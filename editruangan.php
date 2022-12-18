<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST["editruangan"])){

	// ambil data dari formulir
    $kode_ruangan = $_POST['kode_ruangan'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $ruangan_nama = $_POST['ruangan_nama'];
    $ruangan_lokasi = $_POST['ruangan_lokasi'];
    $ruangan_kapasitas = (int)$_POST['ruangan_kapasitas'];
    var_dump($ruangan_kapasitas);
    $ketersediaan = $_POST['bisa_dipinjam'];
    if ($ketersediaan === 'Iya'){
        $ketersediaan = 'true';
    } elseif ($ketersediaan === 'Tidak') {
        $ketersediaan = 'false';
    }

    var_dump($kode_ruangan);

	// buat query
    $query = pg_query("UPDATE ruangan SET kode_ruangan = '$kode_ruangan', ruangan_fakultas = '$ruangan_fakultas', ruangan_nama = '$ruangan_nama', ruangan_lokasi = '$ruangan_lokasi', ruangan_kapasitas = $ruangan_kapasitas, bisa_dipinjam = $ketersediaan WHERE kode_ruangan = '$kode_ruangan'");

	//apakah query simpan berhasil? 
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: ruangan_admin.php?status2=editRuanganBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: editruangan_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>