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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/btn.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="content">
<div class="#"  style="font-family: serif; font-size: 27px;"> 
  <p> <b> Selamat Datang di Perpustakaan SMK Negeri 1 Rongga </b></p>
<div align="right">

   <hr width='100%'>


   
</div>




<div id="cont">
<div class="box">
<img src="imgage/bk1.jpg" width="120px" height="120px">
<div class="jumlah">
  <?php
  include "koneksi.php";
  $hitung ="SELECT * FROM anggota";
  $tampil =$konek -> query($hitung);
  $b= $tampil -> num_rows;
    echo "Anggota<br> $b";
  ?>
</div>

</div>


<div class="box">
<img src="image/bk3.gif" width="120px" height="120px">
<div class="jumlah">
  <?php
  include "koneksi.php";
  $hitung ="SELECT * FROM buku";
  $tampil =$konek -> query($hitung);
  $b= $tampil -> num_rows;
    echo "Buku<br> $b";
  ?>
</div>

</div>

<div class="box">
<img src="image/9.png" width="120px" height="120px">
<div class="jumlah">
  <?php
  include "koneksi.php";
  $hitung ="select * from transaksi where status='pinjam'";
  $tampil =$konek -> query($hitung);
  $b= $tampil -> num_rows;
    echo "Peminjam<br> $b";
  ?>
</div>

</div>



</div>

</div>
</div>


 </div>







</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 

