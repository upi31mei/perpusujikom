<?php
		
		$id = $_GET['id'];
		$judul = $_GET['judul'];
		$tglkembali = $_GET['tglkembali'];
		$lambat = $_GET['lambat'];

		if ($lambat > 7) {
		?>
			<script type="text/javascript">
			alert ("Buku Tidak Dapat Diperpanjang Karena Lebih Dari 7 Hari.. Kembalikan Dahulu Kemudian Pinjam Kembali");
			document.location="index.php?page=transaksi";
			</script>

		<?php

	}else{
$date=date_create($tglkembali);
date_add($date,date_interval_create_from_date_string('7 days'));

$tglkembali= date_format($date, 'Y-m-d') ;


		$sql = $konek -> query ("update transaksi set tglkembali='$tglkembali' where id='$id'");

		if ($sql){
			?>

		<script type="text/javascript">
			
			alert("Perpanjangan Berhasil");
			document.location="index.php?page=transaksi";
		</script>

		<?php
		}else{
		?>


		<script type="text/javascript">
			
			alert("Perpanjangan Gagal");
			document.location="index.php?page=transaksi";
		</script>

		<?php
	}
}


?>