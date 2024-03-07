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


<head>
    <title>Pencarian Data Berdasarkan Periode Tanggal</title>
</head>

<body>



    <?php
        $konek = new mysqli("localhost","root","","dbperpustakaan");
            if (!$konek){
            die ("Koneksi ke Engine MySQL gagal !");
            }
            $tampil = $konek -> query ("SELECT * FROM buku");
            if (!$konek) {
            die ("Koneksi ke Database gagal !");
            }
    ?>
    
    <p>
    <?php
        //proses jika sudah klik tombol pencarian data
        if(isset($_POST['pencarian'])){
        //menangkap nilai form 
        $tanggal_awal=$_POST['tanggal_awal'];
        $tanggal_akhir=$_POST['tanggal_akhir'];
        if(empty($tanggal_awal) || empty($tanggal_akhir)){
        //jika data tanggal kosong
        ?>
    
        <?php
        }else{
        ?>

<br>
    <i><b>Informasi : </b> Hasil pencarian data berdasarkan periode Tanggal <b>
        <?php echo $_POST['tanggal_awal']?></b> s/d <b><?php echo $_POST['tanggal_akhir']?></b></i>
        <?php
        $tampil2=$konek -> query ("SELECT * from buku where tglinput between'$tanggal_awal' and '$tanggal_akhir'");
        }
    ?>
    </p><center/>
    <div align="right">
        <input type="button" name="" onclick="printDiv('print')" value="Print" class="btnprint">
        <input type="button" value="Kembali" class="btnprint" onclick="history.go(-1);">
    </div>

<div class="panel panel-default" style="min-height: 350px;">
<fieldset id="print">
<div class="panel-body">
<table class="table table-bordered">





  
<tr>
<th><center>No</center></th>
<th><center>Judul</center></th>
<th><center>Pengarang</center></th>
<th><center>Penerbit</center></th>
<th><center>Tahun Terbit</center></th>
<th><center>Jumlah Buku</center></th>
<th><center>Lokasi</center></th>
<th><center>Tanggal Input</center></th>

</tr>

        <?php
        //menampilkan pencarian data
        while($a=$tampil2->fetch_array()){
        

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

        <?php
        }
        ?>
        <tr>
            <?php
            //jika pencarian data tidak ditemukan
            //jika pencarian data tidak ditemukan
            if($tampil2->num_rows==0){
                echo "<center><font color=red><blink>Pencarian data tidak ditemukan!</blink></font></center>";
            }
            ?>
        </tr>
    </table>
    <?php
        }
    else{
        unset($_POST['pencarian']);
    }
    ?>
    <script type="text/javascript">
function printDiv(el){
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;
    
    document.body.innerHTML=b;
    window.print();
    document.body.innerHTML=a;
}
    </script>
</div>

</body>
</html>
</div>