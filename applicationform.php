
  <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/InCareer/images/bg_3.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Lamar Sekarang</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Lamar Sekarang</h1>
          </div>
        </div>
      </div>
    </div>

 <?php
$jobid = $_GET['job'];
$sql = "SELECT *
FROM `tbljob` j
INNER JOIN `tblcompany` c ON j.`COMPANYID` = c.`COMPANYID`
WHERE JOBID LIKE '%$jobid%'
" ;
$mydb->setQuery($sql);
$result = $mydb->loadSingleResult();

?> 
<section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <h2 class="page-header" >Rincian pekerjaan</h2>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
              <form class="form-horizontal span6  wow fadeInDown" action="process.php?action=submitapplication&JOBID=<?php echo $result->JOBID; ?>"  enctype="multipart/form-data"  method="POST" autocomplete="off">

               <?php require_once('applicantform.php') ?>  

            </form>
          </div>
          <div class="col-md-6 d-flex">
                     <div class="panel">
                         <div class="panel-header">
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="<?php echo web_root.'index.php?q=viewjob&search='.$result->JOBID;?>"><?php echo $result->OCCUPATIONTITLE ;?></a> 
                              </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Jumlah Karyawan yang Dibutuhkan : <?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                                <li><i class="fp-ht-food"></i>Gaji : <?php echo number_format($result->SALARIES,2);  ?></li>
                                                <li><i class="fa fa-sun-"></i>Durasi Kerja : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Jenis Kelamin : <?php echo $result->PREFEREDSEX; ?></li>
                                                <li><i class="fp-ht-computer"></i>Sektor Lowongan : <?php echo $result->SECTOR_VACANCY; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Kualifikasi/Pengalaman Kerja :</p>
                                             <ul style="list-style: none;"> 
                                                <li><?php echo $result->QUALIFICATION_WORKEXPERIENCE ;?></li> 
                                            </ul> 
                                        </div>
                                        <div class="col-md-12"> 
                                            <p>Deskripsi Pekerjaan :</p>
                                            <ul style="list-style: none;"> 
                                                 <li><?php echo $result->JOBDESCRIPTION ;?></li> 
                                            </ul> 
                                         </div>
                                        <div class="col-md-12">
                                            <p>Pemberi pekerjaan :  <?php echo  $result->COMPANYNAME; ?></p> 
                                            <p>Lokasi :  <?php echo  $result->COMPANYADDRESS; ?></p>
                                        </div>
                                    </div>
                         </div>
                         <div class="panel-footer">
                         Tanggal Diposting :  <?php echo date_format(date_create($result->DATEPOSTED),'d M, Y'); ?>
                         </div>
                     </div> 

          </div>
        </div>
      </div>
    </section>
