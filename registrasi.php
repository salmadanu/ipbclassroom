<?php
include("config.php");
if(isset($_POST['register'])){

    $users_username = strtolower(stripslashes($_POST['users_username']));
    $users_password = $_POST['users_password'];
    $users_password2 = $_POST['users_password2'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $username_query = pg_query("SELECT users_username FROM users WHERE users_username='$users_username'");
    $username_result = pg_fetch_array($username_query);

    if ( $username_result ) {
        echo "<script>
        alert('Username sudah terdaftar!');
        </script>";
        return false;
    }
    if ( $users_password !== $users_password2) {
        echo "<script>
        alert('Konfirmasi gagal! Pastikan password yang dimasukkan sama');
        </script>";
    return false;
    }
    $query = pg_query("INSERT INTO users (users_username, users_password, nama, nim) 
            VALUES('$users_username', crypt('$users_password', gen_salt('md5')), '$nama', '$nim')");

	if( $query==TRUE ) {
		header('Location: index_user.php?status4=regsitrasiBerhasil');
	} else {
		header('Location: signup_page.php=statusregistrasiGagal');
	}
} else {
	die("Akses dilarang...");
}
?>