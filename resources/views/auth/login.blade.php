<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SAFE RUN</title>

    <!-- Linkagem CSS -->
    <link href="{{asset('css')}}/bootstrap.css" rel="stylesheet" type="text/css"/>  
    <link href="{{asset('css')}}/freelancer.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/leoindex.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/botao.css" rel="stylesheet" type="text/css"/>


    <!-- Linkagem de fontes -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

</head>



    <!-- Barra de navegação -->

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
            <!-- Barra de navegação para mobile -->

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>   
                <a class="navbar-brand">Safe Run</a>
            
              <img src="{{asset('css')}}/carrinho.png" width="70" alt=""/>
            </div>
            

        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                         <li class="page-scroll">
                        <a href="/home">Sobre nós <span class="glyphicon glyphicon-info-sign"></span></a></a>
                
                    </li>
    
                    
                </ul>
            </div>     
          
        </div>
       
    </nav>
    
</body>

    <!-- Começo da página -->
    <header>
    <body>
<br>
<br>
                <div class="col-md-5">
                    <img class="img-responsive"  src="{{asset('css')}}/LOGO SAFE RUN1.png" alt=""/>          
                        <hr class="star-light">
                        <span class="skills"><p> Sua carona segura!</span>

                    </div>
        
            
            <div class="">
            <br>
                <br>
                    <br>
                        <br>
                            <br>
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
                                 <a class="btn btn-md btn-safe"href="/register">Cadastrar</a>
                                 <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
    
      

   </form>
  </body>
       </header>
      
      
   <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Javascrispt bootstrap -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
 
 </html>



