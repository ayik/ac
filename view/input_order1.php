<?php
include "../function/db.php";
$sparepart    =$_POST['sparepart'];
$pk           =$_POST['pk'];
$merk         =$_POST['merk'];
$jumlah       =$_POST['jumlah'];
$nama         =$_POST['nama'];
$email        =$_POST['email'];
$alamat       =$_POST['alamat'];
$ponsel       =$_POST['ponsel'];

$query = "INSERT INTO booking1 (sparepart,pk,merk, jumlah, nama, email, alamat, ponsel)
          VALUES ('$sparepart','$pk','$merk','$jumlah','$nama','$email','$alamat','$ponsel')";

$result = mysqli_query($con,$query);
if ($result) {
  header("location:../berhasil.php");

}else{
  echo '<script>alert("Berhasil")</script>';
}
mysqli_close();
 ?>
