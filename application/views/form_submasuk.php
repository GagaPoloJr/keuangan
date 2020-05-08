<?php include 'template/head.php' ?>
<title>Keuangan Matra Mandiri</title>

    </head>
    
    
<body>
<?php include 'template/side.php'?>

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Matra Mandiri</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Sub Pemasukan
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" action="<?php echo base_url().'dashboard/input_pemasukan'; ?>" method="post">
                                                <div class="form-group">
                                                    <?php foreach ($pemasukan as $pm) { ?>
                                                    <div class="form-group">
                                                    <label>Proyek</label>
                                                    <input type="text" name="proyek" class="form-control" value="<?php echo $pm->nama?>" required>
                                                </div>
                                                    <?php }?>
                                                </div>
                                                <div class="form-group">
                                                    <?php foreach ($pemasukan as $pm1) { ?>
                                                    <!-- ID PROYEK -->
                                                    <input type="hidden" name="idd" class="form-control" value="<?php echo $pm1->id_proyek?>">
                                                    <?php }?>
                                                </div>
                                                <div class="row">
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Hari</label>
                                                    <input type="text" name="tanggal" class="form-control" required>
                                                </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Bulan</label>
                                                    <input type="text" name="bulan" class="form-control" required>
                                                </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Tahun</label>
                                                    <input type="text" name="tahun" class="form-control" required>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Keterangan</label>
                                                    <input type="text" name="keterangan" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Nominal</label>
                                                    <input type="number" name="nominal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                <button type="submit" value="Tambah" class="btn btn-default">Submit</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->