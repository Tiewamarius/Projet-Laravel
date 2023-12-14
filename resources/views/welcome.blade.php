<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
	<title>Attendance Geste</title>
	<link rel="shortcut icon" href="images/logo.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="css/welcome.css" media="screen" >

</head>
<body id="bdy"> 


        <center>
            <h2>
                REGISTRE PRESENCE
            </h2>
        </center>
    <div class="form-box">
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

    <footer>
       <h3>copyright</h3> 
    </footer>

    <script>
        /*let hour=7;
        function changeBackground(hour) {
            if (hour >= 6 && hour <= 12) {
                document.getElementById("bdy").style.backgroundImage = "url(/images/register.jpg)";

            } else {
                document.getElementById("bdy").style.backgroundImage = "url(/images/afternoon.jpg)";
            }
        }
        setInterval(changeBackground, 1000);*/
        </script>
</body>
</html>