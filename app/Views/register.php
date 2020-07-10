<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url('template') ?> /assets/img/j.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi Email</h4></div>


              <div class="card-body">
                <form action="<?= base_url('user/regis') ?>"
                methot="POST">

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="firstname">Nama Depan</label>
                      <input id="firstname" type="text" class="form-control" name="firstname" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="lastname">Nama Belakang</label>
                      <input id="lastname" type="text" class="form-control" name="lastname">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Kata Sandi</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Konfirmasi Kata Sandi</label>
                      <input id="password" type="password" class="form-control" name="password-confirm">
                    </div>
                  </div>

                 

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">Saya Setuju Dengan Syarat dan Ketentuan yang berlaku!</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Registrasi
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>