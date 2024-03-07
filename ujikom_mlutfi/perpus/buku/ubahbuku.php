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

    $id = $_GET['id'];

    $simpan=$konek -> query ("select * from buku where id='$id'");

    $tampil = $simpan -> fetch_array();

    $tahun2 = $tampil['thnterbit'];

    $lokasi = $tampil['lokasi'];

?>


<div class="panel panel-default" style="height: 72%; margin-left: 350px; margin-right: 350px; margin-bottom: 10px;">
<div class="panel-heading">
Ubah Data Buku
</div>
<div class="panel-body">

<form method="POST"  class="form-horizontal" >
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Judul</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="judul" value="<?php echo $tampil['judul']?>">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Pengarang</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="pengarang" value="<?php echo $tampil['pengarang']?>">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Penerbit</label>
    <div class="col-sm-8">
    <input type="text" class="form-control" name="penerbit" value="<?php echo $tampil['penerbit']?>"required="">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Tahun Terbit</label>
    <div class="col-sm-4">
    <select class="form-control" name="thnterbit">
    <?php
        $tahun = date("Y");

            for ($i=$tahun-29; $i <= $tahun ; $i++) { 

                if ($i==$tahun2){
                     echo'<option value="'.$i.'" selected>'.$i.'</option>';
                }else{

                    echo'<option value="'.$i.'">'.$i.'</option>';
                }
             }
    ?>
    </select>
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Jumlah Buku</label>
    <div class="col-sm-4">
    <input type="number" class="form-control" name="jumlah" value="<?php echo $tampil['jumlah']?>" >
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-3 control-label">Lokasi</label>
    <div class="col-sm-4">
    <select class="form-control" name="lokasi" value="<?php echo $tampil['lokasi']?>">
        <option value="rak 1" <?php if ($lokasi=="rak 1"){echo "selected";} ?>>Rak 1</option>
        <option value="rak 3" <?php if ($lokasi=="rak 3"){echo "selected";} ?>>Rak 3</option>
        <option value="rak 4" <?php if ($lokasi=="rak 4"){echo "selected";} ?>>Rak 4</option>
        <option value="rak 5" <?php if ($lokasi=="rak 5"){echo "selected";} ?>>Rak 5</option>
        <option value="rak 6" <?php if ($lokasi=="rak 6"){echo "selected";} ?>>Rak 6</option>
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




        $simpan=$konek -> query ("update buku set judul='$judul',pengarang='$pengarang',penerbit='$penerbit',thnterbit='$thnterbit',jumlah='$jumlah',lokasi='$lokasi' where id='$id' ");

?>

<script type="text/javascript">

    alert ("Data Berhasil Diubah");
    document.location="index.php?page=buku";

</script>
<?php
 
}           
    
?>
