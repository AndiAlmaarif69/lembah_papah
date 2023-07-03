
    <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title"><?= $title?></h4>
                <?php 
                    foreach($rows as $row) :
                ?>
                <div class="modal_ku" id="edit_fitur<?= $row->id_fitur?>" tabindex="-1" style="width:600px; height: 300px; position: absolute; top:-80px; left:15%; z-index: 9999;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title text-primary ml-5 modalku" id="exampleModalLabel">Edit Wisata</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('edit_fit')?>
                            <input type="hidden" name="id_fitur" value="<?= $row->id_fitur?>">
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0 custom-file-label">Judul Wisata</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input value="<?= $row->rating?>" name="rating" type="text" class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0 custom-file-label">Harga Paket Wisata</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input value="<?= $row->title?>" name="title" type="text" class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Detail</label>
                                <div class="col-md-12 border-bottom p-0">
                                <textarea name="button" rows="5" class="form-control p-0 border-0"><?= $row->button?></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4 custom-file">
                                <label for="example-email" class="col-md-12 p-0 custom-file-label text-danger">disarankan foto dengan resolusi 1350x650px</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <img src="<?= base_url('img/fitur/'.$row->foto)?>" class="rounded float-start" alt="..." width="60" height="70">
                                    <input name="foto_fitur" type="file" class="form-control p-0 border-0 custom-file-input">
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="banner_save" class="banner-save save-aja btn btn-primary">simpan</button> 
                            </div>
                        <?= form_close()?>
                    </div>
                </div>
                </div>
                <?php endforeach ?>
                    <!-- edit_modal -->

                <?php 
                    foreach($rows as $row) :
                ?>
                <div class="modal_ku" id="delete_fitur<?= $row->id_fitur?>" tabindex="-1" style="width:500px; height: 300px; position: absolute; top:-3%; left:20%; z-index: 9999;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title text-primary ml-5 modalku" id="exampleModalLabel">Yakin ingin menghapus data ?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= site_url('delete_fit')?>" method="post">
                            <input type="hidden" name="id_fitur" value="<?= $row->id_fitur?>">
                            <input type="hidden" name="foto_fitur" value="<?= $row->foto?>">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="banner_delete" class="banner-save save-aja btn btn-primary">yes</button> 
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                </div>
                <?php endforeach ?>
                    <?= $this->session->flashdata('notif')?>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        
                        <div class="white-box">
                            <button type="button" class="btn btn-success text-light mb-3 mr-4" data-bs-toggle="modal" data-bs-target="#tambah">
                                Tambah data <i class="fa fa-plus"></i>
                            </button>

                            <div class="table-responsive">
                                <table id="mytable_fitur" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0 text-center">no</th>
                                            <th class="border-top-0 text-center">Wisata</th>
                                            <th class="border-top-0 text-center">Harga</th>
                                            <th class="border-top-0 text-center">Detail Wisata</th>
                                            <th class="border-top-0 text-center">foto wisata</th>
                                            <th class="border-top-0 text-center">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        foreach ($rows as $row):
                                    ?>
                                    <tr>
                                        <td class="text-center"><?= $no++?></td>
                                        <td class="text-center"><?= $row->rating?></td>
                                        <td class="text-center">Rp. <?= $row->title?></td>
                                        <td class="text-center"><?= $row->button?></td>
                                        <td class="text-center">
                                            <img src="<?= base_url('img/fitur/'.$row->foto)?>" class="rounded float-start" width="250" height="160" alt="...">
                                        </td>
                                        <td class="text-center d-flex">
                                            <button data-bs-toggle="modal" id="edit_ku<?= $row->id_fitur?>" data-bs-target="#edit_banner" class="btn btn-primary text-light "><i class="fas fa-pen-square"></i></button>
                                            <button id="delete_ku<?= $row->id_fitur?>" data-bs-target="#delete_banner" class="btn btn-danger text-light"><i class="fas fa-trash-alt"></i></button>
                                        </td>
                                    </tr>    
                                    <?php endforeach?>       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                

                <!-- Modal box -->
                <div class="modal fade" id="tambah" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title text-primary ml-5 modalku" id="exampleModalLabel">Tambahkan Wisata</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('insert_fitur')?>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0 custom-file-label">Judul Wisata</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="rating" type="text" class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0 custom-file-label">Harga Paket Wisata</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="title" type="text" class="form-control p-0 border-0"> </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Detail</label>
                                <div class="col-md-12 border-bottom p-0">
                                <textarea name="button" rows="5" class="form-control p-0 border-0"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-4 custom-file">
                            <label for="example-email" class="col-md-12 p-0 custom-file-label text-danger">disarankan foto dengan resolusi 1350x650px</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="foto_fitur" type="file" class="form-control p-0 border-0 custom-file-input">
                                </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="banner_save" class="banner-save save-aja btn btn-primary">save</button> 
                            </div>
                        <?= form_close()?>
                    </div>
                </div>

                <!-- Modal box edit-->
                <!-- edit data -->
                </div>
                </div>
                </div>
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    </div>
<!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © copyright <a
                    href="<?= base_url()?>">Lembah Papah</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url()?>/template/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/template/js/app-style-switcher.js"></script>
    <script src="<?= base_url()?>/template/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url()?>/template/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url()?>/template/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url()?>/template/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?= base_url()?>/template/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="<?= base_url()?>/template/plugifiturer_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url()?>/template/js/pages/dashboards/dashboard1.js"></script>
    <!-- sweet alert -->
    <script src="<?= base_url()?>sweetalert/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#mytable_fitur').DataTable();
            // ===============!! untuk banner !!=================
            // untuk edit
            <?php 
                foreach($rows as $row) :
            ?>
            $('#edit_fitur<?= $row->id_fitur?>').hide();
            <?php endforeach?>
            <?php 
                foreach($rows as $row) :
            ?>
            $('#edit_ku<?= $row->id_fitur?>').on('click', function(){
                $('#edit_fitur<?= $row->id_fitur?>').modal('show');
            })
            <?php endforeach?>

            // untuk hapus data
            <?php 
                foreach($rows as $row) :
            ?>
            $('#delete_fitur<?= $row->id_fitur?>').hide();
            <?php endforeach?>
            <?php 
                foreach($rows as $row) :
            ?>
            $('#delete_ku<?= $row->id_fitur?>').on('click', function(){
                $('#delete_fitur<?= $row->id_fitur?>').modal('show');
            })
            <?php endforeach?>
        } );
    </script>
<!-- SlimScroll -->
</body>

</html>