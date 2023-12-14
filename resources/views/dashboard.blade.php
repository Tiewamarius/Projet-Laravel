 <x-app-layout><br>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>page d'accueille</title>
                <link rel="stylesheet" href="{{ url('css/accueillUser.css')}}">   
        </head>
<center><body class="back">
            <div class="form">
                <form action="#" method="POST">
                    @csrf
                    <table width='1000px' height='100px' border="1">
                        <tr class="tr">
                            <td>H. DEBUT</td><td>H. FIN</td><td>OBSERVATIONS</td>
                            <td rowspan="2"  class="td">
                            <input type="submit" name="submit">
                            </td>
                        </tr>
                        <tr>
                            <td class='debutCache'  class="td">
                            <input type="hidden" name="idUser" value="{{Auth::user()->id }}">
                            <input type="hidden" name="nameUser" value="{{Auth::user()->name }}">
                            <input type="hidden" name="fonctionUser" value="{{Auth::user()->fonction}}">
                            <input type="hidden" name="phoneUser" value="{{Auth::user()->phone}}">
                            <input type="time" name="debut" required id="timeDebut">
                            </td>
                            <td><input type="time" name="fin" id="timeFin"></td>
                            <td><textarea  name="observation" id="observation"></textarea></td>
                        </tr>
                    </table>
                </form>
            </div><div class="row">
            <h3 style="margin-left:10px;padding:10px; background:orangered; color:white;">LISTE DE PRESENCE</h3>
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th>FONCTIONS</th>
                        <th>NOMS</th>
                        <th>HEURES DE DEBUTS<i class=" typcn typcn-watch btn-icon-append" 
                        style="color:orangered; font-size:23px;"></i></th>
                        <th>HEURES DE FINS<i class=" typcn typcn-watch btn-icon-append" 
                        style="color:orangered; font-size:23px;"></i></th>
                        <th>OBSERVATIONS</th>
                        <th>
                          <form action="" method="get">
                            @csrf 
                            <input type="date"name="begin" > à
                            <input type="date"name="end">
                            <input type="submit" value="refresh">
                          </form>
                        </th>
                      </tr>
                    </thead>
                    <tbody>@foreach ($horaire as $Horaires)
                      <tr>
                        <td>{{$Horaires->fonctionUser}}</td>
                        <td>{{$Horaires->nameUser}}</td>
                        <td>{{$Horaires->debut}}</td>
                        <td>{{$Horaires->fin}}</td>
                        <td>{{$Horaires->observation}}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/dashboard/{{{$Horaires->idUser}}}"  class="btn btn-success btn-sm btn-icon-text mr-3">
                              DETAILS<i class="typcn typcn-eye-outline btn-icon-append"></i>
                            </a> 
                          </div>
                        </td>
                      </tr>@endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div><br>
        </body>
</center>
</x-app-layout>

    