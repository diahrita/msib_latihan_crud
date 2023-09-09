<?php
include 'connection.php';

$result = mysqli_query($mysqli, 'SELECT * FROM mahasiswa');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <title>DATA MAHASISWA</title>
</head>

<body>
  <div class="container pt-4 ">
    <div class="card mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
      <div class="container">
        <div class="container-fluid">
          <figure>
            <h2 class="mt-3">Data Mahasiswa</h2>
          </figure>
          <a href="tambah.php" type="button" class="btn btn-primary mb-3">Tambah Data</a>
          <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NIM</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jurusan</th>
                  <th>Mata Kuliah</th>
                  <th>Nilai</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($data = mysqli_fetch_array($result)) {
                ?>
                  <tr>
                    <td>
                      <?php echo $data['id']; ?>
                    <td>
                      <?php echo $data['nim']; ?>
                    <td>
                      <?php echo $data['nama']; ?>
                    <td>
                      <?php echo $data['jurusan']; ?>
                    <td>
                      <?php echo $data['mata_kuliah']; ?>
                    <td>
                      <?php echo $data['nilai']; ?>
                    <td>
                      <a href="edit.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-info btn-sm">Edit</a>
                      <a href="delete.php?id=<?php echo $data['id']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">Delete</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>