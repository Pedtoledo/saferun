
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAFE RUN</title>

    <!-- Linkagem CSS -->
    <link href="{{asset('css')}}/bootstrap.css" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('css')}}/logado2.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/freelancer.css" rel="stylesheet" type="text/css"/>


   
   
    <!-- Linkagem das  Fontes -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   
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
   
</body>

<header>
<body>

            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    @if (session('flash_messages'))
                        <div class="alert alert-success id="mensagem" alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('flash_messages') }}
                        </div>
                    @endif
                </div>
                </div>
            
                    


    

<div class="row" >
  <a href="/caronas/create"><button  class="btn btn-info">Cadastrar carona <i class="large material-icons">directions_car</i></button></a>
</div>

<h3> Pesquisar Carona </h3>
<!-- Esse código faz a pesquisa de caronas -->
<form  method="GET" action="{{ route('pesquisa')}}">
<div class="row">

    <div class="col-md-4">
       
        <div class="">
            DE:
        <select class="form-control" name="saida" id="saida">
          <option>Americana - SP</option>
                            <option>Araraquara - SP</option>
                            <option>Barueri - SP</option>
                            <option>Bauru - SP</option>
                            <option>Campinas - SP</option>
                            <option>Carapicuíba - SP</option>
                            <option>Cotia - SP</option>
                            <option>Diadema - SP</option>
                            <option>Embu das Artes - SP</option>
                            <option>Franca - SP</option>
                            <option>Guarujá - SP</option>
                            <option>Guarulhos - SP</option>
                            <option>Hortolândia - SP</option>
                            <option>Indaiatuba - SP</option>
                            <option>Itapevi - SP</option>
                            <option>Itaquaquecetuba - SP</option>
                            <option>Jacareí - SP</option>
                            <option>Jundiaí - SP</option>
                            <option>Limeira - SP</option>
                            <option>Marília - SP</option>
                            <option>Mauá - SP</option>
                            <option>Mogi das Cruzes - SP</option>
                            <option>Mogi Guaçu - SP</option>
                            <option>Mogi Mirim - SP</option>
                            <option>Osasco - SP</option>
                            <option>Piracicaba - SP</option>
                            <option>Praia Grande - SP</option>
                            <option>Presidente Prudente - SP</option>
                            <option>Ribeirão Preto - SP</option>
                            <option>Santo André - SP</option>
                            <option>Santos - SP</option>
                            <option>São Bernardo do Campo - SP</option>
                            <option>São Carlos - SP</option>
                            <option>São José do Rio Preto - SP</option>
                            <option>São José dos Campos - SP</option>
                            <option>São Vicente - SP</option>
                            <option>Sorocaba - SP</option>
                            <option>Sumaré - SP</option>
                            <option>Suzano - SP</option>
                            <option>Taboão da Serra - SP</option>
                            <option>Taubaté - SP</option>
        </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="">
        PARA:
        <select class="form-control" name="chegada" id="saida">
            <option>Americana - SP</option>
                            <option>Araraquara - SP</option>
                            <option>Barueri - SP</option>
                            <option>Bauru - SP</option>
                            <option>Campinas - SP</option>
                            <option>Carapicuíba - SP</option>
                            <option>Cotia - SP</option>
                            <option>Diadema - SP</option>
                            <option>Embu das Artes - SP</option>
                            <option>Franca - SP</option>
                            <option>Guarujá - SP</option>
                            <option>Guarulhos - SP</option>
                            <option>Hortolândia - SP</option>
                            <option>Indaiatuba - SP</option>
                            <option>Itapevi - SP</option>
                            <option>Itaquaquecetuba - SP</option>
                            <option>Jacareí - SP</option>
                            <option>Jundiaí - SP</option>
                            <option>Limeira - SP</option>
                            <option>Marília - SP</option>
                            <option>Mauá - SP</option>
                            <option>Mogi das Cruzes - SP</option>
                            <option>Mogi Guaçu - SP</option>
                            <option>Mogi Mirim - SP</option>
                            <option>Osasco - SP</option>
                            <option>Piracicaba - SP</option>
                            <option>Praia Grande - SP</option>
                            <option>Presidente Prudente - SP</option>
                            <option>Ribeirão Preto - SP</option>
                            <option>Santo André - SP</option>
                            <option>Santos - SP</option>
                            <option>São Bernardo do Campo - SP</option>
                            <option>São Carlos - SP</option>
                            <option>São José do Rio Preto - SP</option>
                            <option>São José dos Campos - SP</option>
                            <option>São Vicente - SP</option>
                            <option>Sorocaba - SP</option>
                            <option>Sumaré - SP</option>
                            <option>Suzano - SP</option>
                            <option>Taboão da Serra - SP</option>
                            <option>Taubaté - SP</option>
        </select>
        </div>
    </div>
    
    <div class="col-md-1">
 
        <button type="submit" class="btn btn-info" style="margin-top:30%;"><span class="glyphicon glyphicon-search"></span>&nbsp;Pesquisar</button>
    
    
    </div>
    
</div> 
     
    

<div class="row" style="margin-top:5%;">
    <?php
    $count=0;
    ?>
@foreach ($caronas as $carona)
   
<ul class="imgExpande">

  <div class="col-md-4" style="margin-bottom: 5%;">
    <label>{{$carona->nome}}</label>
   <img  target="_blank" src="{{asset('/imagescaronas')}}/{{$carona->image}}" width:"200" height="200">
     <h5>De: {{$carona->saida}} </br> Para: {{$carona->chegada}}</h5>
     
    <p><h5><a href="/carona/{{$carona->id}}">Clique para mais detalhes</a></h5></p>
  </div>
</ul>

 

    
    @endforeach

</div>
<script>
var mensagem;

function mensagem() {
    mensagem = setTimeout("mensagem", 2000);
}
</script>
<!-- Esse código faz a paginação -->
{!! $caronas->links()!!}
     </body>
     </header> 
     
     <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>




