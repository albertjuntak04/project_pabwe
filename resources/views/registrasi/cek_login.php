<?php 
 // mengaktifkan session php
 session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';

 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM user");
$stmt = mysqli_fetch_array($data);
 
if (isset($_POST["login"])){
	$user = strcmp($username, $stmt["username"]);
	$pass = strcmp($password, $stmt["password"]);
	if ($user == 0){
		if($pass == 0){
			session_start();
			$_SESSION["user"] = $username;
			mysqli_query($koneksi,"UPDATE navigation SET menu ='Logout' WHERE id_navigation = 3");
			mysqli_query($koneksi,"UPDATE navigation SET link_url ='log_out.php' WHERE id_navigation = 3");
			mysqli_query($koneksi,"UPDATE user SET st_login='1' WHERE username=$username");
			header("Location: ../index.php");
		}
	}else{
		?>
		<script>
		  alert("Username dan password tidak terdaftar");
		  header('Location: login.php');
		</script>
	  <?php
	}
}
?>