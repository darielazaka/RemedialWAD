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

   

  <div class="container">

  @forelse ($posts as $post)


  <div class="col-md-4" style="margin-top:100px;">
          <div class="card card-home" style="border-radius: 25px;">
             <img class="card-img-top img-poster" src="{{URL::asset( $post->image ) }}" style="padding:25px; border-radius: 40px;">
            
            <div class="card-body">
              <h3>{{ $post->name }}</h3>
              <p class="card-text">
                <p>{{ $post->description }}</p>
                <p style="text-align:left;">
                
                        <form action="delete/{{ $post->id }}" method="post">
                           <a href="DetailGoods/{{ $post->id }}">
               <button type="button" class="btn btn-primary " style="width:150px; border-radius:25px;"><span>Lihat Detail</span></button>
              </a>
                                    <button type="submit" style="width:150px; border-radius:25px;" value="{{ $post->id_mobil }}" name="deleteAgenda" class="btn btn-danger">Hapus</button>

                        </form>
            </p>
            </div>

          </div>
        </div>

  @empty
  <center> <h1 class="h-100" style="margin-top: 200px;">Tidak Ada Barang Di Inventory<hr style="background-color:blue;"></h1> </center>
      <div class=" d-flex justify-content-center align-items-center">
        
        <h4 class="h-100" style="margin-top: 1px;">Cek kembali Invoice mu dan masukkan kembali barang yang telah dibeli</h4>  
      </div>
  @endforelse

  {{ $posts->links() }}

    <div class="row" style="margin-top:100px; margin-bottom:100px;">

    </div><h4>
     

    </h4>
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
        
 <img src="https://hmsitel-u.id/wp-content/uploads/2021/01/logo-ead-1.png"style="width:200; height:40px; margin-top: 100px; margin-bottom:10px">

      </div>
         <h4 class="h-100" style="margin-top: 1px;">SHOWROOM DARIEL</h4>  
  <p class="text-secondary m-0">Dariel Azaka_1202190255</p></footer>

</html>