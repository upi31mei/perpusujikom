<?php
$id =$_GET['id'];
$judul=$_GET['judul'];

$id = $konek -> query("update transaksi set status='kembali' where id='$id'");

$simpan = $konek -> query ("update buku set jumlah = (jumlah+1) where judul='$judul'");


?>

<script type="text/javascript">
	alert("Proses Kembalikan Buku Berhasil");
	document.location="index.php?page=transaksi";
	
</script>
<?php


?>