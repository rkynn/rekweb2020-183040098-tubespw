<?php 
// session_start();

// if( !isset($_SESSION["login"]) ) {
//   header("Location: login.php");
//   exit;
// }

require 'functions.php';


$mobil = query("SELECT * FROM mobil");

if( isset($_POST["cari"]) ) {
  $mobil = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html>
<head>
  <link href="assets/img/logo3.png" rel="shortcut icon">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Orbitron|Raleway" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Tugas Besar | Halaman User</title>

  <style>

    body{
      background-color: black;
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }
    .logo{
      width: 27%;
    }

    .nama1{
      font-family: Orbitron;
      color: orange;
      font-weight: bolder;
    }

    .nama2{
      font-family: Raleway;
      color: black;
    }

    .bg-sideuser{
      background-repeat: no-repeat;
      background-size: contain;
      width: 100%;
    }
    
    .slider{
      box-shadow: 0px 0px 20px 15px #ff8f00;
    }

    .collection{
      box-shadow: 0px 0px 20px 15px #ff8f00;
    }

    main {
        flex: 1 0 auto;
    }

    input.place {
      background-color: white !important;
      padding-left: 10px;
    }
    
    .input-field input[type=search]:not(.browser-default) {
      padding-left: 10px;
    }

    .input-field input[type=search]:focus:not(.browser-default) {
      padding-left: 10px;
    }

    h3{
      color: white;
      font-family: Raleway;
      text-decoration: underline;
    }

    h2{
      font-family: Orbitron;
      font-weight: bolder;
      border: 1px solid salmon;
      background-color: salmon;
    }

    hr{
      border: 7px solid white;
      border-radius: 5px;
    }

    .container-search{
      background-image: url(assets/img/a.jpg);
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      filter: grayscale();
      box-shadow: 0px 0px 20px 3px white;
      border-radius: 15px;
      /*background : rgba(69,62,61,0.7);*/
    }

    .container-card{
      width: 650px;
    }

    .logo-footer{
      width:100px;
    }

    .flow-text{
      margin-top: 3px;
    }


    @media print {
      .header, .navbar-fixed, .sidenav, .slider, .section-search, .footer-page, .sidebar {
        display: none;
      }
    }


  </style>

</head>
<body>
  <header>
    <!-- navbar -->
      <div class="navbar-fixed">
        <nav class="grey darken-3">
          <div class="nav-wrapper">
            <ul>
              <li><a href="#" data-target="slide-out" class="sidenav-trigger show-on-large hide-on-med-and-down"><i class="material-icons">menu</i></a></li>
            </ul>
            <ul class="nama-nav hide-on-med-and-down">
              <li><h5 class="nama1">RYN</h5></li>
              <li><h5 class="nama2"> AUTOMOTIVE</h5></li>
            </ul>

            <a href="#home" class="center brand-logo"><img class="logo" src="assets/img/logo3.png" alt=""></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons menu">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="btn waves-effect waves-light orange accent-2" href="print.php" target="_blank">Print<i class="material-icons left">print</i></a></li>
              <li><a class="btn waves-effect waves-light red accent-4" href="logout.php">Logout<i class="material-icons left">exit_to_app</i></a></li>
            </ul>
          </div>
        </nav>
      </div>
   
   <!-- sidenav -->
   <ul class="sidenav" id="mobile-demo">
        <li><a class="btn waves-effect waves-light" href="print.php" target="_blank">Print<i class="material-icons left">print</i></a></li>
        <li><a class="btn waves-effect waves-light" href="#" target="_blank">Profile<i class="material-icons left">account_circle</i></a></li>
        <li><a class="btn waves-effect waves-light" href="logout.php">Logout<i class="material-icons left">exit_to_app</i></a></li>
    </ul>

   <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
          <div class="background">
            <img class="bg-sideuser" src="assets/img/test1.jpg">
          </div>
          <a href="#user"><img class="circle grey lighten-2" src="assets/img/user.png"></a>
          <a href="#name"><span class="white-text name">Rakeyan Nuramria <i class="tiny material-icons">verified_user</i></span></a>
          <a href="#email"><span class="white-text email">rakeyannuramria@gmail.com</span></a>
        </div></li>
        <li><a href="#"><i class="material-icons">message</i>Messages</a></li>
        <li><a href="#"><i class="material-icons">perm_media</i>Media</a></li>
        <li><a href="#"><i class="material-icons">forum</i>Forum</a></li>
        <li><a href="#"><i class="material-icons">delete</i>Bin</a></li>
        <li><div class="divider"></div></li>
        <br>
        <li><a href="#!"><i class="material-icons">report</i>Report</a></li>
        <li><a href="#!"><i class="material-icons">settings</i>Edit Profile</a></li>
      </ul>

     <!-- akhir sidenav&mobile navbar -->

    <!-- akhir navbar -->
  </header>

  <main>
    <!-- Slider -->
      <div class="container">
        <div class="row">
          <div class="col s10 ">
            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="assets/img/slider1.jpg">
                  <div class="caption left-align">
                    <h3 class="slid"></h3>
                    <h5 class="light blue-text text-lighten-3"><b></b></h5>
                  </div>
                </li>
                <li>
                  <img src="assets/img/slider2.jpeg">
                  <div class="caption right-align">
                    <h3 class="slid"></h3>
                    <h5 class="light blue-text text-lighten-3"><b></b></h5>
                  </div>
                </li>
                <li>
                  <img src="assets/img/slider3.jpg">
                  <div class="caption center-align">
                    <h3 class="slid"></h3>
                    <h5 class="light blue-text text-lighten-3"><b></b></h5>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="col s2 sidebar">
            <ul class="collection with-header">
              <li class="collection-header black center"><h5 style="color: #7CBAE6">Media</h5></li>
              <li class="collection-item avatar">
                <i class="material-icons circle orange lighten-1">forum</i>
                <span class="title"><a href="#">Forum</a></span>
                <p>
                   Meet People Around The World Here
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle orange lighten-1">folder</i>
                <span class="title"><a href="#">Files</a></span>
                <p>
                  Documentation
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle orange lighten-1">shopping_basket</i>
                <span class="title"><a href="#">Store</a></span>
                <p>
                  Buy Our Merchandise Here
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle orange lighten-1">photo</i>
                <span class="title"><a href="#">Photo</a></span>
                <p class="truncate">
                  Every Pictures has taken is in here.
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle orange lighten-1">play_arrow</i>
                <span class="title"><a href="#">Video</a></span>
                <p>
                  More SWAG Activities
                </p>
              </li>
            </ul>
          </div>

        </div>
      </div>
    <!-- Akhir Slider -->

    <!-- Search Bar -->
    <div class="container container-search">   
      <section id="search_sec" class="section section-search center">
      
        <div class="row">
          <div class="col s1"></div>
          <div class="col s10">
            <h3>KATALOG MOBIL</h3>
            <form action="" method="post">
              <div class="input-field">
                <input class="place" placeholder="  masukkan keyword . . ." type="search" id="keyword" name="keyword">
              <button class="btn waves-effect waves-light blue lighten-2" type="submit" name="cari" id="tombol-cari">Cari<i class="material-icons left">search</i></button>
              </div>
            </form>
          </div>
        </div>
      
      </section>
    </div>

   <!-- Akhir Search Bar -->


   <!-- card -->
   <div class="container container-card" id="container">
    <?php if (empty($mobil)) :?>
    <h1 align="center" class="data">Data Tidak Ditemukan!</h1>

    <?php else : ?>
   
    <?php foreach( $mobil as $mbl ) : ?>

     <div class="row grey lighten-2">
        <div class="col s12 m12">
          <div class="card center">
            <div class="card-image">
              <img class="responsive-img materialboxed" src="assets/img/<?= $mbl["gambar"]; ?>">
            </div>
            <div class="card-content">
              <h2 class="card-title"><?= $mbl["nama_mobil"]; ?></h2>
              <p class="card-title"><?= $mbl["tipe_mobil"]; ?></p>
              <p class="card-title"><?= $mbl["tahun_rilis"]; ?></p>
            </div>
            <div class="card-action black">
              <a href="profil.php?id_mobil=<?=$mbl['id_mobil'];?>"> Spesifikasi Lengkap>></a>
            </div>
          </div>
        </div>
      </div>

     <?php endforeach; ?>
    <?php endif ?>
   </div>
   <!-- akhir card -->

  </main>


  <footer class="white-text center footer-page">
      <img src="assets/img/logo3.png" alt="" class="logo-footer">
      <p class="flow-text">Copyright &copy; 2019 Rakeyan Nuramria, All Rights Reserved.</p>
    </footer>









    
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    /* Script Sidebar */
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

    //Script Sidenav
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });

    /* Script Slider */
        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          trasition : 600,
          interval: 3000
        });

   /*materialboxed*/
      const materialboxed = document.querySelectorAll('.materialboxed')
      M.Materialbox.init(materialboxed,{
      });

    /*scrollspy*/
      const scrollspy = document.querySelectorAll('.scrollspy')
      M.ScrollSpy.init(scrollspy,{
        scrollOffset : 50
      })
        
  </script>
  <!-- <script src="js/ajaxUser.js"></script> -->
</body>
</html>