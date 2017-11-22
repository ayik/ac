<?php session_start();
require_once("../function/db.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysqli_query($con,"SELECT * FROM admin WHERE username = '$username'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_array($cekuser);
if($jumlah == 0) {
echo "Username Belum Terdaftar!";
echo "<a href='login.php'>? Back</a>";
} else {
if($pass == $hasil['password']) {
echo require_once ("berhasil.php");

} else {
$_SESSION['username'] = $hasil['username'];
header('location:index.php');
}
}
?>
