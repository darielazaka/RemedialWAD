<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form" style="margin-top:75px;">
	<div class="left" style="width:50%;">
		<div class="overlay" style=""> 
		<h1 style="margin-top:300px;">Welcome</h1>
		<h3>Dariel Azaka Showroom</h3>
		<p style="margin-bottom:50px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Curabitur et est sed felis aliquet sollicitudin</p>
		
		</div>
	</div>
	

        

		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="register.php">Create Your Account</a> it takes less than a minute.<br> Get your free account now</p>
		<div class="inputs">
<form action="" method="post">

                       
                        <div class="form-group">
                            
                            <input type="email" class="form-control" name="email" id=""  aria-describedby="emailHelpId" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="" placeholder="Kata Sandi">

                        </div>

                        <div class="form-check">
                            <label style="margin-top:50px;">
                                <input type="checkbox" name="remember-me" id="" value="remember">
                                Remember Me
                            </label>
                        </div>
                        <br><br>
                        <button type="submit" name="lojin" id="" class="btn btn-primary btn-lg btn-block">Login</button>
                    </form>
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
