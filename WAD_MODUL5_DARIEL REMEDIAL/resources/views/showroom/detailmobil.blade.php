<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tugas Pendahuluan 3 WAD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

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
     <a class="nav-link text-light" href="TambahGoods"> <button type="button" class="btn btn-light "><span>Add Your Car</span></button></a>
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



    <div class="container">
       

        <div class="row">
            

            @foreach ($itemproduk as $post)

                <div class="col-md-10 col-lg-offset-10 mt-5" style="margin-left: 10%; ">
                    <div >
                        
                        
                        <div class="card-body">
                            <h3></h3>
                            <p class="card-text">
                           
                                <div class="row">
                                    <div class="col-md-4">
                                    <img class="card-img-top img-poster" src="{{URL::asset( $post->image ) }}" alt="Card image cap">
                                    </div>

                                    <div class="col-md-8">
 <div class="form-group">
                <h6>Nama Mobil</h6>
                <input required type="text" name="nama_mobil" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $post->name }}" readonly style="background-color:white">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;"> Nama Pemilik</h6>
                <input required type="text" name="nama_pemilik" id="" class="form-control" placeholder="" aria-describedby="helpId" value="Dariel - 1202190255" readonly style="background-color:white">
              </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Merk</h6>
               <input required type="text" name="Merk" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $post->brand }}" readonly style="background-color:white">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Tanggal beli</h6>
                 <input required type="date" name="tanggalbeli" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $post->purchase_date }}" readonly style="background-color:white">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Deskripsi" id="" rows="3" readonly style="background-color:white">{{ $post->description }}</textarea>
              </div>
Status Pembayaran : 
                                    </div>
                                    
                                </div>
                         

                        </div>
                        @endforeach


                        <form action="Dariel_home.php?id_mobil=" method="post">
                            <div class="card-footer bg-transparent">
                                <p style="text-align: center;">
                                    <!-- Button trigger modal -->
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                        Edit
                                    </button>
                                    <button type="submit" value="" name="deleteAgenda" class="btn btn-danger">Hapus</button>
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
                                    <form action="dariel_detail.php?id_mobil=" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12 col-lg-offset-12  ">
                                                <div class="card h-100">
                                                    <div class="card-header bg-primary"></div>
                                                    <div class="card-body">

              <input type="hidden" name="id_mobil" value=>
              <div class="form-group">
                <h6>Nama Mobil</h6>
                <input required type="text" name="nama_mobil" id="" class="form-control" value="" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;"> Nama Pemilik</h6>
                <input required type="text" name="nama_pemilik" id="" class="form-control" placeholder="" aria-describedby="helpId" value="Dariel - 1202190255">
              </div>

               <div class="form-group">
                <h6 style="margin-top:5px;">Merk</h6>
               <input required type="text" name="Merk" id="" class="form-control" placeholder="" aria-describedby="helpId" value="">
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Tanggal beli</h6>
                 <input required type="date" name="tanggalbeli" id="" class="form-control" placeholder="" aria-describedby="helpId" value="" >
              </div>

              <div class="form-group">
                <h6 style="margin-top:5px;">Deskripsi</h6>
                 <textarea required class="form-control" name="Deskripsi" id="" rows="3" ></textarea>
              </div>


              <div class="">
                <h6 style="margin-top:5px;">Status pembayaran</h6>
                                                                <label class="col-md-6 form-check">
                                                                    <div class="row">
                                                                        <div class="form-check col-md-6">
                                                                            <input class="form-check-input" name="statusnya" value="Lunas" type="radio" >
                                                                            <label class="form-check-label" for="gridRadios2">
                                                                                Lunas
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check col-md-6">
                                                                            <input class="form-check-input" value="NotLunas" type="radio" name="statusnya" >
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