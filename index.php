<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <style>
        .card:hover{
            transform: scale(1.02);
	        transition: all 0.5s ease;
        }
    </style>
</head>
<body  style="background-color:#e9ecef">
    <nav class="navbar navbar-expand-lg navbar-light border border-info" style="background-color: #e3f2fd;">
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

    <div class="jumbotron">
    <h4 class="">Dashboard<span style="font-size:17px; opacity:0.7"> Control Panel</span></h4> 
    <hr class="my-4">
        <div class="row">
            <div class="col-sm-3">
                <a style=" text-decoration: none;" href="datamahasiswa.php">
                <div class="card" style="background:url(download4.svg)">
                    <img style="height:200px" src="undraw_predictive_analytics_re_wxt8.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 style="text-align:center; background-color:rgba(6, 113, 101, 0.8);color:white" class="card-title">Data Mahasiswa <i class="bi bi-arrow-right-circle-fill"></i></h5>
                    <p class="card-text"></p>
                    </div>
                </div>
                </a>
                <br>
                <p><b>Data Mahasiswa is available now <i class="bi bi-arrow-up-circle-fill"></i></b></p>
            </div>
            <div class="col-sm-3">
                <a data-toggle="modal" data-target="#exampleModal">
                <div class="card" style="background:url(download.svg)">
                    <img style="height:200px" src="undraw_teacher_re_sico.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 style="text-align:center; background-color:rgba(137, 103, 17, 0.8); color:white" class="card-title">Data Dosen <i class="bi bi-arrow-right-circle-fill"></i></h5>
                    <p class="card-text"></p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-sm-3">
                <a data-toggle="modal" data-target="#exampleModal">
                <div class="card" style="background:url(download1.svg)">
                    <img style="height:200px;" src="undraw_studying_re_deca.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 style="text-align:center;background-color:rgba(5, 63, 147, 0.8); color:white " class="card-title">Mata Kuliah <i class="bi bi-arrow-right-circle-fill"></i></h5>
                    <p class="card-text"></p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-sm-3">
                <a data-toggle="modal" data-target="#exampleModal">
                <div class="card" style="background:url(download6.svg)">
                    <img style="height:200px;" src="undraw_online_test_gba7.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 style="text-align:center;background-color:rgba(156, 14, 128, 0.8); color:white" class="card-title">Nilai Mata Kuliah <i class="bi bi-arrow-right-circle-fill"></i></h5>
                    <p class="card-text"></p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
    <footer>
        <p style="text-align:center; background-color:rgba(218, 216, 217, 0.8); height:40px; padding: 8px;">Copyright ©2022 PortalAkademik, Designed by Jonathan Lase</p>
    </footer>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" >
        <div style="text-align:center;" class="modal-body">
           <b>Coming Soon</b>
        </div>
        </div>
    </div>
    </div>
</body>
</html>