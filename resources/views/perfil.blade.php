
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
                <div class="col-md-7">

                        <!-- Esse código tras as imagens -->
                        <img src="{{asset('/images')}}/{{ $usuario->image }}" alt="Avatar" style="width:80%">
   <div class="col-xs-12 divider ">
                            <div class="col-xs-12 col-sm-12 ">
                            
                                 <h5>Nota do usuário: </h5>  @if ($nota == 1.000)
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
                        </div>
                        </div>
           
                        <div class="col-md-5">
                             <h2 class="text-center">
                              <div class="col-md-3 col-md-offset-1">
                             <h3><label for="telefone" class="control-label">Telefone:</label></h3>
                             <h4>   {{ $usuario->telefone }}</h4>
                             </div>
                             </br>
                               </br>
                                 </br>
                               <div class="col-md-3 col-md-offset-1">
                             <h3><label for="telefone" class="control-label">E-mail:</label></h3>
                             <h4>   {{ $usuario->email }}</h4>
                             </div>
                             </br>
                                 </br>
                                 </br>
                           
                               <div class="col-md-3 col-md-offset-1">
                             <h3><label for="telefone" class="control-label">Nasceu em:</label></h3>
                             <h4>   {{date("d-m-Y", strtotime($usuario->datanasc))}}</h4>
                             </div>
                               </br>
                                 </br>
                                 </br>
                                  </br>
                          
      
                             
                
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



                    
               