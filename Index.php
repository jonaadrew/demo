<!DOCTYPE html>
<html lang="en">

<head>
  <title>Beranda</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <script type="text/javascript" src="js/query"></script>
  <script type="text/javascript" src="js/boostrap.js"></script>
</head>

<body>
    <?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:Index.php?pesan=belum_login");
  }?>

  <div class=" container-fluid bgc-white teks-tengah " >
        <img class="margin-atas img-circle" src="media/Logo.jpeg", height="180px">
        <h1 class="teks-tengah" > My Web</h1>

        <p style="text-align: center;">Web Ini Merupakan Profil Singkat Dariku !</p>
  </div>

<nav class="navbar navbar-default navbar-fixed-top " style="background-color: black">
  <div class="container-fluid navbar-margin"  data-example-id="nav-pills-with-dropdown">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <p style="color: white; font-size: 30px;">CRAFT</p>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right " >
          <li ><a href="index.php?page=beranda" title="Beranda" >Beranda</a></li>
          <li ><a href="index.php?page=profilku" title="Profilku">Profilku</a></li>
          <li class="btn-danger " style="background-color: skyblue;"><a href="logout.php" title="Logout">Log Out</a></li>
        </ul>
    </div>
    <div id="sidebar">

    </div>
  </div>
</nav>

  <div class="container">
  <div class="row">
   <div class="content-buatan col-lg-8 col-xs-12 col-sm-12 bgc-white">
    <?php
    if ( $_GET['page'] == 'beranda') {

        include "Config.php";
    }
    else
    {
        include "Config.php";
    }
    ?>
  </div>
  <center>
  <div class="content-sidebar col-off-4 col-lg-4 col-sm-12 col-xs-12">
    <div class="dah-sidebar">
      <div class="sidebar-content">
        <h4 class="heading"><b>My Foto :</b></h4>
        <img class="table-gambar" src="media/MyFoto.jpg" width="350px" height="200px">
      </div>
    </div>
  </div>
  </div>
  </center>
</div>
</body>
</html>
