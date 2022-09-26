<?php
    include 'connection.php';
   
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $prodi = $_POST['prodi'];

    $query="UPDATE mhs SET nim='$nim', nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', prodi='$prodi' WHERE nim='$nim'";
    mysqli_query($connect, $query);
    header("location:datamahasiswa.php");
?>