<?php

$db = mysqli_connect('localhost', 'root', '', 'ppdb_pesat10');

if (!$db) {
    die("Gagal terhubung: " . mysqli_connect_error());
}