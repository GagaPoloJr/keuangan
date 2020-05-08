<?php include 'template/head.php' ?>
<title>Keuangan Matra Mandiri</title>

</head>


<body>
    <?php include 'template/side.php' ?>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Matra Mandiri : Data Pemasukan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="head">
                            <?php foreach ($pemasukan as $pm) { ?>
                                Tabel Detail Pemasukan
                                <a href="<?php echo base_url("dashboard/new_submasuk/" . $pm->id_proyek) ?>"><button class="btn" id="button1"><i class="fa fa-plus"></i> New Income</button></a>
                                <a href="<?php echo base_url("dashboard/export_masuk2/" . $pm->id_proyek) ?>"><button class="btn" id="export"><i class="fa fa-file-pdf-o"> Export to PDF</i></button></a>
                        </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('info')) : ?>
                        <div class="alert alert-info" role="alert">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                            <?php echo $this->session->flashdata('info'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('warning')) : ?>
                        <div class="alert alert-warning" role="alert">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                            <?php echo $this->session->flashdata('warning'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('danger')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                            <?php echo $this->session->flashdata('danger'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Proyek</th>
                                        <th>Keterangan</th>
                                        <th>Nominal</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($sub_pemasukan as $sp) { ?>
                                            <?php
                                            $hari = $sp->tanggal;
                                            $bulan = $sp->bulan;
                                            $tahun = $sp->tahun;
                                            ?>
                                            <?php
                                            $uang = $sp->nominal;
                                            $uang = number_format($uang, 0, ',', '.');
                                            ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo  $hari . " " . $bulan . " " . $tahun; ?></td>
                                            <td><?php echo  $sp->proyek; ?></td>
                                            <td><?php echo  $sp->keterangan; ?></td>
                                            <td><?php echo  $uang; ?></td>
                                            <td><a style="text-decoration: none" href="javascript:;" data-id="<?php echo $sp->id_sub ?>" data-ket="<?php echo $sp->keterangan ?>" data-tgl="<?php echo $hari ?>" data-bln="<?php echo $bulan ?>" data-thn="<?php echo $tahun ?>" data-nominal="<?php echo $uang ?>" data-toggle="modal" data-target="#edit-data">
                                                    <button data-toggle="modal" data-target="#ubah-data" class="btn btn-warning">Edit</button>
                                                </a>
                                                <a onclick="deleteConfirm('<?php echo base_url() . 'dashboard/delete_pemasukan2/' . $sp->id_sub ?>')" type="button" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php } ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th style="text-align:right;" colspan="4">Total Pemasukan</th>
                                        <th style="text-align:right;" colspan="2">
                                            <?php foreach ($totalsub as $tot) {
                                                $uang = $tot->sum;
                                                $uang = number_format($uang, 0, ',', '.');
                                                echo $uang;
                                            } ?>

                                        </th>
                                    </tr>
                                </tfoot>
                                <tfoot>
                                    <tr>
                                        <th style="text-align:right;" colspan="4">Anggaran</th>
                                        <?php foreach ($pemasukan as $pm) { ?>
                                            <?php
                                            $anggaran = $pm->jumlah;
                                            $anggaran = number_format($anggaran, 0, ',', '.');
                                            ?>
                                            <th style="text-align:right;" colspan="2"><?php echo $anggaran ?></th>
                                    </tr>
                                <?php } ?>
                                </tfoot>
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
                            <form class="form-horizontal" action="<?php echo base_url('Dashboard/ubah2') ?>" method="post" enctype="multipart/form-data" role="form">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label">ID Proyek</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="id" id="id" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="ket" id="ket" placeholder="Tuliskan keterangan">
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
                                        <label class="col-lg-2 col-sm-2 control-label">Nominal</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="nominal" id="nominal" placeholder="Tuliskan nominal">
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
    </div>
    <!-- /#wrapper -->

    <script src=<?php echo base_url("assets/js/dataTables/jquery.dataTables.min.js") ?> />
    </script>
    <script src=<?php echo base_url("assets/js/dataTables/dataTables.bootstrap.min.js") ?> />
    </script>

    <script>
        $(document).ready(function() {
            // Untuk sunting
            $('#edit-data').on('show.bs.modal', function(event) {
                var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
                var modal = $(this)

                // Isi nilai pada field
                modal.find('#id').attr("value", div.data('id'));
                modal.find('#ket').attr("value", div.data('ket'));
                modal.find('#tgl').attr("value", div.data('tgl'));
                modal.find('#bln').attr("value", div.data('bln'));
                modal.find('#thn').attr("value", div.data('thn'));
                modal.find('#nominal').attr("value", div.data('nominal'));

            });
        });
    </script>

    <script>
        $(function() {
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

</html>