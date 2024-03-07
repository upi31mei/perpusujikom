 
<!DOCTYPE html>
<html>
<head>

<?php
include "../koneksi.php";
$d=$_GET['id'];
$edit= $konek -> query ("select * from anggota where nis='$d'");
$b= $edit -> fetch_array();
?>

<title>DATA <?php echo $b['nama'] ?></title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/lihat.css">

</head>
<body>
        
<div class="profil">
<p> DATA <?php echo $b['nama']?></p>
<fieldset id="print">

<center>
<table border="0">

<tr height="45">  
  <td width="30"> Nis</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['nis'] ?></td>
</tr>

<tr height="45">  
  <td width="30"> Nama</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['nama'] ?></td>
</tr>

<tr height="45">  
  <td> Tanggal Lahir </td>
  <td>:</td>
  <td> <?php echo $b['tgl_lahir'] ?></td>
</tr>

<tr height="45">  
  <td width="30">Jenis Kelamin</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['jk'] ?></td>
</tr>

<tr height="45">  
  <td width="30">Alamat</td>
  <td width="5">:</td>
  <td width="100"> <?php echo $b['alamat'] ?></td>
</tr>

<tr height="45">  
  <td>Kelas </td>
  <td>:</td>
  <td> <?php echo $b['kelas'] ?></td>
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