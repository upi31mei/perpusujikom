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
    <link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
  
  $query= "select * from anggota";
  $tampil= $konek -> query($query);
  $a=$tampil -> fetch_array();
?>

<center>

<form action="index.php?page=printanggota" method="post" name="postform"><center>

  <p align="center"><font size="5"><b>Pencarian Data Berdasarkan Periode Tanggal</b></font></p>
  <p align="center"><font size="3">Tanggal Pertama Input Data Anggota : <b><?php echo "$a[tglinput]"; ?></b></font></p>

<strong> Dari :</strong>&nbsp;<input type="date" name="tanggal_awal" required="">
  <strong> Sampai :</strong>&nbsp;<input type="date" name="tanggal_akhir" required="">
    <input type="submit" name="pencarian" value="Print" class="btnrekap">
    <input type="button" value="Kembali" class="btnrekap" style="margin-left: 11%;" onclick="history.go(-1);">
</form>
</center>

<div class="panel panel-default" style="min-height: 350px;">

<div class="panel-body">
<table class="table table-bordered">

  
<tr>
<th><center>No</center></th>
<th><center>Nis</center></th>
<th><center>Nama</center></th>
<th><center>Tanggal Lahir</center></th>
<th><center>Jenis Kelamin</center></th>
<th><center>Alamat</center></th>
<th><center>Kelas</center></th>
<th><center>Tanggal Input</center></th>

</tr>

<?php
include "koneksi.php";

$tampil =$konek -> query ("select * from anggota");

while ($a= $tampil -> fetch_array()) {

@$no++;

echo"<tr>
    <td><center>$no</center></td>
    <td>$a[nis]</td>
    <td>$a[nama]</td>
    <td><center>$a[tgl_lahir]</center></td>
    <td><center>$a[jk]</center></td>
    <td><center>$a[alamat]</center></td>
    <td><center>$a[kelas]</center></td>
    <td><center>$a[tglinput]</center></td>
    ";
  }
?>



</table>
</div>
</div>






  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 