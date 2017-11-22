<?php
include "function/db.php";
$service  =$_POST['service'];
$keluhan  =$_POST['keluhan'];
$pk       =$_POST['pk'];
$merk     =$_POST['merk'];
$jumlah   =$_POST['jumlah'];
$properti =$_POST['properti'];
$descripsi=$_POST['descripsi'];
$nama     =$_POST['nama'];
$email    =$_POST['email'];
$alamat   =$_POST['alamat'];
$ponsel   =$_POST['ponsel'];

$query = "INSERT INTO booking (service, keluhan, pk,merk, jumlah, properti, descripsi, nama, email, alamat, ponsel)
          VALUES ('$service','$keluhan','$pk','$merk','$jumlah','$properti','$descripsi','$nama','$email','$alamat','$ponsel')";

$result = mysqli_query($con,$query);
if ($result) {
  echo "<script>alert("Berhasil")</script>";

}else{
  echo "gagal";
}
mysqli_close();
 ?>
