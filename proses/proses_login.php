<?php 
session_start();
 
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$data = mysqli_query($conn,"SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($data);

	$userCaptcha = $_POST['kodecaptcha'];
    $captchaSession = $_SESSION['captcha'];
 
if(empty($userCaptcha) || strtolower($userCaptcha) !== strtolower($captchaSession)){
        echo '<script>alert("Captcha salah"); window.location="../login.php"</script>';    	
} else {
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		$_SESSION['logged_in'] = true;

    	echo "<script>alert('Login Berhasil.');window.location='../admin/';</script>";
	} else {
		echo "<script>alert('Username dan Password Salah.');window.location='../login.php';</script>";
	}
}
?>