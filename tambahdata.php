<?php
    include 'connection.php';
    
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $prodi = $_POST['prodi'];

    $query="INSERT INTO mhs (`nim`, `nama`, `alamat`, `jenis_kelamin`, `prodi`)  values('$nim','$nama','$alamat','$jenis_kelamin','$prodi')";
    mysqli_query($connect, $query);
    header("location:datamahasiswa.php");
?>