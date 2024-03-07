<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="" method="post">
					<span class="login100-form-title" style="height: 150px;">
						<div align="left">
						<img src="images/siswa.png" width="130px" height="130px" style="position: absolute; margin-top: -10px; margin-left: 30px;">
					</div>
					<div align="right" style="font-size: 30px; font-style:center; margin-right: -120px; "> <font color="#FFF" ><center> PERPUSTAKAAN <br> SEKOLAH</center></font></div>
					</span>


					<div class="wrap-input100 validate-input" data-validate="Please enter username">
						

						<input class="input100" type="text" name="username" placeholder="Username" required="Harus di isi">

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password" required="Harus di isi">

						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							
						</span>

						<a href="#" class="txt2">
						
						</a>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login" value="login">
						
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
					
						</span>

						<a href="#" class="txt3">
						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


<?php
	include "koneksi.php";
	session_start();
	
	if(isset($_POST['login'])) {

	$username   = $_POST['username'];
	$password	= $_POST['password'];

	$kueri		= "SELECT * FROM login where username='$username' and password=md5('$password')";
	$login		= $konek -> query($kueri);
	$cek		= $login -> num_rows;
	$tampil		= $konek -> query ("SELECT * from login where username='$username'");
	$level		= $tampil -> fetch_array();
	
	if ($cek > 0 ) {
		if($level['level']=='admin'){

		
			$_SESSION['username']=$username;
	?>
		<script type="text/javascript">

		document.location='perpus/index.php';
		</script>

<?php
	}else if ($level['level']=='user') {
		$_SESSION['username']=$username;
	?>
		<script type="text/javascript">
		
		document.location='perpus/index.php';
		</script>
<?php
}
	}else {
		echo"Gagal Login";

	}
}
?>




	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</html>	