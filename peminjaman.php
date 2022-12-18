<?php
    include('config.php');
    if(isset($_POST['pinjamruangan'])){

    $nama_acara = $_POST['nama_acara'];
    $deskripsi_acara = $_POST['deskripsi_acara'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $kode_ruangan = $_POST['kode_ruangan'];
    $waktu_mulai = $_POST['waktu_mulai'];
    $waktu_selesai = $_POST['waktu_selesai'];
    $notelfon_pj = $_POST['notelfon_pj'];
    $nama_ruangan_query = pg_query("SELECT ruangan_nama FROM ruangan WHERE kode_ruangan = '$kode_ruangan'");
    $nama_ruangan = pg_fetch_array($nama_ruangan_query);
    var_dump($nama_ruangan);
    var_dump($kode_ruangan);

   $query = pg_query("INSERT INTO peminjaman (nama_acara, deskripsi_acara, notelfon_pj, waktu_mulai, waktu_selesai) 
            VALUES ($nama_acara, $deskripsi_acara, $notelfon_pj, '$waktu_mulai', '$waktu_selesai')");

	if( $query==TRUE ) {
		kalau berhasil alihkan ke halaman index.php 
		header('Location: history_user.php?status=berhasil');
	} else {
		kalau gagal kembalikan ke halaman form
		header('Location: reservasi_user.php');
	}
    } else {
        die("Akses dilarang...");
    }
?>