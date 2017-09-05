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
    <link href="css/leocarona.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

 
</head>


<body id="page-top" class="index"></body>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>   
                <a class="navbar-brand" href="#page-top">Safe Run</a>
            
              <img src="img/LOGO SAFE RUN1.png" width="60" alt=""/>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <li class="page-scroll">
                        <a href="contato.php">Sobre nós <span class="glyphicon glyphicon-info-sign"></span></a></a>
                    
                    </li>
                   <li class="page-scroll">
                        <a href="contato.php">Contate-nos <span class="glyphicon glyphicon-comment"></span></a></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
             <h1>Cadastro de Caronas</h1>
            </div>
            <br>
              <br>
                <br>
                  <br>
                    <br>  
                      <br>
                      
   
              <div class="col-md-4">
             <form method="post" action="carona.php">   
     <div class="form-group ">
         <label class="control-label" for="Nome">
       Nome :
      </label>
         <input class="form-control" id="name" name="Nome" placeholder="Exemplo" type="text" required/>
     </div>
        <div class="form-group ">
      <label class="control-label " for="Sobrenome">
       Sobrenome :
      </label>
            <input class="form-control" id="name" name="Sobrenome" placeholder="Exemplo" type="text" required/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email :
      </label>
      <input class="form-control" id="email" name="email" placeholder="Exemplo@gmail.com" type="email"  required/>
     </div>
        <div class="form-group ">
      <label class="control-label " for="Senha">
       Senha :
      </label>
      <input class="form-control" id="password" name="Senha" placeholder="Exemplo123" type="text"  required/>
     </div>
                 
      <button class="btn btn-success " type="submit">
        Cadastrar
       </button>
                
             </form>
        
              </div>
</div>

   </header>

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
