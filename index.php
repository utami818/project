<?php
// // untuk memulai session
// session_start();
// require_once('asset/koneksi.php');
// $form_error='';
// // cek apakah tombol submit sudah di klik atau belum
// if(isset($_POST['submit'])){
//     // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
//     $cabang =$_POST['nama_cabang'];
//     $password =$_POST['password'];
//     $query = "SELECT * FROM users WHERE $cabang='nama_cabang' and $password='password'";
//     if(mysqli_query($koneksi, $query)){
//         $_SESSION['nama_cabang'] = $cabang;
//         header('location:admin/index.php');
//     }else{
//         $form_error = '<p>Pasword atau email yang kamu masukkann salah</p>';
//     }
// }
// 
session_start();
$cek_email = "";
$cek_pass = "";
require_once('asset/koneksi.php');
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM user WHERE email='$email'";
    $cek_user = mysqli_query($link, $query);
    
    if(mysqli_num_rows($cek_user)){
        while($row = mysqli_fetch_assoc($cek_user)){
            $pass_db = $row['password'];
            $nama = $row['nama'];
            if($password == $pass_db){
                $_SESSION['login_status'] = true;
                $_SESSION['nama'] = $nama;
                header('location: admin/index.php');
            }else{
                $cek_pass = "Password yang anada masukkkan salah!<br/>";
            }
        }
    }else{
        $cek_email = "Email belum terdaftar";
    }
}
if(isset($_POST['register'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cabang = $_POST['nama_cabang'];

    $query = "INSERT INTO user(nama, email, password, nama_cabang) VALUES('$nama', '$email', '$password', '$cabang')";
    
    if(mysqli_query($link,$query)){
        $_SESSION['email'] = $email;
        header('location: admin/index.php');
    }else{
        echo 'Daftar Baru Gagal!!!';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
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
                <div class="intro-lead-in">E-book Modul Silahkan Melakukan Login</div>
                <div class="row" id="card">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <p class="card-text"><img style="width:260px; height:220px;" src="images/airlangga.png" alt=""></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModallog">Login</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalreg">Register</button><br/>
                        <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Login</a> -->              
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">  
        <div class="modal fade" id="exampleModallog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <br/>
                    </div>
                    <div class="modal-body">
                                <form action="index.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Cabang Airlangga</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword2">Password</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                        <label class="form-check-label" for="dropdownCheck2">
                                            Remember me
                                        </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="login">Sign in</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container">  
        <div class="modal fade" id="exampleModalreg">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <br/>
                    </div>
                    <div class="modal-body">
                                <form action="index.php" method="POST">
                                    <div class="form-group">
                                        <label for="exampleDropdownFormEmail2">Nama</label>
                                        <input type="text" class="form-control" id="exampleDropdownFormEmail2" placeholder="Nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword2">Email</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormPassword2" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword2">Password</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleDropdownFormPassword2">Nama Cabang</label>
                                        <input type="text" class="form-control" id="exampleDropdownFormPassword2" placeholder="Nama cabang" name="nama_cabang">
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                </form>
                            </div>
                </div>
            </div>
        </div>
        
    </div>
    <footer>
        <div class="footer fixed-bottom text-center">
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