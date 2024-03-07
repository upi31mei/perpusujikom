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
<div class="panel-heading"><b>Tambah Buku</b></div>
 <div class="panel-body">

 <form method="POST"  class="form-horizontal" >
<div class="form-group">
    <label for="nomor" class="col-sm-3 control-label">id</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="id" required="">
    </div>
</div>
<form method="POST"  class="form-horizontal" >
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Judul</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="judul" required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Pengarang</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="pengarang" required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Penerbit</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="penerbit" required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Tahun Terbit</label>
    <div class="col-sm-4">
    <select class="form-control" name="thnterbit">
      <?php
      $tahun = date("Y");

      for ($i=$tahun-30; $i <= $tahun ; $i++) { 
        echo'

      <option value="'.$i.'">'.$i.'</option>
      ';
     
      }
      ?>
    </select>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Jumlah Buku</label>
    <div class="col-sm-4">
    <input type="number" class="form-control" name="jumlah" required=""></textarea>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Lokasi</label>
    <div class="col-sm-4">
    <select class="form-control" name="lokasi">
      <option value="rak 1"></option>
      <option value="rak 1">Rak 1</option>
      <option value="rak 2">Rak 2</option>
      <option value="rak 3">Rak 3</option>
      <option value="rak 4">Rak 4</option>
      <option value="rak 5">Rak 5</option>
      <option value="rak 6">Rak 6</option>
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


  </body>
</html> 
<?php
include "koneksi.php";
if (isset($_POST['simpan'])){
    
    $judul = $_POST ['judul'];
    $pengarang = $_POST ['pengarang'];
    $penerbit = $_POST ['penerbit'];
    $thnterbit = $_POST ['thnterbit'];
    $jumlah= $_POST ['jumlah'];
    $lokasi = $_POST ['lokasi'];



        $simpan=$konek -> query ("insert into buku (judul,pengarang,penerbit,thnterbit,jumlah,lokasi) values ('$judul','$pengarang','$penerbit','$thnterbit','$jumlah','$lokasi')");
?>

<script type="text/javascript">

    alert ("Data Berhasil Disimpan");
    document.location="index.php?page=buku";

</script>
<?php
 
}           
    
?>

