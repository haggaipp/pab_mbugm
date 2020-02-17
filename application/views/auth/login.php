<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h2 class="text-gray-900 mb-4"><strong>[-- LOGIN PAGE --]</strong></h2>
                  </div>
                  <?= $this->session->flashdata('message');?>
                  <form class="user" name="form1" action="<?= base_url('auth');?>" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" value="<?= set_value('username');?>" placeholder="Username">
                      <?= form_error('username','<p class="text-danger pl-3 small">','</p>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                      <?= form_error('password','<p class="text-danger pl-3 small">','</p>');?>  
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login >>">
                  </form>
                  <hr>
                  <div class="text-center">
                    <div class="small">Ada pertanyaan?
                      <a href="register.html">Hubungi Kami!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>