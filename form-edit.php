<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Aplikasi PPDB by webpro</title>
</head>
<body>
    
<header>
    <h1>Web 7</h1>
    <h3>Penerimaan Peserta didik</h3>
</header>

<nav>
    <ul>
        <li><a href="form-daftar.php">Daftar baru</a></li>
        <li><a href="list-siswa.php">Pendaftar</a></li>
    </ul>
</nav>

<h4>Formulir edit</h4>
    <?php 
    include_once("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($query);
    ?>
<div>
    <form action="proses-edit.php" method="post">
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" value="<?= $r['nama']; ?>" require>
        </div>
        <div>
            <label for="">Alamat Lengkap</label>
            <textarea name="alamat" id="" cols="30" rows="10"><?= $r['alamat']; ?></textarea>
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin'] == 'laki-laki' ? 'checked' : ''?> value="laki-laki">laki-laki
            <input type="radio" name="jenis_kelamin" <?= $r['jenis_kelamin'] == 'perempuan' ? 'checked' : ''?> value="perempuan">perempuan
        </div>
        <div>
            <label for="">Agama</label>
            <select name="agama">
                <option value="Muslim" <?= $r['agama'] == 'Muslim' ? 'selected' : ''?>>Muslim</option>
                <option value="Kristen" <?= $r['agama'] == 'Kristen' ? 'selected' : ''?>>Kristen</option>
                <option value="Buddha" <?= $r['agama'] == 'Buddha' ? 'selected' : ''?>>Buddha</option>
                <option value="Hindu" <?= $r['agama'] == 'Hindu' ? 'selected' : ''?>>Hindu</option>
            </select>
        </div>
        <div>
            <label for="">Sekolah asal</label>
            <input type="text" name="sekolah-asal" require>
        </div>
        <div>
            <input type="hidden" name="id" value="<?= $r['id']; ?>">
            <input type="reset">
            <input type="submit" name="update" value="update">
        </div>
    </form>
</div>

<footer>
    <hr>
    <i>Dibuat dengan semangat &copy;by Student Day Programming</i>
</footer>

</body>
</html>