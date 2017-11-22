<?php
include "db.php";

$result = mysqli_query($con,"SELECT * FROM daftar");
while ($r=mysqli_fetch_array($result)) {
  echo "",$r['no'];
  echo "",$r['jasa'];
  echo "",$r['pk'];
  echo "",$r['harga'],"<br>";
}
 ?>
