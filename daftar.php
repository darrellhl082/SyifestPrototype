<?php 
require 'functions.php';
if(isset($_POST["submit"])){
	
	if(add($_POST) > 0){
		echo "
			<script>
				alert('Pendaftaran Berhasil');
				window.location.href = 'index.php';
			</script>
		";
        
        
        
	} else {
		echo"	
        <script>
				alert('Gagal');
		</script>";
	}
   
        
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

    <title>Pendaftaran | Syifest22</title>
</head>

<body class="bg-dark">
    <div class="container mt-5 ">
        <h1 class="text-center" style="color: white; margin-bottom:2rem;">DAFTAR</h1>
        <form name="peserta" action="" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Muhammad Iqbal" required>
                <label for="nama">Nama Calon Peserta</label>
            </div>
            <div class="form-floating">
                <input name="asal" type="text" class="form-control" id="asal"
                    placeholder="SMPIT Assyifa Boarding School" required>
                <label for="asal">Asal Sekolah</label>
            </div>
            <div class="select mt-3">
                <select name="lomba" id="lomba" class="form-select" aria-label="Default select example" required>
                    <option selected>Pilih Mata Lomba</option>
                    <option value="Futsal">Futsal</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Basket">Basket</option>
                    <option value="MHQ">MHQ</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3 " name="submit" id="submit">Daftar</button>
            <button type="button" class="btn btn-primary mt-3 " name="back" id="back">Kembali</button>

        </form>
    </div>
    <script>
    document.querySelector("#back").addEventListener("click", function() {
        window.location.href = "index.php";
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