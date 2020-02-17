<!-- Begin Page Content -->
<div class="container-fluid text-center">
	<h2><strong>Scan QR Code</strong></h2>

  <p>⌛ Loading camera... Please Wait!"</p>
  <video id="preview"></video>

<script type="text/javascript">
document.addEventListener("DOMContentLoaded", event => {
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });
  Instascan.Camera.getCameras().then(cameras => {
    scanner.camera = cameras[cameras.length - 1];
    scanner.start();
  }).catch(e => console.error(e));

  scanner.addListener('scan', function(content){
      window.open("http://localhost/pab-mbugm.com/menu/view?key=" + content,"_blank");
    });

});
  
</script>
</div>