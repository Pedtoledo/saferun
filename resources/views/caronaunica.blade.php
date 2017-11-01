
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAFE RUN</title>

    <!-- Linkagem CSS -->
    <link href="{{asset('css')}}/bootstrap.css" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('css')}}/leoindex1.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/freelancer.css" rel="stylesheet" type="text/css"/>
   
   
    <!-- Linkagem das  Fontes -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

   
</head>
    <!-- Barra de navegação -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Barra de navegação para mobile -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>   
                <a class="navbar-brand" href="/caronas">Safe Run</a>
            
              <img src="{{asset('css')}}/carrinho.png" width="60" alt=""/>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
                <ul class="nav navbar-nav navbar-right">
            

                    <li class="page-scroll">

                        <a href="/sobre">Sobre a equipe <span class="glyphicon glyphicon-info-sign"></span></a>
                
                    </li>
                    
                   <li class="page-scroll">
                        <a href="/contato">Contate-nos <span class="glyphicon glyphicon-comment"></span></a>
                    </li>  
                </ul>
            </div>     
  
        </div>

    </nav>
    
<header>
<div class="container">

 
  <div class="card-block">
    <h4 class="card-title">{{$carona->nome}}</h4>
  
    <p class="card-text">{{$carona->descricao}}</p>
       <img src="{{asset('/imagescaronas')}}/{{$carona->image}}" alt="Avatar" style="width:30%">
  </div>
 <a href="/perfil/{{$carona->usuario_id}}">Perfil do caronista

<br>
 <div class="col-lg-6">
                        
<label for="saida" class="control-label">De onde a carona irá sair?</label>
<h4>{{$carona->saida}}</h4>
<br>
<label for="chegada" class="control-label">Pra onde a carona vai?</label>
<h4>{{$carona->chegada}}</h4>
<br>
<label for="hrsaida" class="control-label">Horas saida:</label>
<h4>{{$carona->hrsaida}}</h4>
<br>
<label for="hrchegada" class="control-label">Hora chegada:</label>
<h4>{{$carona->hrchegada}}</h4>
<br>
<label for="datachegada" class="control-label">Data saida:</label>
<h4>{{date("d-m-Y", strtotime($carona->datasaida))}}</h4>
<br>
<label for="datachegada" class="control-label">Data chegada ao destino:</label>
<h4>{{date("d-m-Y", strtotime($carona->datachegada))}}</h4>

@if (Auth::id() == $carona->usuario_id)
        <form style="display: inline;" action="{{route('caronas.destroy', $carona->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form> 
        @else
    <form method="post" action="/solicitar">
  {{ csrf_field() }}
<input type="hidden" value="{{ Auth::user()->id }}" name="usuario_id">
<input type="hidden" value="{{$carona->id}}" name="carona_id">
<input type="hidden" value="{{$carona->usuario_id}}" name="caronista_id">
 <button type="submit" class="btn btn-primary">Solicitar carona</button>
        @endif

</form>
</div>
</header>
     </html>


