
<!-- <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">NationalID:</label>

    <div class="col-md-8"> 
       <input class="form-control " id="NATIONALID" name="NATIONALID" placeholder=
          "00-000000000000" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" >
    </div>
  </div>
</div> -->
<style type="text/css">
.form-control-2 {
  display: inline-block;
  width: 25%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
   
</style>

   <div class="col-md-12">
                   <div class="row">
                    <form class="form-horizontal span6 " action="process.php?action=submitapplication&JOBID=<?php echo $result->JOBID; ?>"  enctype="multipart/form-data"  method="POST">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-header " >
                                        <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Lampirkan Resume Anda di sini.
                                            <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                                        </div>
                                    </div>
                                    <div class="panel-body"> 
                                        <label class="col-md-12" for="picture" style="padding: 0;margin: 0;">Berkas Lampiran :</label> 
                                        <div class="col-md-10" style="padding: 0;margin: 0;">
                                            <input id="picture" name="picture" type="file" placeholder="Pilih File">
                                            <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 
                                        </div> 
                                    </div>
                                </div> 
                            </div> 
                        </div>
                       <div class="form-group mt-4">
                        <div class="col-md-12"> 
                          <a href="index.php" class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Kembali</strong></a> 
                             <button class="btn btn-primary btn-md pull-right" name="submit" type="submit" >Submit <span class="fa fa-arrow-right"></span></button>
                        </div>
                       </div> 
                    </form>     
                </div>
            </div> 