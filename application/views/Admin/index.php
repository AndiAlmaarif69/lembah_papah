
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title><?= $josss ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/template/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?= base_url()?>/template/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?= base_url()?>/template/css/style.min.css" rel="stylesheet">
</head>

<body class="bg-primary">
        <div class="container" style="position: relative;">
            <div  class="row mt-5">
                <div class="col-md-4 col-lg-4 col-xl-4 col-xm-12 col-sm-6 mx-auto my-auto mt-5" margin-left: 30%;">
                    <div class="card shadow-lg rounded-3">
                        <h3 class="card-title text-center mt-4">Welcome Admin</h3>
                        <small id="joss" class="text-danger">isi</small>
                        <span id="tampilin" class="joss"></span>
                        <span id="tampilin2"></span>
                        <div class="card-body">
                            <form action="<?= base_url('update/login')?>"  method="POSt" class="form-horizontal form-material">
                            </form>
                            <div class="form-group mb-4">
                                <label for="email" class="col-md-12 p-0">email</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="email" type="text" id="Email" placeholder="email" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4"> 
                                <label class="col-md-12 p-0">Password</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input name="password" id="Password" type="password" class="form-control p-0 border-0">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="tombolku btn btn-primary mr-5">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
 <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center" style="position: absolute; width:100%; bottom:0;"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url()?>/template/plugins/bower_components/jquery/dist/jquery-3.5.1.js"></script>
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
    <script src="<?= base_url()?>/template/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= base_url()?>/template/js/pages/dashboards/dashboard1.js"></script>
    <script src="<?= base_url()?>sweetalert/sweetalert2.all.min.js"></script>
    <script>
        function myFunction(){
            window.location.href = "<?= base_url('dashboard')?>"
        }

        $(document).ready(function () {
            $('#joss').hide();
            $(".tombolku").click(function (){
                var email = $("#Email").val();
                var password = $("#Password").val();
                // $("#tampilin").append(email)
                // $("#tampilin2").append(password)
                if(password.length == "" && email.length == ""){
                    $('#joss').show();
                    Swal.fire({
                        type: 'warning',
                        title : 'oops',
                        text : 'email dan password'
                    });
                }else if(email.length == ""){
                    Swal.fire({
                        type: 'warning',
                        title : 'oops...',
                        text : 'email wajib di isi !'
                    });
                }else if(password.length == ""){
                    Swal.fire({
                        type: 'warning',
                        title : 'duaar',
                        text : 'password mohon diisi'
                    });
                }
                else{
                    $.ajax({
                        url: '<?= site_url('Update/login')?>',
                        type : 'post',
                        data : {
                            'email' : email,
                            'password' : password
                        },
                        // data : "email="+ email + "&password=" + password, 
                        success:function(result){
                            if (result == 1){
                                    Swal.fire({
                                    type: 'success',
                                    title : 'login berhasil',
                                    text : 'loading....',
                                    timer : 1000,
                                    showCancelButton : false,
                                    showConfirmButton : false
                                });
                                return myFunction();
                            }else {
                                Swal.fire({
                                type: 'warning',
                                title : 'oops',
                                text : 'email atau password yang anda masukkan salah'
                            });
                                // return myFunction();
                            }
                            console.log(result);
                        },
                        error:function(result) {
                            if(result == 2){
                                Swal.fire({
                                type: 'warning',
                                title : 'oops...',
                                text : 'password wajid di isi !'
                            });
                            }
                        console.log(result);
                        }
                    })
                }
            })
            // $("#tope").click(function (){
            //     $(this).hide();
            // });
            // const wHeight = $(window).height();
            // console.log(wHeight)
        });



        // sweet alert 
        $('.btn-success').on('click', function(){
        let nama_kandidat = $(this).data('nama_kandidat');
        let id_user = $(this).data('id_user');
        // sweet alert
        Swal.fire({
        title: 'Apakah anda yakin?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
            type: 'post',
            url: '<?= site_url('warga/pilih_kandidat')?>',
            dataType: 'json',
            data: {
                'nama_kandidat': nama_kandidat,
                'id_user' : id_user
            },
            success:function(result){
                if(result.success == true){
                Swal.fire({
                    title: 'Terimakasih telah berpartisipasi',
                    text: "You won't be able to revert this!",
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oke'
                })
                }
            }
            })
        }
        })
    });
    </script>
</body>

</html>