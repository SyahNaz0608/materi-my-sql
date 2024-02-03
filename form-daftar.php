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

<h4>Formulir PPDB</h4>
<div>
    <form action="proses-pendaftaran.php" method="post">
        <div>
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" require>
        </div>
        <div>
            <label for="">Alamat Lengkap</label>
            <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
            <input type="radio" name="jenis_kelamin" value="perempuan">perempuan
        </div>
        <div>
            <label for="">Agama</label>
            <select name="agama">
                <option value="Muslim">Muslim</option>
                <option value="Kristen">Kristen</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
            </select>
        </div>
        <div>
            <label for="">Sekolah asal</label>
            <input type="text" name="sekolah-asal" id="">
        </div>
        <div>
            <input type="reset">
            <input type="submit" name="simpan" value="simpan">
        </div>
    </form>
</div>

<footer>
    <hr>
    <i>Dibuat dengan semangat &copy;by Student Day Programming</i>
</footer>

</body>
</html>