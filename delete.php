<?php
include_once 'connection.php';
$id = $_GET['id'];

$delete = mysqli_query($mysqli, "DELETE FROM mahasiswa WHERE id='$id'");
echo "
    <script>
    alert('Data Berhasil Dihapus!');window.location='home.php';
    </script>";
