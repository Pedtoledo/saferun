<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAFE RUN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>  
    
    <!-- Theme CSS -->
    <link href="css/leoindex1.css" rel="stylesheet" type="text/css"/>
    <link href="css/freelancer.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">



</head>
    <!-- Barra de navegação -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>   
                <a class="navbar-brand" href="/caronas">Safe Run</a>
            
              <img src="css/carrinho.png" width="60" alt=""/>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
                <ul class="nav navbar-nav navbar-right">
              
                    <li class="page-scroll">
                        <a href="/sobre">Sobre nós <span class="glyphicon glyphicon-info-sign"></span></a></a>
                
                    </li>
                    
                   <li class="page-scroll">

                       

                        <a href="/contato">Contate-nos <span class="glyphicon glyphicon-comment"></span></a></a>
                    </li>
              <form class="navbar-form navbar-left" method="POST" action="{{ route('pesquisa')}}">
                 {{csrf_field()}}
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
        </div>

        <button type="submit" class="btn btn-success "><i class="glyphicon glyphicon-search"></i></button>

      </form>

                </ul>
                
            </div>     
          

         <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>

                                     <a href="/perfil">
                                        Meu perfil
                                        </a>

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>

                                       


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </div>
      
    </nav>
   
<header>
<body>
<div class="container">
@foreach($dados as $dado)
<div class="card" style="width: 100rem;">
  <img class="card-img-top" src="{{asset('/images')}}/{{$dado->image}}"style="width:30%">
            <a href="carona/{{$dado->id}}"><i class="btn"></i>Detalhes</a>
 </table>
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
