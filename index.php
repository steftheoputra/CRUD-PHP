<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tugas 5</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   </head>

  <body>

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Steftheoputra</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=crud/index">Mahasiswa</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container">

      <?php
      if(!empty($_GET['page'])){
      include('views/'.$_GET['page'].'.php');
      }else{
      echo '<div class="jumbotron">
        <p>Tugas 5</p>
        Silakan membuat CRUD sederhana untuk database mahasiswa dengan data inputan: 
        NIM, Nama Lengkap, Kota Asal, Tanggal Lahir, Nama Orang Tua, Alamat Orang Tua, Kode Pos, Nomor Telepon, dan Status. 
        Khusus Kode Pos dan Nomor Telepon hanya boleh angka dan Nomor Telepon maksimal 12 angka (silakan diproteksi ya..) 
        Untuk status hanya ada 2 pilihan: TAMA atau WREDA (disarankan menggunakan combo box).
         Semua proses silakan direkam dan unggah/upload ke gdrive ataupun kanal youtube kalian. 
         Apabila diunggah/upload di gdrive, jangan lupa untuk dishare dengan saya ya, jangan diprivate. 
         Link-nya dikumpulkan disini. Untuk durasi tidak ada batasan waktu. 
         Boleh dikerjakan bersama teman, maksimal 3 orang dalam satu kelompok. 
         NIM dan Nama Lengkap anggota kelompok wajib ada dalam video. Selamat mengerjakan... 
        apabila ada kesulitan jangan malu untuk bertanya kepada saya ya. Tetap semangat!
      </div>';
      }
      ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.validate.min.js"></script>
    
  </body>
</html>
