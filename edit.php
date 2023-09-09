<?php
include_once 'connection.php';
if (isset($_POST['update'])) {
  $id         = $_POST['id'];
  $nim        = $_POST['nim'];
  $nama       = $_POST['nama'];
  $jurusan    = $_POST['jurusan'];
  $mata_kuliah = $_POST['mata_kuliah'];
  $nilai      = $_POST['nilai'];


  $query = mysqli_query(
    $mysqli,
    "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', mata_kuliah='$mata_kuliah', nilai='$nilai' WHERE id='$id' "
  );

  echo "<script>alert('Edit data berhasil!');window.location='home.php';</script>";
}

$id = $_GET['id'];

$query = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id='$id'");

while ($data = mysqli_fetch_array($query)) {
  $nim        = $data['nim'];
  $nama       = $data['nama'];
  $jurusan    = $data['jurusan'];
  $mata_kuliah = $data['mata_kuliah'];
  $nilai      = $data['nilai'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="asset/logo.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>Edit Data</title>
</head>

<body>
  <div class="container pt-3">
    <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
      <div class="container">
        <div class="container-fluid">
          <h4>
            <center>Edit Data Mahasiswa</center>
          </h4>
          <hr>
          <form method="post" action="edit.php" name="editData" enctype="multipart/form-data">
            <input type="hidden" name="no">

            <div class="mb-3 row">
              <label for="nim" class="col-sm-2 col-form-label">NIM</label>
              <div class="col-sm-10">
                <input required type="number" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM" value="<?php echo $nim  ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input required type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" value="<?php echo $nama  ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
              <div class="col-sm-10">
                <input required type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" value="<?php echo $jurusan  ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="mata_kuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
              <div class="col-sm-10">
                <input required type="text" name="mata_kuliah" class="form-control" id="mata_kuliah" placeholder="Masukkan Mata Kuliah" value="<?php echo $mata_kuliah  ?>">
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" name="nilai" value="<?= $nilai ?>">
                  <option selected>Pilih Nilai</option>
                  <option <?= ($nilai == 'A') ? "selected" : "" ?>>A</option>
                  <option <?= ($nilai == 'B') ? "selected" : "" ?>>B</option>
                  <option <?= ($nilai == 'C') ? "selected" : "" ?>>C</option>
                  <option <?= ($nilai == 'D') ? "selected" : "" ?>>D</option>
                  <option <?= ($nilai == 'E') ? "selected" : "" ?>>E</option>
                </select>
              </div>
            </div>

            <div class="mb-3 row mt-4">
              <div class="col">
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <input class="btn btn-primary mb-3" type="submit" name="update" value="Edit">
                <a href="home.php" type="button" class="btn btn-danger mb-3">Batal</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>