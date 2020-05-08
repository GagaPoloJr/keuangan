<head>
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
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Form Pengeluaran Proyek
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <form  action="<?php echo base_url() . 'Dashboard/upload_proyek'; ?>" method="POST" enctype="multipart/form-data">
                                              <div class="form-group">
                                                  
                                                <?php foreach ($proyek as $p){?>
                                                  <label for="proyek">Proyek</label>
                                                      <input type="text" id="proyek" name="proyek" class="form-control" value="<?php echo $p->nama?>">
                                                    <?php }?>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="idproyek">ID Proyek</label>
                                                    <input class="form-control" id="idproyek" name="idproyek" value="<?php echo $p->id_proyek?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="idpproyek">ID Pengeluaran Proyek</label>
                                                    <input class="form-control" id="idpproyek" name="idpproyek">
                                                </div>
                                                <div class="form-group">
                                                    <label for="uraian">Uraian Pengeluaran</label>
                                                    <input class="form-control" id="uraian" name="uraian">
                                                </div>
                                                
                                                <div class="row">
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tanggal">Hari</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="bulan">Bulan</label>
                                                    <input type="text" id="bulan" name="bulan" class="form-control" required>
                                                </div>
                                                </div>
                                                <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="tahun">Tahun</label>
                                                    <input type="text" id="tahun" name="tahun" class="form-control" required>
                                                </div>
                                                </div>
                                                </div>
                                                    <div class="form-group">
                                                        <label for="nominal">Nominal</label>
                                                        <input class="form-control" id="nominal" name="nominal">
                                                    </div>
                                                    <label for="nota">Unggah Nota </label>
                                                    <div class="custom-file">
                                                        <input name="nota" type="file" class="custom-file-input <?php echo form_error('nota') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                                                        <label class="custom-file-label" for="exampleInputFile"></label>
                                                        <div class="invalid-feedback">
                                                            <?php echo form_error('nota') ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <button type="submit" value="Tambah" class="btn btn-default">Submit</button>
                                                    <button type="reset" class="btn btn-default">Reset</button>
                                                    </div>
                                                </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() . 'assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>


    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>