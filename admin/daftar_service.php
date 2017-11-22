<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-12 connectedSortable">

        <!-- /.box -->

        <!-- quick email widget -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Pengorder Service Clean And Cool</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>sevice</th>
                <th>keluhan</th>
                <th>pk</th>
                <th>merk</th>
                <th>jumlah</th>
                <th>properti</th>
                <th>descripsi</th>
                <th>nama</th>
                <th>email</th>
                <th>alamat</th>
                <th>ponsel</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <?php $no=1; $result = mysql_query("SELECT * FROM booking");
              while ($r=mysql_fetch_array($result)) { ?>
              <tbody>
              <tr>

                <td><?php echo "",$r['service']; ?> </td>
                <td><?php echo "",$r['keluhan']; ?> </td>
                <td><?php echo "",$r['pk']; ?> </td>
                <td><?php echo "",$r['merk']; ?> </td>
                <td><?php echo "",$r['jumlah']; ?> </td>
                <td><?php echo "",$r['properti']; ?> </td>
                <td><?php echo "",$r['descripsi']; ?> </td>
                <td><?php echo "",$r['nama']; ?> </td>
                <td><?php echo "",$r['email']; ?> </td>
                  <td><?php echo "",$r['alamat']; ?> </td>
                <td><?php echo "",$r['ponsel']; ?> </td>
                <td>
                  <a href="#" class="btn btn-primary">Proses</a>
                </td>
              </tr>
              <?php $no++;?>
              <?php } ?>
              </tbody>

            </table>
          </div>

          <!-- /.box-body -->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->

      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
