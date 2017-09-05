<!DOCTYPE html>
<html lang="en">

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
    <link href="css/freelancer.css" rel="stylesheet" type="text/css"/>
    <link href="css/leoindex.css" rel="stylesheet" type="text/css"/>
    <link href="css/botao.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>   
                <a class="navbar-brand" href="#page-top">Safe Run</a>
            
              <img src="css/carrinho.png" width="70" alt=""/>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                       <li class="hidden">
                        <a href="#page-top "></a>
                    </li>
        
                    <li class="page-scroll">
                        <a href="/sobre">Sobre nós <span class="glyphicon glyphicon-info-sign"></span></a></a>
                    
                    </li>
                    
                   <li class="page-scroll">
                        <a href="/contato">Contate-nos <span class="glyphicon glyphicon-comment"></span></a></a>
                    </li>
                    
                </ul>
            </div>     
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
</body>
    <!-- Header -->
    <header>
        <body>
        <div class="container" id="maincontent" tabindex="-1">
        
                <div class="col-md-6">
                    <img class="img-responsive"  src="css/LOGO SAFE RUN1.png" alt=""/>

                    <div class="intro-text">
                        <hr class="star-light">
                        <span class="skills">Sua carona Segura</span>
                    </div>
        
                </div>
<br>
<br>
<br>
<br>
            <div class="form-group">
             <h3>Login</h3>
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                      
             <label for="inputUsuario" </label>
      <input type="email" id="inputUsuario" class="form-control" name="email" placeholder="Usuário" required>
             
                                 </div>  
      <div class="form-group">
        <label for="inputPassword"Senha </label>
        <input type="password" id="inputSenha" class="form-control" name="password" placeholder="Senha" required > 
      
    

   <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu sua senha?
                                </a>  
                                 </div>     
    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
       <br>
            <a class="btn btn-md btn-safe"href="/register">Cadastrar</a>
        <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
    
   </form>
  </body>
       </header>
       <div class="wrapper">
 <a href="www.facebook.com"><img src="css/face.png" width="60" /></a>
<body>
        <div class="push"></div>
      </div>
      <footer class="footer"></footer>
      </body>
      
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
 </html>



