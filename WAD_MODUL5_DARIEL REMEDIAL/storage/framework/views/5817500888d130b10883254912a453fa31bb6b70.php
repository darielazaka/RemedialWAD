<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tugas Pendahuluan 1 WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/style/styles.css">

</head>
<body>

  
   <section id="home">
   <nav id="main-navbar" class="navbar navbar-expand-lg navbar-fixed-top navbar-primary bg-primary">
      <div class="container-fluid">
         <ul class="navbar-nav" style="margin-left:30px;">
      <li class="nav-item active">
        <a class="nav-link text-light" href="/showroom/index">Home</a>
      </li>
      <li class="nav-item" style="margin-left:40px;">
        <a class="nav-link text-light" href="/showroom/Home">My Cars</a>
      </li>

    </ul>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
<div class="nav navbar-right">
      <li class="nav-item dropdown">
     <a class="nav-link text-light" href="/showroom/TambahMobil"> <button type="button" class="btn btn-light "><span>Add Your Car</span></button></a>
      </li> 

<li class="nav-item dropdown">
                    <div class="dropdown" >
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white;margin-top:7px;">
                            <font class="">Selamat Datang,</font> <font class="text-dark"></font>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <center><a class="dropdown-item" href="/Users/Profile">Profile</a>
                            <form action="" method="post">
                            <button type="submit" name="logout" class="btn btn-block">Logout</button></center>
                        </form>
                        </div>

                    </div>
                </li>

    </div>
  </div>


    </nav>

 <div class="row" style="margin-top:200px;margin-bottom:400px;">

 <div class="container d-flex justify-content-center" >
        <div class="box">        <?php
        
        if (isset($_POST['update'])) {
            $db->update_profile($_POST['name'], $_POST['emailz'], $_POST['contact'], $_POST['password'], $_POST['repassword'], $_POST['color']);
        }
        ?>
            <div class="card w-100 h-100">
                <div class="card-body">

                    <form action="" class="form-horizontal" method="post" style="height: 100%; width:800px;">
                        <h1 style="text-align: center;">Profile</h1>

                        <div class="form-group row">
                            <label for="inputNama" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input name="emailz" type="text"  disabled class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="emailz" >
                                <input type="text"  class="form-control" id="inputNama" placeholder="Nama Anda" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3 mb-5">
                            <label for="inputTelp" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-9">
                                <input type="number"  class= "form-control" id="inputTelp" name="contact">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row mt-3">
                            <label for="" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Password" name="password" value="" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3">
                            <label for="" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Ulangi Password" name="repassword" value="" required>
                            </div>
                        </div>
                        <div class="form-group row mt-3 mb-5">
                            <label class="col-sm-3" for="">Warna Navbar</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="color" id="">
                                    <option value="navbar-primary bg-danger text-light">biru</option>
                                    <option value=" navbar-success bg-dark text-light">hijau</option>
                                    <option value="navbar-danger bg-warning text-light">merah</option>
                                    <option value="navbar-dark bg-primary text-light">hitam</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <button type="submit" name="update" id="btn-submit" class="btn btn-primary btn-block">Submit</button>
                            <button type="empty" class="btn btn-light btn-block">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

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
         <h4 class="h-100" style="margin-top: 1px;">Showroom Dariel</h4>  
  <p class="text-secondary m-0">Dibuat oleh Dariel Azaka_1202190255</p></footer>
</html>



<?php /**PATH C:\xampp\htdocs\WAD_MODUL5_DARIEL\resources\views/Users/index.blade.php ENDPATH**/ ?>