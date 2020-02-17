  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=800, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SELAMAT!</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/');?>css/sb-admin-2.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-6 my-4">
          <div class="card shadow-lg">
            <img class="card-img-top" src="<?= base_url('assets/img/wallpaper.jpg');?>" alt="Card image cap">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4 mt-3 text-center">
                  <img style="width: 8rem; " src="<?= base_url('qr.png');?>" alt="Card image cap">
                </div>
                <div class="col-sm-8">
                  <h2 class="mb-0 pl-1"><b>SELAMAT!</b></h1>
                  <h6 class="mb-3 pl-1">Kamu telah berhasil mendaftar.</h6>
                  <table name="identitas" class="table table-sm">
                    <tr>
                      <td align="right">Nama Lengkap</td>
                      <td><?= $nama_lengkap;?></td>
                    </tr>
                    <tr>
                      <td align="right">Nama Panggilan</td>
                      <td><?= $nama_panggilan;?></td>
                    </tr>
                    <tr>
                      <td align="right">NIM</td>
                      <td><?= $nim;?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-5 text-right mt-4 pt-1">
                  <strong class="mb-0"> TOTAL PEMBAYARAN*</strong> <br><h3>IDR 25.000</h3></strong>
                </div>
                <div class="col-7 text-left mt-4">
                  <p> Mohon untuk melaksanakan ke tahapan selanjutnya yaitu: Pembayaran, Daftar Ulang, dan Placement Test.</p>
                </div>
              </div>
              <div class="col text-center mt-4">
                <hr>
                <small class="mb-0"> *pembayaran dapat dilakukan di Stand Booth Marching Band UGM di acara Gelanggang Expo pada tanggal .. Agustus 2019 s/d .. Agustus 2019. Atau bisa langsung ke Sekretariat Marching Band UGM di Stadion Pancasila UGM </p>
              </div>
            </div>
          </div>

            
          </div>
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/');?>js/sb-admin-2.min.js"></script>

  </body>

  </html>
