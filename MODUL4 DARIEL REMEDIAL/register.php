<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./assets/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left" style="width:50%;">
		<div class="overlay" style=""> 
		<h1 style="margin-top:300px;">Welcome</h1>
		<h3>Dariel Azaka Showroom</h3>
		<p style="margin-bottom:50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Curabitur et est sed felis aliquet sollicitudin</p>
		
		</div>
	</div>
	        <?php
        include 'modules/GATAUMODULAPA.php';
        $db = new database();

        if (isset($_POST['register'])) {
            $db->register(
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['pass-init'],
                $_POST['pass-conf']
            );
        }
        ?>
	      

		<div class="right">
		<h5>Register</h5>
		<p>Register your account Now. Get Last update from your showroom<br> Get your free account now</p>
		<div class="inputs">
<form action="" method="post">
                        <h1 style="text-align: center;">Registrasi</h1>
                        <hr>
                        <div class="form-group">
                            
                            <input type="text" required class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form-group">
                            
                            <input type="text" required class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Masukkan Email anda">
                        </div>

                        <div class="form-group">
                            
                            <input type="number" required class="form-control" name="phone" id="" placeholder="Masukkan No Hp Anda">
                        </div>

                        <div class="form-group">
                            
                            <input type="password" required class="form-control" name="pass-init" id="" placeholder="Masukkan Password anda">
                        </div>

                        <div class="form-group">
                            
                            <input type="password" required class="form-control" name="pass-conf" id="" placeholder="Masukkan Ulang Password Anda">
                        </div>

                        <br><br>

                        <button type="submit" name="register" id="" class="btn btn-primary btn-lg btn-block TAUFIKRAFLI"><span>Register</span></button>
                    </form>
                    <br>
                    <p >Sudah Punya Akun ?? <a href="login.php">Login</a></p>
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
