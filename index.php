<?php 
require 'functions.php'; 
$peserta = query("SELECT * FROM peserta");
if (!$result){
	echo mysqli_error($conn);
}

?>


<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Assyifa Festival</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand href=" #">SYIFEST</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav isinavbar ms-auto fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/official.syifest/?hl=en"
                            target="_blank">Instagram</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/channel/UCXqtZ8EOk-Dt3RiTuNMtojA"
                            target="blank">Youtube</a>
                    </li>


                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center " style="background-image: url(img/2.jpg); background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; ">

        <img class="rounded-circle img-thumbnail mt-5" src="img/syifest.jpg" alt="Syifest Logo">
        <h1 class="display-4 fs-1 mt-5" style="color: white;">Assyifa Festival</h1>

        <svg class="waves2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">


            <path fill="#212529" fill-opacity="1"
                d="M0,128L160,64L320,256L480,96L640,160L800,192L960,32L1120,128L1280,192L1440,192L1440,320L1280,320L1120,320L960,320L800,320L640,320L480,320L320,320L160,320L0,320Z">
            </path>


        </svg>

    </div>
    <div class="container-fluid bg-dark pb-5" style="margin-top: -1rem;">
        <div class="row ">
            <div class="col p-5 text-center" style="color: white;">
                <h2>SYIFEST 2021 OFFICIAL THEME SONG</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center pb-5">
            <div class="col-md-6 p-3">
                <iframe style="border: 3px solid white;width: 100%; height:20rem;" src="
                    https://www.youtube.com/embed/jP8gASWsYM4" title="YouTube video player" frameborder="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-6 p-3"><iframe style="border: 3px solid white; width: 100%;height:20rem;"
                    src="https://www.youtube.com/embed/cbvLsPzD0Hs" title="YouTube video player" frameborder="1"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe></div>
        </div>
        <div class=" container text-center ">
            <h2 style="color: white; margin-bottom: 1rem;">PESERTA</h2>
            <button type="button" class="btn btn-light mb-4">Daftar</button>
            <table class="table table-stripped table-hover table-dark text-center mt-0" style="">
                <tr>

                    <th>No.</th>
                    <th>Nama</th>
                    <th>Mata Lomba</th>
                    <th>Asal Sekolah</th>
                </tr>
                <?php $i=1;?>
                <?php foreach ($peserta as $row ):?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row["nama"];?></td>
                    <td><?php echo $row["lomba"];?></td>
                    <td><?php echo $row["asal"]; ?></td>
                </tr>
                <?php $i++;?>
                <?php endforeach;?>
            </table>
        </div>

    </div>


    <script>
    document.querySelector('.btn').addEventListener("click", function() {
        window.location.href = "daftar.php";

        exit;

    })
    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>