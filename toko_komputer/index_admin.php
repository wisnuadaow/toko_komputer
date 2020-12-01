<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login_admin.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
   <br></br>
   <a href="cpu_admin.php">Ke Menu CPU</a><br/><br/>
	<a href="gpu_admin.php">Ke Menu GPU</a><br/><br/>
	<a href="mobo_admin.php">Ke Menu Mobo</a><br/><br/>
	<a href="paket_komplit_admin.php">Paket Komplit</a><br/><br/>
	<a href="paket_simpel_admin.php">Paket Simpel</a><br/><br/>
</div>