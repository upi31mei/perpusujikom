<head> 
<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web Perpustakaan</title>

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
<div class="panel-heading"><b>Data Peminjam Buku</b></div>

  <form class="navbar-form navbar-left" action="" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="cari" placeholder="Cari nama peminjam buku" style="width:400px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width: 60px;">Cari</button>
</form>


<div align="right">

<a href="index.php?page=tambahtransaksi"><button class="btn btn-primary" style="width: 120px;">Pinjam Buku</button></a>
<a href="index.php?page=datapengembali"><button class="btn btn-primary" style="width: 170px;">Riwayat Peminjaman</button></a>
<input type="button" value="Kembali" class="btn btn-primary" style="width: 120px;" onclick="history.go(-1);">
</div>

<div class="panel-body">

<table class="table table-bordered table-striped table-hover">

<tr>
<th><center>No</center></th>
<th><center>Judul Buku</center></th>
<th><center>Nis</center></th>
<th><center>Nama</center></th>
<th><center>Tanggal Pinjam</center></th>
<th><center>Tanggal Kembali</center></th>
<th><center>Terlambat</center></th>
<th><center>Status</center></th>
<th><center>Tanggal Input<center></th>
<th><center>Aksi<center></th>
</tr>

<?php
include "koneksi.php";

if (isset($_POST['cari'])) {
    $cari=$_POST['cari'];
    $tampil=$konek -> query("select * from transaksi where status='pinjam' and nama like '%".$cari."%'");

}else{


$tampil = $konek -> query ("select * from transaksi where status='pinjam'");
}
$no = 1;
while ($a = $tampil -> fetch_array()){

?>
<tr>
    <td><center><?php echo $no++;?></center></td>
    <td><?php echo $a['judul'];?></td>
    <td><?php echo $a['nis'];?></td>
    <td><?php echo $a['nama'];?></td>
    <td><center><?php echo $a['tglpinjam'];?></center></td>
    <td><center><?php echo $a['tglkembali'];?></center></td>
    <td>
        <?php
        $denda = 1000;
        $tgl_dateline = $a['tglkembali'];
        $tglkembali = date('Y-m-d');

        $lambat = terlambat ($tgl_dateline, $tglkembali);
        $denda = $lambat * $denda;

        if ($lambat>0) {
            echo "
            <font color='red'>$lambat hari<br>(Rp $denda)</font>
            ";

        }else{
            echo $lambat."Hari";
        }



        ?>




    </td>
    <td><?php echo $a['status'];?></td>
    <td><?php echo $a['tglinput'];?></td>
  

<td>
    <center>
        <a href="index.php?page=kembali&id=<?php echo $a['id']; ?>&judul=<?php echo $a['judul'];?>" class="btn btn-info" style="width: 100px;">Kembali</a> 

        <a href="index.php?page=perpanjang&id=<?php echo $a['id'];?>&judul=<?php echo $a['judul']?>&lambat=<?php echo $lambat?>&tglkembali=<?php echo  $a['tglkembali']?>" class="btn btn-primary" style="width: 100px;">Perpanjang</a>
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