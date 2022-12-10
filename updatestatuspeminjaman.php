<?php
include("config.php");

if(isset($_POST["disetujui-iya"])) {
	$id = (int)$_POST['id'];
    $peminjaman = $_POST['disetujui-iya'];
    if ($peminjaman === 'Iya') {
		$peminjaman = 'true';
	}	

	// buat query
    $query = pg_query("UPDATE peminjaman SET disetujui=$peminjaman WHERE id=$id");

	//apakah query simpan berhasil? 
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman daftarpeminjaman_page.php 
		header('Location: daftarpeminjaman_page.php?statusupdate=updateStatusBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: updatestatuspeminjaman_page.php?statusupdate2-updateStatusGagal');
	}

}



else if(isset($_POST["disetujui-tidak"])) {
	$id = (int)$_POST['id'];
    $peminjaman = $_POST['disetujui-tidak'];
    if ($peminjaman === 'Tidak') {
		$peminjaman = 'false';
	}	

	// buat query
    $query = pg_query("UPDATE peminjaman SET disetujui=$peminjaman WHERE id=$id");

	//apakah query simpan berhasil? 
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman daftarpeminjaman_page.php 
		header('Location: daftarpeminjaman_page.php?statusupdate=updateStatusBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: updatestatuspeminjaman_page.php?statusupdate2-updateStatusGagal');
	}

}


	
?>
