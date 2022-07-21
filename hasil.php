<!DOCTYPE html>
<html>
<head>
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
      <a class="navbar-brand" href="index.php">
        <img src="tx.png"width="50" height="35" class="me-2">
          Tata <strong>Express</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Hasil -->
  <div class="container-fluid pt-5 pb-5">
  	<div class="container text-center">
  	  <h2 class="display-3 text-center" id="kontak">Cek Hasil</h2>
      <hr style="height:5px;border:none;color:#333;background-color: #A5C9CA">
        <table class="table">
		  <thead class="table-dark">
		    <tr>
		    	<th scope="col">No</th>
		    	<th scope="col">Nama</th>
		    	<th scope="col">Alamat</th>
		    	<th scope="col">Jarak</th>
		    	<th scope="col">Hasil</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php
		    	$buka = fopen("user.txt","r");
		    	$hitung = 1;
		    	while ($isi = fgets($buka,100)) {
		    		$pisah = explode("-", $isi);
		    		echo "<tr>";
		    		echo "<th scope = 'row'> $hitung </th>";
		    		echo "<td>$pisah[0]</td>";
		    		echo "<td>$pisah[1]</td>";
		    		echo "<td>$pisah[2]</td>";
		    		echo "<td>$pisah[3]</td>";
		    		echo "<tr>";
		    		$hitung++;
		    	}
		    ?>
		  </tbody>
		</table>
  	</div>
  </div>
</body>
</html>