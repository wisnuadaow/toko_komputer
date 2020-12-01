<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
   <br></br>
   <a href="cpu.php">Ke Menu CPU</a><br/><br/>
	<a href="gpu.php">Ke Menu GPU</a><br/><br/>
	<a href="mobo.php">Ke Menu Mobo</a><br/><br/>
	<a href="paket_komplit.php">Paket Komplit</a><br/><br/>
	<a href="paket_simpel.php">Paket Simpel</a><br/><br/>
</div>
</head>
<body>

</body>
</html>
