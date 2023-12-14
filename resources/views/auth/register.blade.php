
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="{{('https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css')}}"rel="stylesheet"/>
    <link rel="stylesheet" href="{{('css/login.css')}}">
  </head>
  <body>
    <div class="container">
    
      <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
      @csrf
        <h1>S'INSCRIRE</h1>

        <!--<center><div class="profil">
          <input type="file" placeholder=""
                name="image" :value="" require />
            <i class="bx bxs-user"></i> 
        </div></center>-->

        <div style="display: none;">
            <label for="" class="block font-medium text-sm text-gray-70">Titre</label>
            <select name="role" class="block mt-1 w-full">
                <option value="vendor">Employé</option>
            </select>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Nom et prenoms*"
                 name="name" :value="old('name')" required autofocus />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="text" placeholder="Fonction*"
                 name="fonction" :value="old('fonction')" required autofocus />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="phone" placeholder="N° Telephone*"
                 name="phone" :value="" required autofocus />
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="email" placeholder="Email*"
                 name="email" :value="old('email')"/>
          <!-- <i class="bx bxs-user"></i> -->
        </div>
        <div class="input-box">
          <input type="password" placeholder="password"
                 name="password"
                 required autocomplete="new-password" />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>
        <div class="input-box">
          <input type="password"
                 name="password_confirmation" required />
          <!-- <i class="bx bxs-lock-alt"></i> -->
        </div>
        <button type="submit" class="btn">Valider</button>

        <div class="register-link">
          <p>deja inscrit? <a href="{{ route('login') }}">connectez-vous!</a>
            <!--<a href="{{ route('login') }}">connectez-vous!</a>--></p>
        </div>

      </form>
    </div>
  </body>
</html>
</body>
</html>
