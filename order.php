<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Order</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/creative.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php  require_once "function/db.php";?>
<div class="container">
      <center><h2>Order Sekarang Yuk</h2></center>
      <br><br><br>


          <br><br>
          <form role="form" action="input_order.php" method="post">
      <div class="form-group">
      <label for="text">Service yang dibutuhkan :</label>
      <select class="form-control" name="service">
        <?php $result = mysqli_query($con,"SELECT * FROM daftar");
        while ($r=mysqli_fetch_array($result)) {?>
          <option value="<?php echo $r['jasa'] ?>"><?php echo $r['jasa'] ?></option>
          <?php } ?>
      </select>

      </div>
      <hr class="batas">
      <div class="form-group">
      <label for="text">Keluhan Pada AC Anda :</label>
      <input type="text" class="form-control" id="text" name="keluhan" placeholder="keluhan">
      </div>
      <hr class="batas">
      <div class="form-group">
        <label for="">Kekuatan AC Anda</label>
        <select class="form-control" name="pk">
          <option value="0.5">0.5</option>
          <option value="1">1</option>
          <option value="1.5">1.5</option>
          <option value="2">2</option>
        </select>
      <hr class="batas">
      <label for="text">Merk AC Anda :</label>
      <input type="text" class="form-control" id="text" name="merk" placeholder="merk">
      <hr class="batas">
      <label for="text">Jumlah AC yg di service</label>
      <input type="text" class="form-control" id="text" name="jumlah" placeholder="unit">
      <hr class="batas">
      <label for="">Jenis Properti</label>
      <select class="form-control" name="properti">
        <option value="rumah">rumah</option>
        <option value="kantor">kantor</option>
        <option value="apertement">apertement</option>
      </select>
        <label for="comment"><h4>descripsi/Informasi keluhan Anda</h4></label>
        <textarea class="form-control" rows="8" cols="40" name="descripsi" placeholder="Komentar"></textarea>
         <br><br><br>
        <h3>Kontak Anda</h3>
        <br><br><br>
        <label for="text">Nama</label>
        <input type="text" class="form-control" id="text" name="nama" placeholder="Nama">
        <hr class="batas">
        <label for="text">Alamat Email</label>
        <input type="email" class="form-control" id="text" name="email" placeholder="Email">
        <hr class="batas">
        <label for="text">Alamat Lengkap</label>
        <input type="text" class="form-control" id="text" name="alamat" placeholder="Alamat">
        <hr class="batas">
        <label for="text">No. Ponsel</label>
        <input type="text" class="form-control" id="text" name="ponsel" placeholder="No. Ponsel">
        <br><br><br>
        <div class="row" id= "tombol">
          <input type="submit" class="btn btn-default btn-xl" onclick="berhasil()"></a>
        </div>
      </form>
            </div>

          </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      function berhasil(){
        alert("Input Data Berhasil");
      }
    </script>
  </body>
</html>
