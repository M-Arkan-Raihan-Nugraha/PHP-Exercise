<?php
// mengkonesikan ke database
define('HOST_NAME', 'localhost');
define('USER_NAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'latihan_php');

$koneksi = mysqli_connect(HOST_NAME, USER_NAME, PASSWORD, DB_NAME);
?>