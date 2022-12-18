<?php
$db=pg_connect('host=localhost dbname=ipbclassroom user=postgres password=kotabogor');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
