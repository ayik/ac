<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.css" media="screen" title="no title" charset="utf-8">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

  </head>

  <body class="bg-opsi">
    <div id="sparepart">
      <div class="row" id="bodi2">

             <div class="container" id="data">
               <div class="panel-heading"><h2>Daftar Harga Sparepart</h2></div>
               <br><br>
                 <table class="table">
                <tr>
                  <th>No</th>
                  <th>jenis spare part</th>
                  <th>PK</th>
                  <th>Harga</th>
                </tr>

                 <?php $no=1; $result = mysqli_query($con,"SELECT * FROM barang");
                 while ($r=mysqli_fetch_array($result)) {?>
                 <tr>

                   <td><?php echo "",$r['no']; ?></td>
                   <td><?php echo "",$r['jenis sparepart']; ?></td>
                   <td><?php echo "",$r['pk']; ?></td>
                   <td><?php echo "",$r['harga']; ?></td>
                 </tr>
                 <?php $no++;?>
                 <?php } ?>
                 </table>
                 <hr>
             </div>
      </div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
  </body>
</html>
