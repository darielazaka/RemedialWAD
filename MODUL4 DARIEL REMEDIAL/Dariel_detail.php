<!doctype html>
<html lang="en">
<?php session_start();
include 'modules/GATAUMODULAPA.php';
$db = new database();
$show = "";
if (isset($_SESSION['logged'])) {
    # code...
} else {
    $db->movePage("login.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tugas Pendahuluan 3 WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

 
  <section id="home">
    <?php 
if (isset($_SESSION['logged'])) {
?>
  
   <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-primary bg-success">
      <div class="container-fluid">
         <ul class="navbar-nav" style="margin-left:30px;">
      <li class="nav-item active">
      <li class="nav-item active">
         <a class="nav-link text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item" style="margin-left:40px;">
        <a class="nav-link text-light" href="Dariel_home.php">My Goods</a>
      </li>

    </ul>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
      <li class="nav-item dropdown">
     <a class="nav-link text-light" href="Dariel_additem.php"> <button type="button" class="btn btn-light "><span>Add Your Goods</span></button></a>
      </li> 

<li class="nav-item dropdown">
                    <div class="dropdown" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white;margin-top:7px;">
                            <font class="">Selamat Datang,</font> <font class="text-dark"><?php echo $_SESSION['user-name']?></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <center><a class="dropdown-item" href="profile.php">Profile</a>
                            <form action="" method="post">
                            <button type="submit" name="logout" class="btn btn-block">Logout</button></center>
                        </form>
                        </div>

                    </div>
                </li>

    </div>
  </div>


    </nav>
<?php } else { ?>
   <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-primary bg-primary">
      <div class="container-fluid">
         <ul class="navbar-nav" style="margin-left:30px;">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index.php">Home</a>
      </li>
     

    </ul>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
     <li class="nav-item active">
        <a class="nav-link text-light" href="login.php">Login</a>
      </li>

    </div>
  </div>


    </nav>
<?php }?>

    <div class="container">
        <?php
        include './modules/KONEKSINYAKAKAK.php';
        include './modules/MODULBIKININILAH.php';
        include './modules/HAPUSAKU.php';
        include './modules/GANTILAH.php';

        ini_set('display_errors', '');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        ini_set('error_reporting', E_ALL);

        $ID_Goods = $_GET['ID_Goods'];
        $query = "SELECT * FROM my_goods where ID_Goods=$ID_Goods;";
        $sql = mysqli_query($conn, $query);
        ?>

        <div class="row">
            <?php if ($row = mysqli_fetch_array($sql)) {  ?>




                <div class="col-md-10 col-lg-offset-10 mt-5" style="margin-left: 10%; ">
                    <div >
                        
                        
                        <div class="card-body">
                            <h3><?php echo $row['judul_buku'] ?></h3>
                            <p class="card-text">
                           
                                <div class="row">
                                    <div class="col-md-4">
                                    <img class="card-img-top img-poster" src="<?php echo $row['Foto'] ?>" alt="Card image cap">
                                    </div>

                                    <div class="col-md-8">
 <div class="form-group">
                <h6>Nama Barang</h6>
                <input required type="text" name="nama_mobil" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $row['Nama_Goods'] ?>" readonly style="background-color:white">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;"> Nama Manufacture</h6>
                <input required type="text" name="nama_pemilik" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $row['Manufacture'] ?>" readonly style="background-color:white">
              </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Stok</h6>
               <input required type="text" name="Merk" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $row['Stok'] ?>" readonly style="background-color:white">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Tanggal beli</h6>
                 <input required type="date" name="tanggalbeli" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo date($row['tanggal_beli'] )?>" readonly style="background-color:white">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Deskripsi" id="" rows="3" readonly style="background-color:white"><?php echo $row['deskripsi']?></textarea>
              </div>
Status Pembayaran : <?php echo $row['status_pembayaran'] ?>
                                    </div>
                                    
                                </div>
                         

                        </div>

                        <form action="Dariel_home.php?ID_Goods=<?php echo $row['ID_Goods'] ?>" method="post">
                            <div class="card-footer bg-transparent">
                                <p style="text-align: center;">
                                    <!-- Button trigger modal -->
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                        Edit
                                    </button>
                                    <button type="submit" value="<?php echo $row['ID_Goods'] ?>" name="deleteAgenda" class="btn btn-danger">Hapus</button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Update Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container mx-auto my-5">
                                    <form action="dariel_detail.php?ID_Goods=<?php echo $row['ID_Goods'] ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12 col-lg-offset-12  ">
                                                <div class="card h-100">
                                                    <div class="card-header bg-primary"></div>
                                                    <div class="card-body">

              <input type="hidden" name="id_mobil" value=<?php echo $row['ID_Goods'] ?>>
              <div class="form-group">
                <h6>Nama Barang</h6>
                <input required type="text" name="nama_mobil" id="" class="form-control" value="<?php echo $row['Nama_Goods'] ?>" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Manufacture</h6>
                <input required type="text" name="nama_pemilik" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $row['Manufacture'] ?>">
              </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Stok</h6>
               <input required type="text" name="Merk" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $row['Stok'] ?>">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Tanggal beli</h6>
                 <input required type="date" name="tanggalbeli" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo date($row['tanggal_beli'] )?>" >
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Deskripsi" id="" rows="3" ><?php echo $row['deskripsi']?></textarea>
              </div>


              <div class="">
                <h6 style="margin-top:5px;">Status pembayaran</h6>
                                                                <label class="col-md-6 form-check">
                                                                    <div class="row">
                                                                        <div class="form-check col-md-6">
                                                                            <input class="form-check-input" name="statusnya" value="Lunas" type="radio" <?php echo ($row['status_pembayaran'] == 'Lunas') ? 'checked' : '' ?>>
                                                                            <label class="form-check-label" for="gridRadios2">
                                                                                Lunas
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check col-md-6">
                                                                            <input class="form-check-input" value="NotLunas" type="radio" name="statusnya" <?php echo ($row['status_pembayaran'] == 'NotLunas') ? 'checked' : '' ?>>
                                                                            <label class="form-check-label" for="gridRadios3">
                                                                                Belum Lunas
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                </label>
                </div>


                                                     
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" name="updateEvent" class="btn btn-primary" style="height:40px; width:150px"> <span>Save changes</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>