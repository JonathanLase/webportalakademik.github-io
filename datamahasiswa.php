<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <style>

    </style>
</head>

<body style="background-color:#e9ecef">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light border border-info" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">
            <img src="mortarboard-fill.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <b style="color:purple">Portal</b>Akademik
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Master Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="datamahasiswa.php">Data Mahasiswa</a>
                        <a class="dropdown-item" href="#">Data Dosen</a>
                        <a class="dropdown-item" href="#">Mata Kuliah</a>
                        <a class="dropdown-item" href="#">Nilai Mata Kuliah</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <h5><i class="bi bi-person-circle"></i> Jonathan Lase</h5>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="mb-4">Data Mahasiswa</h3>
        <hr class="my-4">
        <form class='form-check-inline mr-0' action='forminsert.php' method='post'>
            <button type='submit' class='btn btn-primary'><a class='text-white'><i class="bi bi-plus-circle-fill"></i> Tambah Data</a></button>
            <input type='hidden' name='nim' value='$nim'>
        </form>
        <br>
        <br>
        <table class="table table-bordered bg-light" border="1" cellspacing="0" cellpadding="10" id="example">
            <thead>
                <tr class="table-info">
                    <th>NO</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>PRODI</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connection.php';
                $mhs = mysqli_query($connect, "SELECT * from mhs");
                $no = 1;
                foreach ($mhs as $uas) {
                    $nim = $uas['nim'];
                    $jenis_kelamin = $uas['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
                    echo "<tr>
            <td><b>$no</b></td>
            <td>" . $uas['nim'] . "</td>
            <td>" . $uas['nama'] . "</td>
            <td>" . $uas['alamat'] . "</td>
            <td>" . $jenis_kelamin . "</td>
            <td>" . $uas['prodi'] . "</td>
            <td>
            <form class='form-check-inline mr-0' action='formedit.php' method='POST'>
            <button type='submit' class='btn btn-success'><a class='text-white'>Edit</a></button>
            <input type='hidden' name='nim' value='$nim'>
            </form>
            <form class='form-check-inline mr-0' action='hapus.php' method='post' >
            <button name='action' value='delete' type='submit' class='btn btn-danger'><a class='text-white'>Hapus</a></button>
            <input type='hidden' name='nim' value='$nim'>
            </form>
            </td>
            </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script>    
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

</html>