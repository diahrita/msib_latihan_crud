<!DOCTYPE html>

<html lang="en">

<head>
  <link rel="icon" href="asset/logo.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Tambah Data</title>
</head>

<body>

  <div class="container pt-3">
    <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
      <div class="container">
        <div class="container-fluid">
          <h4>
            <center>Tambah Data Mahasiswa</center>
          </h4>
          <hr>
          <form method="post" action="tambah.php" name="tambahData" enctype="multipart/form-data">
            <input type="hidden" name="no">

            <div class="mb-3 row">
              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input required type="number" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input required type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
              <div class="col-sm-10">
                <input required type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="mata_kuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
              <div class="col-sm-10">
                <input required type="text" name="mata_kuliah" class="form-control" id="mata_kuliah" placeholder="Masukkan Mata Kuliah">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="nilai" required>
                  <option selected>Pilih Nilai</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>
            </div>

            <div class="mb-3 row mt-4">
              <div class="col">
                <input class="btn btn-primary mb-3" type="submit" name="tambah" value="Tambah">
                <a href="home.php" type="button" class="btn btn-danger mb-3">Batal</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php
  include 'connection.php';
  if (isset($_POST['tambah'])) {
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $jurusan    = $_POST['jurusan'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai   = $_POST['nilai'];

    // Query untuk insert data ke database
    $result = mysqli_query(
      $mysqli,
      "INSERT INTO mahasiswa (nim, nama, jurusan, mata_kuliah, nilai) 
   VALUES ('$nim','$nama','$jurusan','$mata_kuliah','$nilai')"
    );

    echo "<script>alert('Tambah Data Berhasil!');window.location='home.php';</script>";
  }

  ?>

</body>

</html>