 
     <!-- Modal -->
          <div class="modal fade overflow-scroll" id="regisModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">

                          <h4>Register</h4>
                          
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>
 
                </div>

                <!-- <form action="process.php?action=login" enctype="multipart/form-data" method="post"> -->
                  <div class="modal-body hold-transition login-page">
                    <div id="loginerrormessage"></div>
                    <div class="login-box"> 
                        <div class="login-box-body" style="border: solid 1px #ddd;padding: 35px;min-height: 350px;"> 
                          <form action="process.php?action=register" method="post" autocomplete="off">
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Nama Depan" name="FNAME" id="FNAME">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Nama Tengah" name="MNAME" id="MNAME">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Nama Belakang" name="LNAME" id="LNAME">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="NIK" name="national_id" id="national_id">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Alamat" name="ADDRESS" id="ADDRESS">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group">   
                                Jenis Kelamin : 
                                <input id="optionsRadios2" name="optionsRadios" type="radio" value="Male"> Laki-Laki   
                                <input id="optionsRadios1" name="optionsRadios" type="radio" value="Female">Perempuan
                            </div>
							<div class="form-group">
							    <select class="form-control" name="CIVILSTATUS" id="CIVILSTATUS">
								    <option value="none" >Status Kewarganegaraan</option>
								    <option value="Single">Lajang</option>
								    <option value="Married">Menikah</option>
								    <option value="Widow" >Janda/Duda</option> 
							    </select> 
							</div>
                            <div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Tempat Lahir" name="BIRTHPLACE" id="BIRTHPLACE">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
                            <div class="form-group has-feedback">
                              <input type="date" class="form-control" placeholder="Tanggal Lahir" name="birth_date" id="birth_date">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
							<div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Nomor HP" name="TELNO" id="TELNO">
                              <span class="fa fa-lock form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
							<div class="form-group">
							    <select class="form-control" name="DEGREE" id="DEGREE">
								    <option value="none" >Pendidikan Terakhir</option>
								    <option value="Single">SMA/SMK Sejerajat</option>
								    <option value="Married">S1/D4</option>
								    <option value="Widow" >S2</option>
							    </select> 
							</div>
							<div class="form-group has-feedback">
                              <input type="email" class="form-control" placeholder="Alamat Email" name="EMAILADDRESS" id="EMAILADDRESS">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
							<div class="form-group has-feedback">
                              <input type="text" class="form-control" placeholder="Alamat Email" name="USERNAME" id="USERNAME">
                              <span class="fa fa-user form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
							<div class="form-group has-feedback">
                              <input type="password" class="form-control" placeholder="Password" name="PASS" id="PASS">
                              <span class="fa fa-lock form-control-feedback" style="margin-top: -22px;"></span>
                            </div>
							<div class="modal-footer">
                                <button class="btn btn-default" data-dismiss="modal">Close</button> 
					            <button class="btn btn-primary" name="btnRegister" id="btnRegister">Register</button>
                            </div>
                          </form>
                          <div>
                                    <p>Sudah punya akun? <a href="" data-dismiss="modal" data-target="#loginModal" data-toggle="modal" href="">Login</a></p>
                                  </div> 
                        </div>
                        <!-- /.login-box-body -->
                      </div>
                  </div>
                <!-- </form> -->
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->