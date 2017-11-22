<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <style>
      *{

      }
    </style>
  </head>
  <body>


    <section class="bg-dark" id="aktiv">
      <div class="aktivitas">

      </div>

  <div class="row">
    <div id='status' class="col-lg-8">
      <h2><center>Sedang Oprasi</center</h2>
    </div>
    <div class="col-lg-4">
      <div id="slide1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <?php  require_once "function/db.php";?>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/ac2.jpg" alt="">
        <div class="carousel-caption">
          <?php $result = mysql_query("SELECT * FROM booking where id='44'");
          while ($r=mysql_fetch_array($result)) {?>
        <h1><?php echo $r["service"] ?></h1>
      </div> <?php } ?>
      </div>
      <div class="item">
        <img src="img/ac3.jpg" alt="">
        <div class="carousel-caption">
          <?php $result = mysql_query("SELECT * FROM booking where id='45'");
          while ($r=mysql_fetch_array($result)) {?>
            <h1><?php echo $r["service"] ?></h1>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
    </div>
    <h1><center>aktivitas</center></h1>
    </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
