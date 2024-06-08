<!DOCTYPE html>
<html lang="en">
  <head>
    <title>InCareer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="<?php echo web_root; ?>plugins/InCareer/images/IN_CAREER.png">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/aos.css">

    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo web_root; ?>plugins/InCareer/css/style.css"> 
    <style type="text/css">
      /*  Header
==================================== */

.topbar{
  background-color: #37393c;
  padding: 5px 0;
  /* color:#fff; */
  font-size: 11px !important;
}
/*.topbar .container .row {
    margin: 0;
  padding:0;
}
.topbar .container .row .col-md-12 { 
  padding:0;
}
.topbar p{
  margin:0;
  display:inline-block;
  font-size: 11px;
  color: #f1f6ff;
}
.topbar p > i{
  margin-right:5px;
  color: #00bcd4;
}
.topbar p:last-child{
  text-align:right;
} 
 */

    </style>

     <?php if (isset($_SESSION['APPLICANTID'])) { ?> 
                <?php

                    $sql = "SELECT count(*) as 'COUNTNOTIF' FROM `tbljob` ORDER BY `DATEPOSTED` DESC";
                    $mydb->setQuery($sql);
                    $showNotif = $mydb->loadSingleResult();
                    $notif =isset($showNotif->COUNTNOTIF) ? $showNotif->COUNTNOTIF : 0;


                    $applicant = new Applicants();
                    $appl  = $applicant->single_applicant($_SESSION['APPLICANTID']);

                    $sql ="SELECT count(*) as 'COUNT' FROM `tbljobregistration` WHERE `PENDINGAPPLICATION`=0 AND `HVIEW`=0 AND `APPLICANTID`='{$appl->APPLICANTID}'";
                    $mydb->setQuery($sql);
                    $showMsg = $mydb->loadSingleResult();
                    $msg =isset($showMsg->COUNT) ? $showMsg->COUNT : 0;

                   

                   ?> 
          <?php } ?>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="<?php echo web_root; ?>">InCareer</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php  if(!isset($_GET['q'])) {  echo 'active';}  ?>"><a href="<?php echo web_root; ?>" class="nav-link">Beranda</a></li> 
	          <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>  -->
            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='company'){ echo 'active'; }else{ echo ''; }}  ?>"><a class="nav-link"  href="<?php echo web_root; ?>index.php?q=company">Perusahaan</a></li>
            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='hiring'){ echo 'active'; }else{ echo ''; }} ?>"><a  class="nav-link" href="<?php echo web_root; ?>index.php?q=hiring">Lamar Sekarang</a></li>
            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='About'){ echo 'active'; }else{ echo ''; }}  ?>"><a  class="nav-link" href="<?php echo web_root; ?>index.php?q=About">Tentang Kami</a></li>
            <li class="nav-item <?php  if(isset($_GET['q'])) { if($_GET['q']=='Contact'){ echo 'active'; }else{ echo ''; }}  ?>"><a  class="nav-link" href="<?php echo web_root; ?>index.php?q=Contact">Kontak</a></li>
            <?php if (!isset($_SESSION['APPLICANTID'])) { ?>
             <li   class="nav-item login"><a class="nav-link" data-target="#loginModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Login </a>
             </li>
             <li   class="nav-item register"><a class="nav-link" data-target="#regisModal" data-toggle="modal" href=""> <i class="fa fa-lock"></i> Register </a>
             </li>
             <li class="nav-item cta mr-md-2"><a href="<?php echo web_root; ?>company-admin/" class="nav-link">Posting Pekerjaan</a></li>
             <?php }else{ ?>

              <li class="nav-item"><a class="nav-link" href="<?php echo web_root.'applicant/';?>"><i class="fa fa-user"></i> Apa Kabar, <?php echo $appl->FNAME. ' '.$appl->MNAME.' '.$appl->LNAME ;?></a></li>

              <li class="nav-item"><a class="nav-link" href="<?php echo web_root.'logout.php';?>"><i class="fa fa-user"></i> Logout</a></li>
             <?php } ?> 
	          <li class="nav-item cta cta-colored"><a href="<?php echo web_root; ?>" class="nav-link">Cari Pekerjaan</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

      <?php
    if (!isset($_SESSION['APPLICANTID'])) { 
      include("login.php");
      include("register.php");
    }
  ?>
    <?php require_once($content);?>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Tentang Kami</h2>
              <p>InCareer menawarkan ribuan peluang karir di berbagai industri dengan fitur pencarian canggih. Temukan pekerjaan sesuai keahlian dan preferensi Anda, serta layanan untuk perusahaan memposting lowongan dan mencari kandidat yang cocok. Bergabunglah dengan komunitas kami hari ini.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Perusahaan</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cara Kerja</a></li>
                <li><a href="#" class="py-2 d-block">Postingan Lowongan</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Pelamar</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cara Kerja</a></li>
                <li><a href="#" class="py-2 d-block">Bagikan Keahlian Anda</a></li>
                <li><a href="#" class="py-2 d-block">Pencarian Pekerjaan</a></li>
                </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Butuh Bantuan?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Ketintang Wiyata, Ketintang, Gayungan Surabaya</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(031)5558889</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">incareer@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by InCareer</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/popper.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.stellar.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/owl.carousel.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/aos.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/google-map.js"></script>
  <script src="<?php echo web_root; ?>plugins/InCareer/js/main.js"></script>
    <script type="text/javascript">
   
     $(function () {
    $("#dash-table").DataTable();
    $('#dash-table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });


     $("#btnlogin").click(function(){
        var username = document.getElementById("user_email");
        var pass = document.getElementById("user_pass");

        // alert(username.value)
        // alert(pass.value)
        if(username.value=="" && pass.value==""){   
          $('#loginerrormessage').fadeOut(); 
                $('#loginerrormessage').fadeIn();  
                $('#loginerrormessage').css({ 
                        "background" :"red",
                        "color"      : "#fff",
                        "padding"    : "5px;"
                    }); 
          $("#loginerrormessage").html("Invalid Username and Password!");
          //  $("#loginerrormessage").css(function(){ 
          //   "background-color" : "red";
          // });
        }else{

          $.ajax({    //create an ajax request to load_page.php
              type:"POST",  
              url: "process.php?action=login",    
              dataType: "text",  //expect html to be returned  
              data:{USERNAME:username.value,PASS:pass.value},               
              success: function(data){   
                // alert(data);
                $('#loginerrormessage').fadeOut(); 
                $('#loginerrormessage').fadeIn();  
                $('#loginerrormessage').css({ 
                        "background" :"red",
                        "color"      : "#fff",
                        "padding"    : "5px;"
                    }); 
               $('#loginerrormessage').html(data);   
              } 
              }); 
          }
        });


$('input[data-mask]').each(function() {
  var input = $(this);
  input.setMask(input.data('mask'));
});


$('#BIRTHDATE').inputmask({
  mask: "1/2/y",
  placeholder: "dd/mm/yyyy",
  alias: "date",
  hourFormat: "24"
});
$('#HIREDDATE').inputmask({
  mask: "1/2/y",
  placeholder: "dd/mm/yyyy",
  alias: "date",
  hourFormat: "24"
});

$('.date_picker').datetimepicker({
  format: 'dd/mm/yyyy',
  startDate : '01/01/1950', 
  language:  'en',
  weekStart: 1,
  todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1, 
  startView: 2,
  minView: 2,
  forceParse: 0 

});
 </script>
  </body>
</html>