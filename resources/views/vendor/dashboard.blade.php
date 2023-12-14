<x-app-layout><br><br><br>
<style>
    x-app-layout{
}
    .btn{
        display: inline-flex;
        font-size: 15px; margin:10px;
    }

     

    li{
        padding: 5px;
        
    box-shadow: 3px 3px 8px #d0d9d0;
    margin:20px; 
        cursor: pointer;
        list-style: none;
        text-decoration: none;
        padding: 15px;
        border-radius:5px;
        background-color: #3725a4;
        color: white;
    }
    li:hover{ 
        background-color: #6d05ff;
        border: 0.5px solid rgb(149, 147, 147);
    }

    #startForm{
        display: none;
    }

    #EndForm{
        display: none;
    }
li a{
    color: white;
}
.logo{
    border-right: 0.5px solid violet;
    border-radius: 15px;
}
</style>
<div class="btn">
    <li id="starbtn">MARQUER VOTRE HEURE DE DEBUT</li>
    <li id="Endbtn">
        MARQUER VOTRE HEURE DE FIN
         <!--<a href="">
            
        </a> -->
        
    </li>
</div><b><br><br></b>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>REGISTE</title>
                <link rel="stylesheet" href="{{ url('css/accueillUser.css')}}">   
        </head>
<center><body class="back">
    
    <div class="form">
                <form action="#" method="POST" id="startForm">
                    @csrf
                    <table>
                        <thead>
                            <tr>
                                <td class="titr">Heure de DEBUT</td><td class="titr">OBSERVATIONS</td>
                                <td>
                                     
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  class="tbody">
                                    <input type="hidden" name="idUser" value="{{Auth::user()->id }}">
                                    <input type="hidden" name="nameUser" value="{{Auth::user()->name }}">
                                    <input type="hidden" name="fonctionUser" value="{{Auth::user()->fonction}}">
                                    <input type="hidden" name="phoneUser" value="{{Auth::user()->phone}}">
                                    <input type="time" name="debut" required id="timeDebut" >
                                </td>
                                <td  class="tbody">
                                    <textarea  name="observation" id="observation" value="MATIN:"></textarea>
                                </td>
                                <td>
                                    <input type="submit" value="validé">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <form action="" method="POST" id="EndForm">
                    @csrf
                    <table border>
                        <thead>
                            <tr>
                                <td class="titr">Heure de FIN</td><td class="titr">OBSERVATIONS</td>
                                <td>
                                     
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td  class="tbody">
                                    <input type="hidden" name="idUser" value="{{Auth::user()->id }}">
                                    <input type="hidden" name="nameUser" value="{{Auth::user()->name }}">
                                    <input type="hidden" name="fonctionUser" value="{{Auth::user()->fonction}}">
                                    <input type="hidden" name="phoneUser" value="{{Auth::user()->phone}}">
                                    <input type="time" name="fin" required  id="timeFin">
                                </td>
                                <td  class="tbody">
                                    <textarea  name="observation" id="observation" value="SOIR:"></textarea>
                                </td>
                                <td>
                                    <input type="submit" value="validé">
                                </td>
                            </tr>  
                        </tbody>
                    </table>
                </form>
            </div>
        </body>
</center>

<script>
    // Définition des div
const formStar = document.getElementById("startForm");
const formEnd= document.getElementById("EndForm");

// Définition des boutons
const startbtn = document.getElementById("starbtn");
const Endbtn = document.getElementById("Endbtn");

// Fonction qui affiche le formstar tart et masque le formEnd
function AfficherStar() {
    formStar.style.display = "block";
    formEnd.style.display = "none";
}

// Fonction qui masque le div2 et affiche le div1
function  AfficherEnd() {
    formStar.style.display = "none";
    formEnd.style.display = "block";
}

// Écouteurs d'événements
startbtn.addEventListener("click", AfficherStar);
Endbtn.addEventListener("click", AfficherEnd);
</script>
</x-app-layout>

    