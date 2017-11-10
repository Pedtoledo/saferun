
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
    <!-- Inicio do site -->  
<header>
    <body>
     </br>
       </br>
         </br>
           </br>
            <div class="row">
                <h1>  {{$usuario->name}} {{ $usuario-> sobrenome }}</h4></label></h1>
             
                </div>
              
  </br>
                <div class="col-md-6">

                        <!-- Esse código tras as imagens -->
                        <img src="{{asset('/images')}}/{{ $usuario->image }}" alt="Avatar" style="width:80%">


                            </div>
                    
           
                        <div class="col-md-6">
                        <div class="panel panel-primary">
                        <div class="panel-body">
                           
                              <div class="col-md-4 ">
                             <h4><label for="telefone" class="control-label">Telefone:</label></h4>
                             <h5>   {{ $usuario->telefone }}</h5>
                             </div>
                             </div>
                             </br>
                              
                               <div class="col-md-4 ">
                             <h4><label for="telefone" class="control-label">E-mail:</label></h4>
                             <h5>   {{ $usuario->email }}</h5>
                             </div>
                            
                             </br>
                              </br>
                             </br>
                             </br>
                               <div class="col-md-4 ">
                             <h4><label for="nota" class="control-label">Nota :</label></h4>
                          </div>

                          </br>
                          </br>
                           <div class="row">
                                <div class="col-md-12">
                           @if ($nota == 1.000)
        <img src="{{asset('img')}}/estrelav.png" width="40" alt=""/> 
         
     
    @endif
    @if ($nota == 1.500)
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
         <img src="{{asset('img')}}/me.png" width="40" alt=""/>
      
    @endif 
     @if ($nota == 2.000)
       <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
     
    @endif  
    @if ($nota == 2.500)
      <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
          <img src="{{asset('img')}}/me.png" width="40" alt=""/>
      
      
    @endif    
    
     @if ($nota == 3.000)
  

        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
         <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
          <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/> 

         
 
    @endif 
  
    @if ($nota == 3.500)
      <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
         <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
          <img src="{{asset('img')}}/me.png" width="40" alt=""/>
     

    @endif 
     @if ($nota == 4.000)
      <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
       <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
         <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>

      
      
    @endif   
    @if ($nota == 4.500)
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
         <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
          <img src="{{asset('img')}}/me.png" width="40" alt=""/>
     
    @endif 
    
     @if ($nota == 5.000)
     <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
      <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
       <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
        <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>
         <img src="{{asset('img')}}/estrelac.png" width="40" alt=""/>


  @endif
</div>
            </div>                        </div>
                             </br>
                          
      
                             
                </div>
                </div>
                        </div>
                        </div>
                   </div>
  





  

   <div class="row">
<br />
<div class="col-md-12">
<br />
<div class="text-left">
<h2> Comentários</h2>
<hr>
</div>

<div class="row">
<div class="col-md-6">
<div class="panel panel-default">
                <div class="panel-body">                
                    <form method="POST" action="{{ route('comentar')}}">
{{csrf_field()}}
<input type="hidden" name="user_id" value="{{ Auth::id()}}">
<input type="hidden" name="caronista_id" value="{{$usuario->id}}">
                        <textarea class="form-control counted" name="comentario" placeholder="Digite seu comentario" rows="3" style="margin-bottom:10px;"></textarea>
                        <div class="text-right">
                        </br>
                       <button type="submit" class="btn btn-primary" >Comentar</button>
                        </div>  
                    </form>
                </div>
            </div>

 

</div>

</div>
</div>



@foreach ($comentarios as $comentario)
<div class="row">
<div class="col-md-1">
<br />
<a href="{!! asset('perfil') !!}/{{$comentario->user->id}}">
<img class="d-flex mr-3 rounded-circle" src="{!! asset('images') !!}/{{$comentario->user->image}}" width="70" height="70" alt="">
</a>
</div>

<div class="col-md-7">
<div class="panel panel-default">
                <div class="panel-body">
                <div class="text-left">
  <form method="POST" action="{{ route('deletarComentario')}}">
{{csrf_field()}}
<input type="hidden" name="caronista_id" value="{{$usuario->id}}">
<input type="hidden" name="comentario_id" value="{{$comentario->id}}">
<h5><a href="{!! asset('perfil') !!}/{{$comentario->user->id}}">{{$comentario->user->name}} {{$comentario->user->sobrenome}}</a></h5>
</div>

@if ( Auth::id() == $comentario->user_id)

<button type="submit" class="btn btn-danger btn-sm" style="float:right" >
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>

@endif
    

</form>


<div class="text-left">
<p>{{$comentario->comentario}} </p>
</div>
</div>
</div></div></div>

</br >
@endforeach






<br>
</body>

</header>
       <div class="wrapper">
       <br>
       <br>
<img src="img/rodapi.png" width="500" >

<body>

</header>
      
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



                    
               