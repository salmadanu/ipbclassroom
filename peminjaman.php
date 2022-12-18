<?php
    include('config.php');
    if(isset($_POST['pinjamruangan'])){

	// ambil data dari formulir
    $nama_acara = $_POST['nama_acara'];
    $deskripsi_acara = $_POST['deskripsi_acara'];
    $ruangan_fakultas = $_POST['ruangan_fakultas'];
    $kode_ruangan = $_POST['kode_ruangan'];
    $waktu_mulai = $_POST['waktu_mulai'];
        $temp_time = strtotime($waktu_mulai);
        $waktu_mulai = date('Y-m-d H:i:s', $temp_time);
    $waktu_selesai = $_POST['waktu_selesai'];
        $temp_time = strtotime($waktu_selesai);
        $waktu_selesai = date('Y-m-d H:i:s', $temp_time);
    $notelfon_pj = $_POST['notelfon_pj'];


	// buat query
   $query = pg_query("INSERT INTO peminjaman (kode_ruangan_peminjaman, nama_acara, waktu_mulai, waktu_selesai, notelfon_pj, disetujui) VALUES ('$kode_ruangan', '$nama_acara', '$waktu_mulai', '$waktu_selesai', $notelfon_pj, 'f')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: history_user.php?status=berhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: reservasi_user.php?');
	}


    } else {
        die("Akses dilarang...");
    }
?>
