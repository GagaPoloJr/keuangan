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
                            <h1 class="page-header">Matra Mandiri : Pengeluaran Kantor</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading" id="head">
                                    
                                    Detail Pengeluaran Kantor
                                    <?php foreach ($kantor_keluar1 as $kk){?>
                                    <a href="<?php echo base_url("Dashboard/export_kantor/").$kk->bulan.'/'.$kk->tahun ?>"><button class="btn" id="export"><i class="fa fa-file-pdf-o"></i> Export to PDF</button></a>
                                    <?php }?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Keperluan</th>
                                                    <th>Status Bayar</th>
                                                    <th>Kota</th>
                                                    <th>Nominal</th>
                                                    <th>Proyek</th>
                                                    <th>Nota</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php $i=1; ?>
                                                    <?php foreach($kantor_keluar as $kk){ ?>
                                                        <?php
                                                            $hari = $kk->tanggal;
                                                            $bulan = $kk->bulan;
                                                            $tahun = $kk->tahun;
                                                    ?>
                                                        <?php
                                                            $proyek = $kk->proyek;
                                                        ?>
                                                        <?php
                                                            $uang = $kk->pengeluaran;
                                                            $uang = number_format($uang, 0,',','.');
                                                    ?>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo  $hari." ".$bulan." ".$tahun; ?></td>
                                                        <td><?php echo $kk->keperluan;?></td>
                                                        <td><?php echo $kk->stat_bayar;?></td>
                                                        <td><?php echo $kk->kota;?></td>
                                                        <td><?php echo $uang;?></td>
                                                        <td><?php echo $proyek ?></td>
                                                        <td>
                                                            <a style="color: blue" href="<?php echo base_url(). 'upload/data/'.$kk->nota ?>"><?php echo $kk->nota?></a>
                                                       </td>
                                                        <td><a 
                                                            href="javascript:;"
                                                            data-id="<?php echo $kk->id_kantor ?>"
                                                            data-ket="<?php echo $kk->keperluan ?>"
                                                            data-tgl= "<?php echo $hari ?>"
                                                            data-bln= "<?php echo $bulan ?>"
                                                            data-thn= "<?php echo $tahun ?>"
                                                            data-nominal="<?php echo $uang ?>"
                                                            data-opsi="<?php echo $kk->stat_bayar ?>"
                                                            data-kota="<?php echo $kk->kota ?>"
                                                            data-proyek="<?php echo $proyek ?>"
                                                            data-nota="<?php echo $kk->nota ?>"
                                                            data-toggle="modal" data-target="#edit-data">
                                                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-warning">Edit</button>
                                                        </a>
                                                            <a onclick="deleteConfirm('<?php echo base_url() . 'dashboard/delete_kantor2/' . $kk->tanggal.'/'.$kk->bulan.'/'.$kk->tahun ?>')" type="button" class="btn btn-danger">Delete</a></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="text-align:right;" colspan="7">Total Pengeluaran</th>
                                                    <th style="text-align:right;" colspan="2">
                                                    <?php foreach($totalktr as $tot){
                                                        $uang1 = $tot->sum;
                                                        $uang1 = number_format($uang1);
                                                        echo $uang1;
                                                    }?></th>
                                                </tr>
                                            </tfoot>
                                            <!-- <tfoot>
                                                <tr>
                                                    <th styole="text-align:right;" colspan="7">Pemasukan Proyek</th>
                                                    <th style="text-align:right;" colspan="2"></th>
                                                </tr>
                                            </tfoot> -->
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- Modal EDIT -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Edit Data</h4>
                                    </div>
                                    <form class="form-horizontal" action="<?php echo base_url('Dashboard/ubah3') ?>" method="post" enctype="multipart/form-data" role="form">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">ID Pengeluaran</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="id" id="id" placeholder="" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Keperluan</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="ket" id="ket" placeholder="Tuliskan keperluan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tuliskan tanggal">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label">Bulan</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="bln" id="bln" placeholder="Tuliskan bulan">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Tahun</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="thn" id="thn" placeholder="Tuliskan tahun">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-5 control-label" for="opsi">Status</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" id="opsi" name="opsi" value="Lunas" checked>Lunas
                                                        </label>
                                                    <!-- </div>
                                                    <div class="radio"> -->
                                                        <label>
                                                            <input type="radio" id="opsi" name="opsi" id="optionsRadios1" value="Belum Lunas" checked>Belum Lunas
                                                        </label>
                                                    </div>
                                                    <!-- <div class="form-group">
                                                        <label for="kota">Kota</label>
                                                        <input type="text" id="kota" name="kota" class="form-control">
                                                    </div> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Kota</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="kota" id="kota" placeholder="Tuliskan tahun">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Proyek</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="proyek" id="proyek" placeholder="Tuliskan proyek">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 col-sm-2 control-label">Nominal</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Tuliskan nominal">
                                            </div>
                                        </div>
                                        <label for="nota">Unggah Nota</label>
                                                <div class="custom-file">
                                                    <input id="nota" name="nota" type="file" class="custom-file-input <?php echo form_error('nota') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                                                    <label class="custom-file-label" for="exampleInputFile"></label>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nota') ?>
                                                    </div>
                                                </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Modal Edit -->

                <!-- Modal Delete -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Are you sure?</h5>
                            <button class="close" type="button" data-dismiss="modal" id="close1" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">The data that have been deleted cannot be restored.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a id="btn-delete" class="btn btn-danger" href="#">Yes, delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Modal Delete -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
<script src=<?php echo base_url("assets/js/dataTables/jquery.dataTables.min.js")?> /></script>
<script src=<?php echo base_url("assets/js/dataTables/dataTables.bootstrap.min.js")?> /></script>
<script>
    $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal          = $(this)

            // Isi nilai pada field
            modal.find('#id').attr("value",div.data('id'));
            modal.find('#ket').attr("value",div.data('ket'));
            modal.find('#tgl').attr("value",div.data('tgl'));
            modal.find('#bln').attr("value",div.data('bln'));
            modal.find('#thn').attr("value",div.data('thn'));
            modal.find('#opsi').attr("value",div.data('opsi'));
            modal.find('#kota').attr("value",div.data('kota'));
            modal.find('#proyek').attr("value",div.data('proyek'));
            modal.find('#nominal').attr("value",div.data('nominal'));
            modal.find('#nota').attr("value",div.data('nota'));
        });
    });
</script>

<script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>

        <script>
            $(function () {
                $('#dataTables-example').DataTable({
                        "responsive": true,
                        "paging": true,
                        "lengthChange": true,
                        "searching": true,
                        "ordering": true,
                        "info": true,
                        "autoWidth": true,
                });
            });
        </script>
        <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>
</body>
        </body>