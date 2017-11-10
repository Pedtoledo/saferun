
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
                    
              
                            <li class="dropdown" id="markasread" onclick="markNotificationAsRead('{{count(auth()->user()->unreadNotifications)}}')">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                               Notificações  <span class="glyphicon glyphicon-globe"></span>  <span class="badge" id="badge-notification">{{count(auth()->user()->unreadNotifications)}}</span></a>
                                </a>
                              
                                <ul class="dropdown-menu" role="menu" style="background-color:#1E2235">
                                   <li class="center" style="color:white"> 
                                    @forelse(auth()->user()->unreadNotifications as $notification)
                                 @include('partials.notification.'.snake_case(class_basename($notification->type)))
                                 <form action="{{ route('acao')}}"  method="POST">
                                     {{csrf_field()}}
                                 <input type="hidden" name="id" value="{{$notification->data['solicitar']['id']}} ">
        <button type="submit" class="btn btn-success" name="status" value="1">Aceitar</button>
        <button type="submit" class="btn btn-danger" name="status" value="0">Negar</button>

                              @empty
                              <a href="#"> Sem notificações</a>
                                    @endforelse
                                   </li>
                                   
                                </ul>
                              </form>
                                
        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="{{asset('/images')}}/{{ Auth::user()->image }} " class="img-circle" width="35"> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" style="background-color:#1E2235">
                             
                                    <li>
                                     <a href="{!! asset('perfil') !!}/{{ Auth::id()}}">
                                        Meu perfil
                                        </a>
                                    
                                       

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <a href="/historico">
                                     Caronas              
                                           </a>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>
                                       
                                    </li>
                                </ul>
                            </li>
                            </ul>
      
    </nav>
    
<header>
<div class="container">
<div clas="cow">
 
    <div class="page-header">
    <h3>{{$carona->nome}}</h3>
  </div>
    
       <img src="{{asset('/imagescaronas')}}/{{$carona->image}}" alt="Avatar" style="width:30%">
  <div class="">
 <a href="/perfil/{{$carona->usuario_id}}">Perfil do caronista
</div>
<br>
 <div class="panel panel-primary">
    <div class="panel-body">
 <div class="col-md-6">                      
De onde a carona irá sair?
<h5>{{$carona->saida}}</h5>
<br>
Pra onde a carona vai?
<h5>{{$carona->chegada}}</h5>
<br>
Data saída:
<h5>{{date("d-m-Y", strtotime($carona->datasaida))}}</h5>
<br>
Data chegada ao destino:
<h5>{{date("d-m-Y", strtotime($carona->datachegada))}}</h5>
</div>
 <div class="col-md-3">
Horas saída:
<h5>{{$carona->hrsaida}}</h5>
<br>
Hora chegada:
<h5>{{$carona->hrchegada}}</h5>
<br>

Descrição da carona:
</br>
</br>
<label>{{$carona->descricao}}</label>
</br>
</br>
</br>
@if (Auth::id() == $carona->usuario_id)
        <form style="display: inline;" action="{{route('caronas.destroy', $carona->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger">Excluir carona</button>
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
</div>
</div>
</header>
     </html>


