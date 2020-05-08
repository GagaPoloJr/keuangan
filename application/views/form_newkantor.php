<head>
    <?php include 'template/head.php' ?>
    <title>Keuangan Matra Mandiri</title>




</head>


<body>
    <?php include 'template/side.php' ?>


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

                            Form Pengeluaran Kantor
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                    <!-- <form role="form" > -->
                                        <form  action="<?php echo base_url() . 'Dashboard/upload_kantor'; ?>" method="POST" enctype="multipart/form-data">
                                            <div class="col-lg-12">
                                            <!-- <div class="col-lg-12"> -->
                                                <div class="form-group">
                                                    <label for="id_kantor">ID</label>
                                                    <input type="text" id="id_kantor" name="id_kantor" class="form-control" >
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="tanggal">Hari</label>
                                                            <input type="text" id="tanggal" name="tanggal" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="bulan">Bulan</label>
                                                            <input type="text" id="bulan" name="bulan" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="tahun">Tahun</label>
                                                            <input type="text" id="tahun" name="tahun" class="form-control" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="keperluan">Keperluan</label>
                                                    <input type="text" id="keperluan" name="keperluan" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="opsi">Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="opsi" name="opsi" id="optionsRadios1" value="Lunas" checked>Lunas
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="opsi" id="optionsRadios1" value="Belum Lunas" checked>Belum Lunas
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kota">Kota</label>
                                                        <input type="text" id="kota" name="kota" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nominal">Nominal</label>
                                                    <input type="number" id="nominal" name="nominal" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="proyek">Proyek</label>
                                                    <input type="text" id="proyek" name="proyek" class="form-control">
                                                </div>
                                                <!-- <div class="form-group"> -->
                                                <!-- <label>Input Nota</label> -->
                                                <!-- <input name="nota" type="file"> -->
                                                <label for="nota">Unggah Nota </label>
                                                <div class="custom-file">
                                                    <input name="nota" type="file" class="custom-file-input <?php echo form_error('nota') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nota') ?>
                                                    </div>
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
    </div>
    <!-- /.container-fluid -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <script src="<?php echo base_url() . 'assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js' ?>"></script>


    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>