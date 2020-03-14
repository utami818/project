<?php
session_start();
if($_SESSION['login_status'] == false){
    header("location: index.php");
}
$nama = $_SESSION['nama'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <title>E-book</title>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id=mainNav>
        <div class="container">
            <a class="navbar-brand" href="#">E-book Modul</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Daftar Buku <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sound</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Penerbit
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#airlangga">Airlangga</a>
                        <a class="dropdown-item" href="#brawijaya">Brawijaya</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
          <div class="intro-text">
              
            <div class="intro-lead-in"> <?php echo "Selamat Datang $nama di E-book Modul"; ?> </div>
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <h6 class="card-subtitle mb-2">IPA XII</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="book/ipa.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPS</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="book/ips.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/cover.jpg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                </div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tentang Kami</a>
          </div>
        </div>
    </header>
    <section class="page-section" id="airlangga">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">E-Book Airlangga</h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <h6 class="card-subtitle mb-2">IPA XII</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="book/ipa.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPS</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="book/ips.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/cover.jpg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <h6 class="card-subtitle mb-2">IPA XII</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="book/ipa.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPS</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="book/ips.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/cover.jpg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="brawijaya">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">E-Book Brawijaya</h2>
                  <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <h6 class="card-subtitle mb-2">IPA XII</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="book/ipa.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPS</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="book/ips.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/cover.jpg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPA</h5>
                        <h6 class="card-subtitle mb-2">IPA XII</h6>
                        <p class="card-text"><img src="../images/coversbmipa.jpeg" alt=""></p>
                        <a href="../book/ipa.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card " style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">IPS</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/coversbmips.jpeg" alt=""></p>
                        <a href="../book/ips.html" class="card-link">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2">Card subtitle</h6>
                        <p class="card-text"><img src="../images/cover.jpg" alt=""></p>
                        <a href="#" class="card-link">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer text-center">
            <div class="container">
                <div></div>
                <p>Build with Q-div 2020 <a href="#">contack us</a> copyRight&copy;MbiConsultant</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    
<!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
</body>
</html>