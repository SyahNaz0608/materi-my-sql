<?php

require_once("config.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM calon_siswa WHERE id = $id";
    if ($query) {
        header('Location: list-siswa.php');
    } else {
        header('location: index.php?status=gagal');
    }
} else {
    die("yahaha wibu <a href='index.php>Pendunkung no 2 lu?</a>");
}