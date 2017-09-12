<<<<<<< HEAD
=======
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>


                <div class="panel-body">
Voce Logou com Sucesso
                </div>
            </div>
        </div>
    </div>
</div>
<html lang="en">
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c

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
    <link href="css/logado2.css" rel="stylesheet" type="text/css"/>
    <link href="css/freelancer.css" rel="stylesheet" type="text/css"/>
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
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>   
                <a class="navbar-brand" href="#page-top">Safe Run</a>
            
              <img src="css/carrinho.png" width="60" alt=""/>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
                <ul class="nav navbar-nav navbar-right">
<<<<<<< HEAD
               <li class="page-scroll">
                        <a href="/caronas">Todas as caronas <span class="glyphicon glyphicon-eye-open"></span></a></a>
                    </li>

                    <li class="page-scroll">

=======
              
                    <li class="page-scroll">
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
                        <a href="/sobre">Sobre nós <span class="glyphicon glyphicon-info-sign"></span></a></a>
                
                    </li>
                    
                   <li class="page-scroll">
                        <a href="/contato">Contate-nos <span class="glyphicon glyphicon-comment"></span></a></a>
                    </li>
            

<<<<<<< HEAD
                </ul>
                
              
=======

                   <form class="navbar-form navbar-left" method="POST" action="{{ route('pesquisa')}}">
                 {{csrf_field()}}
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
        </div>
        <button type="submit" class="btn btn-default "><i class="glyphicon glyphicon-search"></i></button>
      </form>

         
                </ul>
                
            </div>     
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
          
           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
<<<<<<< HEAD
                                     <a href="/perfil">
                                        Meu perfil
                                        </a>
=======
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sair
                                        </a>
<<<<<<< HEAD
                                       
=======
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
<<<<<<< HEAD
                         
=======
                            </div>
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
      
    </nav>
   
</body>
<<<<<<< HEAD

=======
 
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
 <div class="container">

        <div class="row">
            <div class="col-lg-12">
<<<<<<< HEAD
            <br>
             <br>
              <br>
               <br>
                <br>
                 <br>
                  
                <h1 class="page-header">Descrição da Carona        
                    <div class=text-right>
                      <a href="/caronas/create" <span class="glyphicon glyphicon-road"></span></a>
=======
                <h1 class="page-header">Descrição da Carona        
                    <div class=text-right>
                      <a href="/carona" <span class="glyphicon glyphicon-road"></span></a>
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
                    </div>
             
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
               
                <img src="css/12.jpg" width="500" alt=""/>
            </div>

            <div class="col-md-4">
                <h3>Descrição Geral</h3
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Project Details</h3>
                <ul>
                    <li>Lorem Ipsum</li>
                    <li>Dolor Sit Amet</li>
                    <li>Consectetur</li>
                    <li>Adipiscing Elit</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
        <!-- Related Projects Row -->
        <h3>Caronas Disponíveis</h3>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="css/12.jpg" alt="Los Angeles">
    </div>

    <div class="item">
       <img src="css/12.jpg" alt="Chicago">
    </div>

    <div class="item">
       <img src="css/12.jpg"alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!-- /.row -->
</body>
    </header>
     
   <!-- jQuery -->
<<<<<<< HEAD
  <script src="vendor/jquery/jquery.min.js"></script>
=======
    <script src="vendor/jquery/jquery.min.js"></script>
>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c

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


<<<<<<< HEAD
</html>
=======
</html>



>>>>>>> ea90b098c996fac77bcc3d29dad4e173b4dea60c
