<?php
include "koneksi.php";
$id=$_GET['id'];

$hapus=$konek -> query("delete from buku where id='$id'");

	?>
<script type="text/javascript">
	document.location='index.php?page=buku';
</script>


