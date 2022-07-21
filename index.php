<?php

  $hasil = 0;
  //Fungsi untuk mencari nilia hasil , hasil = inputan * 5000
  function cari($x)
  {
    return 5000 * $x;
  }
  //Fungsi untuk mencetak/menulis ke txt
  function cetak($x)
  {
    $nama = $x["nama"];
    $alamat = $x["alamat"];
    $input = $x['input'];
    $hasil = cari($input) . "\n";
    $tulis = $nama."-".$alamat."-".$input . "-" . $hasil;
    $buka = fopen('user.txt', 'a+');
    fwrite($buka, $tulis);
    fclose($buka);
  }

  $hasil = 0;
  if (isset($_POST['submit'])) {
    echo "<script>alert('TERIMAKASIH!! inputan anda sudah masuk')
    document.location.href = '#biaya'</script>";
    $hasil = cari($_POST['input']);
    cetak($_POST);
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">

  <title>TataExpress</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #002C3Dff;">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="tx.png"width="50" height="35" class="me-2">
          Tata <strong>Express</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto my-4 my-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#tentang">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#biaya">Biaya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#kontak">Kontak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="hasil.php">Cek Hasil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- Text -->
  <div class="container-fluid banner">
    <div class="container text-center">
      <h3 class="display-5 vibe" id="write"></h3>

<!-- javaScript -->
      <script type="text/javascript">
        var i = 0;
        var text = "S E L A M A T - D A T A N G";
        function typing(){
          if(i < text.length){
            document.getElementById("write").innerHTML += text.charAt(i);
            i++;
            setTimeout(typing,50);
          }
        }
        typing();
       </script>
<!-- Tutup js -->

      <h2 class="display-7">Layanan Jasa Pengiriman</h2>
    </div>
    <div class="container text-center">
      <br><br><br><br>
      <h6 class="jarak">Apakah anda ingin bayar jasa pengiriman?</h6>
      <a href="#biaya">
        <button type="button" class="btn btn-info" >
          Bayar
        </button>
      </a>
    </div>
  </div>

<!-- Layanan -->
  <div class="container-fluid layanan pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="layanan">LAYANAN</h2>
      <hr style="height:5px;border:none;color:#333;background-color: #395B64">
      <p>Tata <strong>Express</strong> melayani jasa pengiriman barang antar daerah</p>
      <div class="row pt-4">
        <div class="col-md-4">
            <span class="circle"><i class="fas fa-home fa-5x"></i></span>
          <h3 class="mt-3">Pick Up</h3>
          <p>Kirim barang ga perlu repot keluar rumah. Dengan jasa penjemputan barang special dari Tata <strong>Express</strong> Anda telp, kami datang</p>
        </div>

        <div class="col-md-4">
        <span class="circle"><i class="fas fa-archive fa-5x"></i></span>
          <h3 class="mt-3">Packing</h3>
          <p>Kadang bingung karena tidak bisa melakukan packing? kini tidak perlu khawatir lagi karena kami siap melakukannya untuk anda</p>
        </div>

        <div class="col-md-4">
        <span class="circle"><i class="fas fa-ship fa-5x"></i></span>
          <h3 class="mt-3">Pengirim Via Laut</h3>
          <p>ingin pindahan atau kirim barang yang tidak butuh cepat? kirim via laut aja. karena biaya jauh lebih murah</p>
        </div>
      </div>
    </div>
  </div>

<!-- about -->
  <div class="container-fluid tentang pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="tentang">ABOUT</h2>
      <hr style="height:5px;border:none;color:#333;background-color: #A5C9CA">
      <p class="text-center">Tata <strong>Express</strong> merupakan perusahaan jasa pengiriman barang yang berada di Yogyakarta yang berpengalaman sejak tahun 2022 dalam menangani pengiriman barang.<strong>Tata Express</strong> menawarkan jasa layanan untuk pengirim barang via laut.</p>
      <div class="clearfix pt-5">
        <img src="about.jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
        <p>Berikut beberapa layanan yang kami sediakan buat anda pelanggan setia kami :</p>
        <li>Jasa Pengiriman Barang via Kargo</li>
        <li>Jasa Pengiriman Barang Pindahan</li>
        <li>Jasa Pengiriman Tumbuhan / Tanaman</li>
      </div>
    </div>
  </div>

<!-- biaya -->
  <div class="container-fluid biaya pt-5 pb-5">
    <div class="container text-center">
      <h2 class="display-3" id="biaya">CHARGE</h2>
      <hr style="height:5px;border:none;color:#333;background-color: #395B64">
      <p>Tata <strong>Express</strong> akan menghitung biaya yang dikeluarkan dalam kilometer/km,
      dengan cara menginputkan jarak (Km) dan otomatis akan menghasilkan biaya pengiriman yang diperoleh!</p>
      <div class="row pt-4 gx-4 gy-4 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
          <form method="post">
  <!-- input -->
          <div class="mb-1">
            <label for="formGroupExampleInput" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?php if(isset($_POST["submit"])) echo $_POST["nama"] ?>" />
          </div>
          <div class="mb-1">
            <label for="formGroupExampleInput2" class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php if(isset($_POST["submit"])) echo $_POST["alamat"] ?>" />
          </div>
  <!-- close input -->
            <label class="form-label">Masukkan jarak (Dalam KM)</label>
            <input type="number" name="input" class="form-control" value="<?php if(isset($_POST["submit"])) echo $_POST["input"] ?>" />
            <br>
            <button type="submit" name="submit" id="submit" class="btn btn-light">Hitung</button>
          </form>
          <label class="form-label">Biaya Pengiriman : Rp </label><span id="hasil"><?= $hasil ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- kontak -->
  <div class="container-fluid pt-5 pb-5 kontak">
    <div class="container">
      <h2 class="display-3 text-center" id="kontak">CONTACT</h2>
      <hr style="height:5px;border:none;color:#333;background-color: #A5C9CA">
      <p class="text-center">Jika Anda Kesulitan dalam melakukan pembayaran, silahkan kontak kami!</p>
      <div class="row pb-3 justify-content-center ">
        <div class="col-md-1 p text-center">
          <div class="mb-3 bd-highlight">
              <a href="https://www.instagram.com/alyssatata/" target="_blank"><i class="fab fa-instagram fa-5x"></i></a>
            </div>
            <div class="mb-3 bd-highlightt">
              <a href="https://www.twitter.com/imheliums/" target="_blank"><i class="fab fa-twitter fa-5x"></i></a>
            </div>
            <div class="mb-3 bd-highlight">
              <a href="https://github.com/TataAlyssa" target="_blank"><i class="fab fa-github fa-5x"></i></a>
            </div>
        </div>
        <div class="col-md-7">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama">
          <input class="form-control form-control-lg mb-3" type="text" placeholder="Email">
          <input class="form-control form-control-lg" type="text" placeholder="No. Phone">
          <textarea class="form-control form-control-lg mt-3 mb-3" rows="2"></textarea>
          <button type="button" class="btn btn-lg">Kirim Pesan</button>
        </div>
      </div>
    </div>
  </div>
</html>
