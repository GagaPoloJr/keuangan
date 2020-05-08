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
                    <h1 class="page-header">Matra Mandiri : Pengeluaran Kantor</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" id="heading-table">
                            Tabel Pengeluaran Kantor
                            <a href="<?php echo base_url("dashboard/new_kantor/") ?>"><button class="btn" id="button1"><i class="fa fa-plus"></i> Add</button></a>
                        </div>
                        <!-- END Modal Tambah -->

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Bulan dan Tahun</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $i = 1; ?>

                                            <?php foreach ($kantor_keluar as $kk) { ?>
                                                <?php
                                                // $hari = $kk->tanggal;  
                                                $bulan = $kk->bulan;
                                                $tahun = $kk->tahun;
                                                ?>
                                                <td><?php echo $i; ?></td>
                                                <td> <?php echo $bulan . " " . $tahun; ?> </td>
                                                <td><a href="<?php echo base_url() . 'dashboard/tbl_kantor2/' . $kk->bulan . '/' . $kk->tahun ?>" type="button" class="btn btn-success">Detail</a>
                                                    <a onclick="deleteConfirm('<?php echo base_url() . 'dashboard/delete_kantor/' .  $kk->bulan . '/' . $kk->tahun ?>')" type="button" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
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
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

            </div>
            <!-- /#page-wrapper -->

            <script src=<?php echo base_url("assets/js/dataTables/jquery.dataTables.min.js") ?> />
            </script>
            <script src=<?php echo base_url("assets/js/dataTables/dataTables.bootstrap.min.js") ?> />
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