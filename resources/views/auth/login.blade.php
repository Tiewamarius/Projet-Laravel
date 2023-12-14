<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
	<title>Regitre</title>
	<link rel="shortcut icon" href="images/logo.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/welcome.css" media="screen" >

</head>
<body>
        <center>
            @if (session('message'))
            <div class="alertSucc">
                {{session('message')}}
            </div> 
            
            @endif
        </center>
    <br><br><div class="form-box">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" placeholder="Email" name="email" :value="old('email')"/>
            <input type="password" name="password" placeholder="votre mot de pass" required>
            <input type="submit" value="Valider">
        </form>
        <div class="register-link">
            <p>pas de compte? <a href="{{ route('register') }}">Creer un compte!</a></p>
        </div>
    </div>
<script>
    // Supprime le message de redirection après 3 secondes
    setTimeout(function() {
            $(".message-redirect").remove();
        }, 3000);
</script>
    <footer>
       <h3>copyright</h3> 
    </footer>
</body>
</html>