<div class="modal fade" id="modal-tambah">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width: 90%">
          <div class="modal-header" style="border-bottom: 1px solid rgb(80, 80, 80)">
            <div class="col-12">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h3 class="text-center font-weight-bold" style="text-align: center">
                Buat Postingan
              </h3>
            </div>
          </div>
          <div class="modal-body">
            <div class="col-12 row">
              <div class="col-1">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"
                  style="width: 3.7rem" />
              </div>
              <div class="col-11">
                <div class="row container">
                  <div class="col-12">
                    <p class="font-weight-bold" style="font-size: 1.2rem">
                      Nama saya
                    </p>
                  </div>

                  <div class="col-12 row" style="margin-top: -21px">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons" style="
                          max-height: 37px;
                          margin-right: 10px;
                          margin-left: 9px;
                        ">
                      <label class="btn btn-light btn-outline-dark active" style="border-radius: 6px 0px 0px 6px">
                        <input type="radio" name="options" id="option_a1" autocomplete="off" checked />
                        Ask
                      </label>
                      <label class="btn btn-light btn-outline-dark" style="border-radius: 0px 6px 6px 0px">
                        <input type="radio" name="options" id="option_a3" autocomplete="off" />
                        Share
                      </label>
                    </div>

                    <div class="form-group">
                      <select class="form-control select2" style="
                            border-radius: 6px;
                            width: 300px;
                            margin-right: 10px;
                            border-color: black;
                          ">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                      </select>
                    </div>

                    <div class="btn-group btn-group-toggle" data-toggle="buttons" style="max-height: 37px">
                      <label class="btn btn-light btn-outline-dark active" style="
                            border-radius: 8px 0px 0px 8px;
                            font-size: 20px;
                          ">
                        <input type="radio" name="options" id="option_a1" autocomplete="off" checked /><i
                          class="fas fa-eye-slash"></i>
                      </label>
                      <label class="btn btn-light btn-outline-dark" style="
                            border-radius: 0px 8px 8px 0px;
                            font-size: 20px;
                          ">
                        <input type="radio" name="options" id="option_a3" autocomplete="off" />
                        <i class="fas fa-eye"></i>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="container">
              <input type="email" class="form-control" id="exampleInputEmail1"
                placeholder='Awali judul unggahan anda dengan "Apa", "Bagaimana", "Mengapa". dll' />
              <br />
              <textarea id="summernote">
                Deskripsikan <em>pertanyaan</em> <u>atau</u> <strong>cerita </strong>anda disini....
              </textarea>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary">
              Save changes
            </button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="modal-edit-profil">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width: 90%">
          <div class="modal-header" style="border-bottom: 1px solid rgb(80, 80, 80)">
            <div class="col-12">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h3 class="text-center font-weight-bold" style="text-align: center">
                Edit Profil
              </h3>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">

              <div class="col-12">
                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Foto Profil
                  </p>
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                      alt="User profile picture" style="width: 12rem ;">
                  </div>
                </div>

                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Foto Sampul
                  </p>
                  <div class="text-center"> 
                      <div class="col-12">
                        <img src="../../dist/img/photo1.png" alt="Responsive image" style=" 
                      width: 100%;
                      object-fit: cover;
                      height: 250px;
                      
                    " /> 
                      <div class="col-1"></div>
                    </div>
                  </div>
                </div>
                <br>

                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Foto Profil <br>
                    <span class="font-weight-light" style="font-size:1rem ;">(Ditampilkan disetiap unggahan)</span>
                  </p> 
                  <div class="col-1"></div>
                  <div class="col-10">
                    <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">  </div>
                </div>
                <br>

                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Deskripsi <br>
                    <span class="font-weight-light" style="font-size:1rem ;">(Hanya tampil diprofil)</span>
                  </p> 
                  <div class="col-1"></div>
                  <div class="col-10">
                    <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">  </div>
                </div>
                <br>

                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Pekerjaan <br> 
                  </p> 
                  <div class="col-1"></div>
                  <div class="col-10">
                    <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">  </div>
                </div>
                <br>

                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Edukasi <br>
                    <span class="font-weight-light" style="font-size:1rem ;">(saat ini atau jenjang terakhir)</span>
                  </p> 
                  <div class="col-1"></div>
                  <div class="col-10">
                    <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">  </div>
                </div>
                <br>

                <div class="col-12">
                  <p class="font-weight-bold" style="font-size: 1.2rem">
                    Lokasi <br> 
                  </p> 
                  <div class="col-1"></div>
                  <div class="col-10">
                    <input type="text" id="inputClientCompany" class="form-control" value="Deveint Inc">  </div>
                </div>
                <br>


              </div>
            </div>
          </div> 
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Tutup
          </button>
          <button type="button" class="btn btn-primary">
            Simpan
          </button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>

    </div>