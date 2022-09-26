<?php
include 'connection.php';
$nim = $_POST['nim'];
$mhs = mysqli_query($connect, "SELECT  * FROM mhs WHERE nim='$nim'");
$uas = mysqli_fetch_array($mhs);
$prodi = array('Teknik Komputer', 'Teknik Informatika', 'Sistem Informasi');
function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>

<body style="background-color:#e9ecef">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light border border-info mb-5" style="background-color: #e3f2fd;">
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
    <form method="post" action="tambahdata.php">
        <input type="hidden" value="<?php echo $uas['nim'];?>" name="nim">
        <div class="container" style="background-color:rgba(255, 255, 255, 1); border-radius:15px; border:1px solid grey;width:700px">
        <h2 style="text-align:center;color:solid black; font-size:30px" class=" mt-3" >TAMBAH DATA</h2>
        <hr class="my-4">
        <table style="position:relative; left:27%">
            <tr>
                <td><b style="position: relative;left:-40%;"  >NIM</b></td>
                <td><input class="mb-2" style="position: relative;left:10%; width:210px" type="text" value="" name="nim"></td>
            </tr>
            <tr>
                <td><b style="position: relative;left:-40%;">NAMA</b></td>
                <td><input class="mb-2" style="position: relative;left:10%; width:210px" type="text" value="" name="nama"></td>
            </tr>
            <tr>
                <td><b style="position: relative;left:-40%;">ALAMAT</b></td>
                <td><input class="mb-2" style="position: relative;left:10%; width:210px" value="" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td><b style="position: relative;left:-40%;">JENIS KELAMIN</b></td>
                <td style="position: relative;left:6%;">
                    <input type="radio" name="jenis_kelamin" value="L"><b class="mr-2">Laki-laki</b>
                    <input type="radio" name="jenis_kelamin" value="P"><b>Perempuan</b>
                </td>
            </tr>
            <tr>
                <td><b style="position: relative;left:-40%;">PRODI</b></td>
                <td>
                    <select class="mt-2" style="position: relative;left:10%; width:210px" name="prodi" id="">
                        <?php
                        foreach ($prodi as $j) {
                            echo "<option value = '$j'";
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <button name="action" type="submit" class="mt-4 mb-4 mr-3 btn btn-primary" style="position: relative;left:43%;">SIMPAN PERUBAHAN</button>
                <a href="datamahasiswa.php"  class="btn btn-primary" style="position: relative;left:43%;" >KEMBALI</a>
                </td>
                </tr>
        </table>
        </div>
    </form>
</body>

</html>