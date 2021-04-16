<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>
          ISERL
     </title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <!-- CSS Files -->
     <link href="<?php echo base_url() ?>assets/css/material-kit.css?v=2.2.0" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="<?php echo base_url() ?>assets/demo/demo.css" rel="stylesheet" />
     <link href="<?php echo base_url() ?>assets/demo/vertical-nav.css" rel="stylesheet" />
     <link href="<?php echo base_url() ?>assets/css/app.css?v=2.2.0" rel="stylesheet" />
</head>

<body class="">
     <style>
          @media(max-width: 375px) {
               .sub-container {
                    padding-top: 3em !important;
               }
          }

          @media(min-width: 426px) {
               .container-fluid {
                    padding-left: 0px;
               }
          }

          @media (max-width: 768px) {
               .d-md-block {
                    display: none !important;
               }
          }

          .container {
               padding-top: 0em;
          }

          @media(max-width: 425px) {
               .navbar-jangmai {
                    display: none !important;
               }

               .container-jangmai {
                    padding-right: 15px !important;
                    padding-left: 15px !important;
               }
          }

          @media(min-width: 426px) {
               .container-jangmai {
                    padding-top: 3em !important;
                    padding-right: 15px !important;
                    padding-left: 15px !important;
               }
          }

          @media(max-width: 375px) {
               .container-jangmai {
                    padding-top: 4em !important;
               }
          }

          #zoom-modal {
               display: none;
               position: fixed;
               z-index: 2000;
               padding-top: 100px;
               left: 0;
               top: 0;
               width: 100%;
               height: 100%;
               overflow: auto;
               background-color: rgb(0, 0, 0);
               background-color: rgba(0, 0, 0, 0.9);
          }

          #zoom-modal .modal-content {
               margin: auto;
               display: block;
               width: 80%;
               height: 80%;
               object-fit: contain;
               max-width: 600px;
          }

          #zoom-modal .modal-content {
               -webkit-animation-name: zoom;
               -webkit-animation-duration: 0.6s;
               animation-name: zoom;
               animation-duration: 0.6s;
          }

          @-webkit-keyframes zoom {
               from {
                    -webkit-transform: scale(0)
               }

               to {
                    -webkit-transform: scale(1)
               }
          }

          @keyframes zoom {
               from {
                    transform: scale(0)
               }

               to {
                    transform: scale(1)
               }
          }

          .zoom-close {
               position: absolute;
               top: 15px;
               right: 35px;
               color: #f1f1f1;
               font-size: 100px;
               font-weight: bold;
               transition: 0.3s;
          }
     </style>
     <header class="row">
          <nav class="navbar fixed-top navbar-expand-lg" id="sectionsNav">
               <div class="container">
                    <div class="navbar-translate">
                         <a class="navbar-brand" onclick="window.location='http://iserl.buu.ac.th/'">
                              <!-- <div class="logo-big"> -->
                              <img src="http://iserl.buu.ac.th/wp-content/uploads/2016/06/logo_iserl-48x48.png" class="img-fluid">
                              <!-- </div> -->
                         </a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="navbar-toggler-icon"></span>
                              <span class="navbar-toggler-icon"></span>
                              <span class="navbar-toggler-icon"></span>
                         </button>
                    </div>
               </div>
          </nav>
     </header>
     <div class="main main-raised">
          <div class="container-fluid" style="background-color: white;">
               <div class="row">
                    <div class="col-md-6 col-sm-12 ml-auto mr-auto sub-container" style="padding-right: 0px;padding-left: 0px;">
                         <div class="section-description section text-center">
                              <h1 class="title"><b>ISERL</b></h1>
                              <p style='color:#585858; font-size: 16px;'>ห้องปฏิบัติการวิจัยวิศวกรรมระบบสารสนเทศ</p>
                         </div>
                         <form id="frmLogin" method="post" action="<?php echo base_url('index.php/auth/check_login') ?>">
                              <div class="col-md-12 ml-auto mr-auto">
                                   <div class="form-group label-floating">
                                        <label for="exampleInput1" class="control-label" style='left:0px;'>ชื่อผู้ใช้งาน</label>
                                        <input name="username" type="text" class="form-control">
                                        <div class="icon-valid"></div>
                                        <span class="text-bmd-help form-text text-muted">กรุณากรอกชื่อผู้ใช้งาน</span>
                                   </div>
                                   <br>
                                   <div class="form-group label-floating">
                                        <label for="exampleInput2" class="control-label" style='left:0px;'>รหัสผ่าน</label>
                                        <input name="password" type="password" class="form-control">
                                        <div class="icon-valid"></div>
                                        <span class="text-bmd-help form-text text-muted">กรุณากรอกรหัสผ่าน</span>
                                   </div>
                                   <div class="form-group" style='margin-top: 30px;'>
                                        <div class="row">
                                             <div class="col-md-6 col-sm-12 ml-auto mr-auto" style='text-align:center;'>
                                                  <button type="submit" style="width: 100%" class="btn btn-tumblr btn-lg">เข้าสู่ระบบ</button>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>

     <!--   Core JS Files   -->
     <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>assets/js/core/popper.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>assets/js/plugins/moment.min.js"></script>
     <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
     <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
     <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
     <script src="<?php echo base_url() ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
     <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
     <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
     <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
     <script src="<?php echo base_url() ?>assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
     <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
     <script src="<?php echo base_url() ?>assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
     <!--	Plugin for Small Gallery in Product Page -->
     <script src="<?php echo base_url() ?>assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
     <!-- Plugins for presentation and navigation  -->
     <script src="<?php echo base_url() ?>assets/demo/modernizr.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>assets/demo/vertical-nav.js" type="text/javascript"></script>
     <!-- Place this tag in your head or just before your close body tag. -->
     <script async defer src="https://buttons.github.io/buttons.js"></script>
     <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
     <script src="<?php echo base_url() ?>assets/demo/demo.js" type="text/javascript"></script>
     <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
     <script src="<?php echo base_url() ?>assets/js/material-kit.js?v=2.2.0" type="text/javascript"></script>
</body>

</html>