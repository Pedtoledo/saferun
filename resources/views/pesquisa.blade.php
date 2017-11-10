<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAFE RUN</title>

    <!-- Bootstrap Core CSS -->
   <link href="{{asset('css')}}/bootstrap.css" rel="stylesheet" type="text/css"/>  
    
    <!-- Theme CSS -->
  <link href="{{asset('css')}}/leoindex1.css" rel="stylesheet" type="text/css"/>
  <link href="{{asset('css')}}/freelancer.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Fonts -->
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
<body>
<div class="container">
@foreach($dados as $dado)
<div class="panel panel-primary">
    <div class="panel-body">
  <img src="{{asset('/imagescaronas')}}/{{$dado->image}}" style="width:30%">
            <a href="carona/{{$dado->id}}"><i class="btn"></i>Clique para mais detalhes</a>
</div>
</div>
@endforeach

</div>
</div>
</div>
</body>
</header>
      

      
        <div class="wrapper">
 <a href="www.facebook.com"><img src="css/face.png" width="60" /></a>
<body>
        <div class="push"></div>
      </div>
      <footer class="footer"></footer>
      
   <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>


</html>
