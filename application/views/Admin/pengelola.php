
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
                <div class="modal_ku" id="edit_fitur<?= $row->id_pengelola?>" tabindex="-1" style="width:1000px; height: 300px; position: absolute; top:-80px; z-index: 9999;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title text-primary ml-5 modalku" id="exampleModalLabel">Edit Pengelola</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex">
                        <?= form_open_multipart('edit_pengelola')?>
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-6 p-0">
                                        <input type="hidden" name="id_pengelola" value="<?= $row->id_pengelola?>">
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">Nama pengelola</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input value="<?= $row->nama?>" name="nama" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">Posisi</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input value="<?= $row->posisi?>" name="posisi" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_fb</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input value="<?= $row->url_fb?> name="url_fb" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_ig</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input value="<?= $row->url_ig?>" name="url_ig" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_twt</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input value="<?= $row->url_twt?>" name="url_twt" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_wa</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input value="<?= $row->url_wa?>" name="url_wa" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group custom-file">
                                            <div class="col-md-12 border-bottom p-0">
                                                <img src="<?= base_url('img/pengelola/'.$row->foto)?>" class="rounded float-start" alt="..." width="50" height="70">
                                                <input name="foto_pengelola" type="file" class="form-control p-0 border-0 custom-file-input">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" id="banner_save" class="banner-save save-aja btn btn-primary">simpan</button> 
                                        </div>
                                    </div>
                                </div>
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
                <div class="modal_ku" id="delete_fitur<?= $row->id_pengelola?>" tabindex="-1" style="width:500px; height: 300px; position: absolute; top:-3%; left:20%; z-index: 9999;">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title text-primary ml-5 modalku" id="exampleModalLabel">Yakin ingin menghapus data ?</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= site_url('delete_pengelola')?>" method="post">
                            <input type="hidden" name="id_pengelola" value="<?= $row->id_pengelola?>">
                            <input type="hidden" name="foto_pengelola" value="<?= $row->foto?>">
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
                                            <th class="border-top-0 text-center">Nama Pengelola</th>
                                            <th class="border-top-0 text-center">Posisi pengelola</th>
                                            <th class="border-top-0 text-center">url_ig</th>
                                            <th class="border-top-0 text-center">url_fb</th>
                                            <th class="border-top-0 text-center">url_twt</th>
                                            <th class="border-top-0 text-center">url_wa</th>
                                            <th class="border-top-0 text-center">foto pengelola</th>
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
                                        <td class="text-center"><?= $row->nama?></td>
                                        <td class="text-center"><?= $row->posisi?></td>
                                        <td class="text-center"><?= $row->url_ig?></td>
                                        <td class="text-center"><?= $row->url_fb?></td>
                                        <td class="text-center"><?= $row->url_twt?></td>
                                        <td class="text-center"><?= $row->url_wa?></td>
                                        <td class="text-center">
                                            <img src="<?= base_url('img/pengelola/'.$row->foto)?>" class="rounded float-start" width="120" height="160" alt="...">
                                        </td>
                                        <td class="text-center d-flex">
                                            <button data-bs-toggle="modal" id="edit_ku<?= $row->id_pengelola?>" data-bs-target="#edit_banner" class="btn btn-primary text-light "><i class="fas fa-pen-square"></i></button>
                                            <button id="delete_ku<?= $row->id_pengelola?>" data-bs-target="#delete_banner" class="btn btn-danger text-light"><i class="fas fa-trash-alt"></i></button>
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
                        <h4 class="modal-title text-primary ml-5 modalku" id="exampleModalLabel">Tambahkan Pengelola</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= form_open_multipart('insert_pengelola')?>
                        <div class="container">
                                <div class="row">
                                    <div class="col-md-6 p-0">
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">Nama pengelola</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="nama" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">Posisi</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="posisi" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_fb</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="url_fb" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_ig</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="url_ig" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_twt</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="url_twt" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 p-0 custom-file-label">url_wa</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="url_wa" type="text" class="form-control p-0 border-0"> </div>
                                        </div>
                                        <div class="form-group custom-file">
                                            <div class="col-md-12 border-bottom p-0">
                                                <input name="foto" type="file" class="form-control p-0 border-0 custom-file-input">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger text-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" id="banner_save" class="banner-save save-aja btn btn-primary">simpan</button> 
                                        </div>
                                    </div>
                                </div>
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
            $('#edit_fitur<?= $row->id_pengelola?>').hide();
            <?php endforeach?>
            <?php 
                foreach($rows as $row) :
            ?>
            $('#edit_ku<?= $row->id_pengelola?>').on('click', function(){
                $('#edit_fitur<?= $row->id_pengelola?>').modal('show');
            })
            <?php endforeach?>

            // untuk hapus data
            <?php 
                foreach($rows as $row) :
            ?>
            $('#delete_fitur<?= $row->id_pengelola?>').hide();
            <?php endforeach?>
            <?php 
                foreach($rows as $row) :
            ?>
            $('#delete_ku<?= $row->id_pengelola?>').on('click', function(){
                $('#delete_fitur<?= $row->id_pengelola?>').modal('show');
            })
            <?php endforeach?>
        } );
    </script>
<!-- SlimScroll -->
</body>

</html>