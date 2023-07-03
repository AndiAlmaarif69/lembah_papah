        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            
            <!-- ============================================================== -->
            <div class="container-fluid">
            <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= site_url('banner')?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Total Banner</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <i class="fa fa-bookmark" aria-hidden="true"></i>
                                    <li class="ms-auto"><span class="counter text-success"><?= $corousal?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= site_url('fitur')?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Total aneka</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    <li class="ms-auto"><span class="counter text-success"><?= $fitur?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= site_url('showcase')?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Total galery</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <i class="fa fa-camera-retro" aria-hidden="true"></i>
                                    </li>
                                    <li class="ms-auto"><span class="counter text-success"><?= $galery?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= site_url('listing')?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Total blog</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                                    </li>
                                    <li class="ms-auto"><span class="counter text-success"><?= $blog?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= site_url('pengelola')?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Total  pengelola</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <i class="fa fa-hdd" aria-hidden="true"></i>
                                    </li>
                                    <li class="ms-auto"><span class="counter text-success"><?= $pengelola?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <a href="<?= site_url('admin')?>">
                            <div class="white-box analytics-info">
                                <h3 class="box-title">Total User</h3>
                                <ul class="list-inline two-part d-flex align-items-center mb-0">
                                    <li>
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    </li>
                                    <li class="ms-auto"><span class="counter text-success"><?= $admin?></span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
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

<!-- SlimScroll -->
</body>

</html>