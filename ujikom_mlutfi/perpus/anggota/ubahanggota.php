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




<?php
include "koneksi.php";

    $nis = $_GET['id'];

    $simpan=$konek -> query ("select * from anggota where nis='$nis'");

    $tampil = $simpan -> fetch_array();

    $jk = $tampil['jk'];

    $kelas = $tampil ['kelas'];

?>


<div class="panel panel-default" style="height: 72%; margin-left: 350px; margin-right: 350px; margin-bottom: 10px;">
<div class="panel-heading">
Ubah Data Anggota
</div>
 <div class="panel-body">

<form method="POST"  class="form-horizontal" >
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nis</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nis" value="<?php echo $tampil['nis']?>">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Nama</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo $tampil['nama']?>">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Tanggal Lahir</label>
    <div class="col-sm-4">
    <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Jenis Kelamin</label>
    <div class="col-sm-8">
  <label class="radio-inline">
    <input type="radio" value="Laki-Laki" name="jk" <?php echo ($jk=='Laki-Laki')?"checked":"";?> />Laki-Laki
    </label>
    <label class="radio-inline">
    <input type="radio" value="Perempuan" name="jk" <?php  echo ($jk=='Perempuan')?"checked":"";?> />Perempuan
    </label>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Alamat</label>
    <div class="col-sm-8">
    <textarea class="form-control" rows="3" name="alamat"><?php echo $tampil['alamat'] ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Kelas</label>
    <div class="col-sm-4">
    <select class="form-control" name="kelas">
<option value="X ATPH" <?php if ($kelas=='X ATPH') {
  echo "selected";
  }?>>X ATPH</option>
<option value="XI ATPH" <?php if ($kelas=='XI ATPH') {
  echo "selected";
  } ?>>XI ATPH</option>
<option value="XII ATPH" <?php if ($kelas=='XII ATPH') {
  echo "selected";
  } ?>>XII ATPH</option>
<option value="X TBSM 1" <?php if ($kelas=='X TBSM 1') {
  echo "selected";
  } ?>>X TBSM 1</option>
<option value="X TBSM 2" <?php if ($kelas=='X TBSM 2') {
  echo "selected";
  } ?>>X TBSM 2</option>
<option value="XI TBSM 1" <?php if ($kelas=='XI TBSM 1') {
  echo "selected";
  } ?>>XI TBSM 1</option>
<option value="XI TBSM 2" <?php if ($kelas=='XI TBSM 2') {
  echo "selected";
  } ?>>XI TBSM 2</option>
<option value="XII TBSM 1" <?php if ($kelas=='XII TBSM 1') {
  echo "selected";
  } ?>>XII TBSM 1</option>
<option value="XII TBSM 2" <?php if ($kelas=='XII TBSM 2') {
  echo "selected";
  } ?>>XII TBSM 2</option>
<option value="X RPL 1" <?php if ($kelas=='X RPL 1') {
  echo "selected";
  } ?>>X RPL 1</option>
<option value="X RPL 2" <?php if ($kelas=='X RPL 2') {
  echo "selected";
  } ?>>X RPL 2</option>
<option value="X RPL 3" <?php if ($kelas=='X RPL 3') {
  echo "selected";
  } ?>>X RPL 3</option>
<option value="XI RPL 1" <?php if ($kelas=='XI RPL 1') {
  echo "selected";
  } ?>>XI RPL 1</option>
<option value="XI RPL 2" <?php if ($kelas=='XI RPL 2') {
  echo "selected";
  } ?>>XI RPL 2</option>
<option value="XI RPL 3" <?php if ($kelas=='XI RPL 3') {
  echo "selected";
  } ?>>XI RPL 3</option>
<option value="XII RPL 1" <?php if ($kelas=='XII RPL 1') {
  echo "selected";
  } ?>>XII RPL 1</option>
<option value="XII RPL 2" <?php if ($kelas=='XII RPL 2') {
  echo "selected";
  } ?>>XII RPL 2</option>
<option value="XII RPL 3" <?php if ($kelas=='XII RPL 3') {
  echo "selected";
  } ?>>XII RPL 3</option>
<option value="XII RPL 4" <?php if ($kelas=='XII RPL 4') {
  echo "selected";
  } ?>>XII RPL 4</option>
                                                
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




<?php
include "koneksi.php";
if (isset($_POST['simpan'])){
    
    $nama = $_POST ['nama'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $jk = $_POST ['jk'];
    $alamat= $_POST ['alamat'];
    $kelas = $_POST ['kelas'];



        $simpan=$konek -> query ("update anggota set nama='$nama',tgl_lahir='$tgl_lahir',jk='$jk',alamat='$alamat',kelas='$kelas' where nis='$nis'");

?>

<script type="text/javascript">

    alert ("Data Berhasil Diubah");
    document.location="index.php?page=anggota";

</script>
<?php
 
}           
    
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 