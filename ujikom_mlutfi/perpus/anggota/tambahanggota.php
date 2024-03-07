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


<div class="panel panel-default" style="height: 65%; margin-left: 350px; margin-right: 350px; margin-bottom: 10px;">
<div class="panel-heading"><b>Tambah Anggota</b></div>
 <div class="panel-body">

<form method="POST"  class="form-horizontal" >
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nis</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nis" required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Tanggal Lahir</label>
    <div class="col-sm-4">
    <input type="date" class="form-control" name="tgl_lahir" required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Jenis Kelamin</label>
    <div class="col-sm-8">
    <label class="radio-inline">
        <input type="radio" value="Laki-Laki" name="jk"  />Laki-Laki
        </label>
        <label class="radio-inline">
        <input type="radio" value="Perempuan" name="jk" />Perempuan
        </label>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-8">
    <textarea class="form-control" rows="3" name="alamat" required=""></textarea>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-4">
    <select class="form-control" name="kelas" required="">
          <option></option>
        <option value="X ATPH">X ATPH</option>
          <option value="XI ATPH">XI ATPH</option>
          <option value="XII ATPH">XII ATPH</option>
        <option value="X TBSM 1">X TBSM 1</option>
          <option value="X TBSM 2">X TBSM 2</option>
          <option value="XI TBSM 1">XI TBSM 1</option>
          <option value="XI TBSM 2">XI TBSM 2</option>
          <option value="XII TBSM 1">XII TBSM 1</option>
          <option value="XII TBSM 2">XII TBSM 2</option>
        <option value="X RPL 1">X RPL 1</option>
          <option value="X RPL 2">X RPL 2</option>
          <option value="X RPL 3">X RPL 3</option>
          <option value="XI RPL 1">XI RPL 1</option>
          <option value="XI RPL 2">XI RPL 2</option>
          <option value="XI RPL 3">XI RPL 3</option>
          <option value="XII RPL 1">XII RPL 1</option>
          <option value="XII RPL 2">XII RPL 2</option>
          <option value="XII RPL 3">XII RPL 3</option>
          <option value="XII RPL 4">XII RPL 4</option>
        </select>
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
    
    $nis = $_POST ['nis'];
    $nama = $_POST ['nama'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jk = $_POST ['jk'];
    $alamat= $_POST ['alamat'];
    $kelas = $_POST ['kelas'];




    $simpan=$konek -> query ("insert into anggota (nis,nama,tgl_lahir,jk,alamat,kelas) values ('$nis','$nama','$tgl_lahir','$jk','$alamat','$kelas')");

?>
<script type="text/javascript">

    alert ("Data Berhasil Disimpan");
    document.location="index.php?page=anggota";

</script>
<?php
}             
?>
