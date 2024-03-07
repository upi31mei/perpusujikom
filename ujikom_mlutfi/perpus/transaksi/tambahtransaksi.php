<?php
$tglpinjam = date("Y-m-d");
$tujuh_hari = mktime(0,0,0, date("n"), date("j")+7, date("Y"));
$kembali = date("Y-m-d", $tujuh_hari);


?>


<head>
<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web Perpus</title>

    <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/tampil.css">
<link rel="stylesheet" type="text/css" href="css/btn.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


<div class="panel panel-default" style="height: 72%; margin-left: 350px; margin-right: 350px; margin-bottom: 10px;">
<div class="panel-heading">
Tambah Anggota
</div>
 <div class="panel-body">

<form method="POST"  class="form-horizontal" onsubmit="return validasi(this)">

<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Judul Buku</label>
    <div class="col-sm-8">
      <select class="form-control" name="judul">
        <?php
 

        $simpan = $konek -> query("select * from buku order by id");

        while($a=$simpan -> fetch_assoc()){
          echo "<option value='$a[id].$a[judul]'>$a[judul]</option>";
        }

        ?>


      </select>
    </div>
</div>

<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-8">
     <select class="form-control" name="nama">
        <?php
 

        $simpan = $konek -> query("select * from anggota order by nis");

        while($a= $simpan -> fetch_assoc()){
          echo "<option value='$a[nis].$a[nama]'>$a[nama]</option>";
        }

        ?>


      </select>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Tanggal Pinjam</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="tglpinjam"  id="tgl" value="<?php echo $tglpinjam;?>" >
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Tanggal Kembali</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="tglkembali" id="tgl" value="<?php echo $kembali;?>" >
    </div>
</div>

<div>
<div align="right">
<input type="submit" name="simpan" value="Simpan" class="btnsimpan">
<input type="button" value="Kembali" class="btnsimpan" onclick="history.go(-1);">
</div>
</div>


</form>
</div>
</div>

</body>
</html>

<?php
include "koneksi.php";

if (isset($_POST['simpan'])){
    
    $tglpinjam = $_POST['tglpinjam'];
    $tglkembali = $_POST['tglkembali'];

    $judul = $_POST['judul'];
    $pecah_judul = explode(".", $judul);
    $id = $pecah_judul[0];
    $judul = $pecah_judul[1];

    $nama = $_POST['nama'];
    $pecah_nama = explode(".", $nama);
    $nis = $pecah_nama[0];
    $nama = $pecah_nama[1];

    $simpan = $konek->query("select * from buku where judul = '$judul'");
    while ($a = $simpan->fetch_assoc()) {
      $sisa = $a['jumlah'];

    if ($sisa == 0) {
    ?>


<script type="text/javascript">
  alert("Stok Buku Habis. Transaksi Tidak Dapat Dilakukan.");
  document.location="index.php?page=tambahtransaksi";
</script>
<?php
}else{
    $simpan = $konek -> query ("insert into transaksi(judul,nis,nama,tglpinjam,tglkembali,status) values ('$judul','$nis','$nama','$tglpinjam','$tglkembali','pinjam')");

    $simpan = $konek -> query ("update buku set jumlah=(jumlah-1) where id='$id'");
    ?>
    <script type="text/javascript">
  alert("Simpan Data Berhasil");
  document.location="index.php?page=transaksi";
</script>
<?php


}
}
}
?>