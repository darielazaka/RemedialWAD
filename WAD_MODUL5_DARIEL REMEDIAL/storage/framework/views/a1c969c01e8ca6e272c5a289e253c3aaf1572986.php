<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tugas Pendahuluan 3 WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/styles.css">

</head>
<body>

  
   <section id="home">

  
   <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-primary bg-success">
      <div class="container-fluid">
         <ul class="navbar-nav" style="margin-left:30px;">
      <li class="nav-item active">
        <a class="nav-link text-light" href="index">Home</a>
      </li>
      <li class="nav-item" style="margin-left:40px;">
        <a class="nav-link text-light" href="Home">My Goods</a>
      </li>

    </ul>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
      <li class="nav-item dropdown">
     <a class="nav-link text-light" href="TambahGoods"> <button type="button" class="btn btn-light "><span>Add Your Goods</span></button></a>
      </li> 

<li class="nav-item dropdown">
                    <div class="dropdown" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white;margin-top:7px;">
                            <font class="">Selamat Datang,</font> <font class="text-dark"></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <center><a class="dropdown-item" href="Users/Profile">Profile</a>
                            <form action="" method="post">
                            <button type="submit" name="logout" class="btn btn-block">Logout</button></center>
                        </form>
                        </div>

                    </div>
                </li>

    </div>
  </div>


    </nav>


  <div class="container mx-auto my-5">


    <form action="Dariel_home.php" method="post" enctype="multipart/form-data">
      <div class="row justify-content-center" style="">
        <h3>Tambah Barang</h3>
        <small>Tambah Barang anda sesuai dengan pembelian yang tertera pada invoice anda</small>
        <div class="col-lg-12 col-lg-offset-8 mt-5" >
          <div class="card h-100">
            
            <div class="card-body">

              <div class="form-group">
                <h6>Nama Barang</h6>
                <input required type="text" name="Barang" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;"> Nama Manufacture</h6>
                <input required type="text" name="Manufacture" id="" class="form-control" placeholder="" aria-describedby="helpId" >
              </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Stok</h6>
               <input required type="text" name="Stok" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Tanggal beli</h6>
                 <input required type="date" name="tanggalbeli" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Deskripsi" id="" rows="3"></textarea>
              </div>


<div class="form-group">
      <h6 style="margin-top:5px;">Gambar</h6>
        <div class="col-md-12">
          <div class="custom-file">   
      <input type="file" name="inputImg" class="custom-file-input form-control" id="customFile">
    </div>
  </div>
 </div>

 <div class="my-2">
                <label for=""><strong>Status Pembayaran</strong></label>
                <div class="">
                  <label class="col-md-6 form-check">
                    <div class="row">
                      <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="statusnya" id="gridRadios2" value="Lunas">
                        <label class="form-check-label" for="gridRadios2">
                          Lunas
                        </label>
                      </div>
                      <div class="form-check col-md-6">
                        <input class="form-check-input" type="radio" name="statusnya" id="gridRadios3" value="NotLunas">
                        <label class="form-check-label" for="gridRadios3">
                          Belum Lunas


                        </label>
                      </div>
          </div>
        </div>

                       <div class="form-group  text-center" style="margin-top: 30px">
                <button type="submit" name="submit" class="btn btn-primary "><span>Submit</span></button>
                
              </div>
                    </div>

                  </label>
                </div>
              </div>

        </div>
      </div>
    </form>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>
<footer class="bg-light py-2 text-center">
      <div class=" d-flex justify-content-center align-items-center">
        
 

      </div>
         <h4 class="h-100" style="margin-top: 1px;">Goods Inventory</h4>  
  <p class="text-secondary m-0">Dibuat oleh Dariel Azaka_1202190255</p></footer>
</html>



<?php /**PATH C:\xampp\htdocs\WAD_MODUL5_DARIEL REMEDIAL\resources\views/showroom/TambahMobil.blade.php ENDPATH**/ ?>