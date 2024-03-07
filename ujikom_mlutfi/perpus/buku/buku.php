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



<div class="panel panel-default" style="min-height: 478px;">
<div class="panel-heading"><b>Data Buku</b></div>

  <form class="navbar-form navbar-left" action="" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="cari" placeholder="Cari judul buku" style="width:400px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 60px;">Cari</button>
</form>


<div align="right">
<a href="index.php?page=tambahbuku"><button class="btn btn-primary" style="width: 120px;">Tambah Buku</button></a>
<a href="index.php?page=rekapbuku"><button  class="btn btn-primary" style="width: 120px;">Rekap Data</button></a>
<input type="button" value="Kembali"  class="btn btn-primary" style="width: 120px;" onclick="history.go(-1);">
</div>

<div class="panel-body">

<table class="table table-bordered table-striped table-hover">

<tr>
<th><center>No</center></th>
<th><center>Judul Buku</center></th>
<th><center>Pengarang</center></th>
<th><center>Penerbit</center></th>
<th><center>Tahun Terbit</center></th>
<th><center>Jumlah Buku</center></th>
<th><center>Lokasi</center></th>
<th><center>Tanggal Input</center></th>
<th colspan="3"><center>Aksi<center></th>
</tr>


<?php
include "koneksi.php";

if (isset($_POST['cari'])) {
    $cari=$_POST['cari'];
    $tampil=$konek -> query("select * from buku where judul like '%".$cari."%'");

}else{
$tampil = $konek -> query ("select * from buku");
}
while ($a = $tampil -> fetch_array()){


@$no++;

echo "<tr>
    <td><center>$no</center></td>
    <td>$a[judul]</td>
    <td>$a[pengarang]</td>
    <td><center>$a[penerbit]</center></td>
    <td><center>$a[thnterbit]</center></td>
    <td><center>$a[jumlah]</center></td>
    <td><center>$a[lokasi]</center></td>
    <td><center>$a[tglinput]</center></td>
    ";
  
  ?>

<td>
    <center>
    <a href="index.php?page=ubahbuku&id=<?php echo $a['id']; ?>"><i class="glyphicon glyphicon-edit btn btn-primary" style="width: 40px;" title="Update"></i></a>

    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')" href="index.php?page=hapusbuku&id=<?php echo $a['id']; ?>"><i class="glyphicon glyphicon-trash btn btn-info" style="width: 40px;" title="Delete"></i></a>

    <a href="buku/lihatbuku.php?id=<?php echo $a['id']; ?>">  <i class="glyphicon glyphicon-eye-open btn btn-primary" style="width: 40px;" title="Lihat"></i></a>
    </center>
</td>

<?php
}
?>


</tr>


</table>
</div>
</div>
</body>










<script type="text/javascript">
    function printDiv (el) {
    
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;
    
    document.body.innerHTML=b;
    window.print();
    document.body.innerHTML=a;
    }
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 