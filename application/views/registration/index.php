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
                    <h1 class="h4 text-gray-900"><strong>Form Pendaftaran</strong></h1>
                    <p class="small mb-4">*deskripsi form pendaftaran*</p>
                  </div>
                  <?= $this->session->flashdata('message');?>
                  <form class="user" name="form1" action="<?= base_url('registration');?>" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="namaLengkap" placeholder="Nama Lengkap">
                      <?= form_error('namaLengkap','<p class="text-danger pl-3 small">','</p>');?>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="namaPanggilan" placeholder="Nama Panggilan">
                      <?= form_error('namaPanggilan','<p class="text-danger pl-3 small">','</p>');?>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nim" placeholder="Nomor Induk Mahasiswa (NIM)">
                      <?= form_error('nim','<p class="text-danger pl-3 small">','</p>');?>  
                    </div>
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Selanjutnya >>">
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