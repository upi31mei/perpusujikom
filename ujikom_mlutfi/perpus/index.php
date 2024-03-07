
<?php 
include "transaksi/function.php";

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

<?php
include "../koneksi.php";
session_start();

$user=$_SESSION['username'];

 
if (!isset($_SESSION['username'])){
 
  header('location:../index.php');
}else{

  }
?>







<div id="head">
<div id="tulisan">
<img src="image/siswa.png" width="70px" height="70px" style="position: absolute; margin-left: 20px;">
    <div align="left"> <font color="#FFF" style="font-size: 30; font-family: serif; margin-left: 110px;" >PERPUSTAKAAN SMKN 1 RONGGA </font></div>

<div id="under-head">
<?php

include "jam.php";

?>
</div>
</div>
</div>


<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:#6D849C; width: 100%; height: 30px;" >



    <ul class="nav navbar-nav">

        <li><a href="index.php?page=home">HOME</a></li>
        <li><a href="index.php?page=anggota">DATA ANGGOTA</a></li>
        <li><a href="index.php?page=buku">DATA BUKU</a></li>
        <li ><a href="index.php?page=transaksi">PEMINJAMAN</a></li>

  </ul>

  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php">LOG OUT</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>



<div id="content">
<?php
if (isset($_GET['page'])) {

  $page=$_GET['page'];
  switch ($page) {
    case 'home':
    include "home.php";
      break;

    case 'anggota':
    include "anggota/anggota.php";
      break;

    case 'tambahanggota':
    include "anggota/tambahanggota.php";
      break;

    case 'hapusanggota':
    include "anggota/hapusanggota.php";
      break;

    case 'ubahanggota':
    include "anggota/ubahanggota.php";
      break;

    case 'rekapanggota':
    include "anggota/rekapanggota.php";
      break;

    case 'printanggota':
    include "anggota/printanggota.php";
      break;

    case 'buku':
    include "buku/buku.php";
      break;

    case 'tambahbuku':
    include "buku/tambahbuku.php";
      break;

    case 'hapusbuku':
    include "buku/hapusbuku.php";
      break;

    case 'ubahbuku':
    include "buku/ubahbuku.php";
      break;

    case 'rekapbuku':
    include "buku/rekapbuku.php";
      break;

    case 'printbuku':
    include "buku/printbuku.php";
      break;

    case 'transaksi':
    include "transaksi/transaksi.php";
      break;

    case 'tambahtransaksi':
    include "transaksi/tambahtransaksi.php";
      break;

    case 'kembali':
    include "transaksi/kembali.php";
      break;

    case 'perpanjang':
    include "transaksi/perpanjang.php";
      break;

    case 'datapengembali':
    include "transaksi/datapengembali.php";
      break;

    
    

   


    
    default:
      echo "HALAMAN TIDAK ADA";
      break;
  }
}else{
  include "home.php";
}


?>
    
  

</div>

  
<div id="footer">
  <center><font size="5%"><font color="white" style="margin-top: -50%; font-family: serif;"> @MUHAMAD LUTFI MALIK IBRAHIM 2024 </font></font></center>
</div>

</head>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 
