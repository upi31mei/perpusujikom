<?php
include "koneksi.php";
$nis=$_GET['id'];

$hapus=$konek -> query("delete from anggota where nis='$nis'");

	?>
<script type="text/javascript">
	document.location='index.php?page=anggota';
</script>


