 
<!DOCTYPE html>
<html>
<head>

<?php
include "../koneksi.php";
$d=$_GET['id'];
$edit= $konek -> query ("select * from buku where id='$d'");
$b= $edit -> fetch_array();
?>

<title>Profil Buku<?php echo $b['judul'] ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/lihat.css">

</head>
<body>
        
<div class="profil">
<p> Profil Buku<?php echo $b['judul']?></p>
<fieldset id="print">

<center>
<table border="0">

<tr height="45">  
  <td width="30">Judul</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['judul'] ?></td>
</tr>

<tr height="45">  
  <td width="30">Pengarang</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['pengarang'] ?></td>
</tr>

<tr height="45">  
  <td>Penerbit</td>
  <td>:</td>
  <td> <?php echo $b['penerbit'] ?></td>
</tr>

<tr height="45">  
  <td width="30">Tahun Terbit</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['thnterbit'] ?></td>
</tr>

<tr height="45">  
  <td width="30">Jumlah Buku</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['jumlah'] ?></td>
</tr>

<tr height="45">  
  <td>Lokasi </td>
  <td>:</td>
  <td> <?php echo $b['lokasi'] ?></td>
</tr>

<tr height="45">  
  <td>Tanggal Input</td>
  <td>:</td>
  <td> <?php echo $b['tglinput'] ?></td>
</tr>

</table>

</font>
</fieldset>
<center>
<button type="button" name="" onclick="printDiv('print')" value="print" class="btn">Print</button>
<input type="button" value="Kembali" class="btn" onclick="history.go(-1);">
</center>
</div>

<script type="text/javascript">
    function printDiv (el) {
    
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;
    
    document.body.innerHTML=b;
    window.print();
    document.body.innerHTML=a;
    }
</script>
</body>
</html>