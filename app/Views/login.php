<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
            <img src="<?= base_url('template') ?> /assets/img/j.png" alt="logo" width="90" class="shadow-light rounded-circle">
            </div>
         
            <div class="card card-primary">
              <div class="card-header"><h3>Masuk</h3></div>
        <?php if (!empty(session()->getFlashdata('message'))): ?>
        <div class="alert alert-info">
        <?= session()->getFlashdata('message') ?>
        </div>
        <?php endif; ?>

              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Masukkan Email!
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Kata Sandi</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Masukkan Kata Sandi!
                    </div>

                  <div class="form-group"><br>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Ingat Saya!</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="login">
                     Masuk
                    </button>
                  </div>
                  <div class="float-right"><br>
                        <a href="auth-forgot-password.html" class="text-small">
                          Lupa Kata Sandi?
                        </a>
                      </div>
                  </div>
                </form>

                <?php 
					if (isset($_POST['login'])){
						include"../koneksi.php";
						$email 	      = $_POST['email'];
						$password 		= $_POST['password'];

						//pengecekan username yang diinput dengan di database
						$cek_email 	= mysqli_query( $conn," Select * FROM user WHERE email ='$email'");
						$row 		= mysqli_num_rows($cek_email);

						if ( $row === 1 ) {
							//jalankan prosedur seleksi password
							$fetch_password = mysqli_fetch_assoc($cek_email); 
							$cek_password 	= $fetch_password['password'];

							//pengecekan inputan password dengan database
							if ( $cek_password <> $password ) {
								echo"<script>alert('Kata Sandi Salah')</script>";
							} else {
								echo"<script>document,location.href='index-isi.html'</script>";
							}

						} else {
							//alert username salah
							echo"<script> alert('Email Tidak Terdaftar!')</script>";
						}
					}
					?>
				
			
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Saya Belum Mempunyai Akun? <a href="<?= base_url('user/register') ?>">Buat Akun</a>
            </div>
            <div class="simple-footer">
            </div>
          </div>
        </div>
      </div>
    </section>