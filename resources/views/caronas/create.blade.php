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
    <link href="http://localhost:8000/css/bootstrap.css" rel="stylesheet" type="text/css"/>  
    
    <!-- Theme CSS -->
    <link href="http://localhost:8000/css/freelancer.css" rel="stylesheet" type="text/css"/>
    <link href="http://localhost:8000/css/leoindex.css" rel="stylesheet" type="text/css"/>
    <link href="http://localhost:8000/css/botao.css" rel="stylesheet" type="text/css"/>
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
            
              <img src="http://localhost:8000/css/carrinho.png" width="70" alt=""/>
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
<header>
<body>
<div class="container">
<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
           
                Cadastrar caronas
            </h1>
            </div>
            <div class="row">
     <div class="col-lg-6">
        <form role="form" method="POST" action="{{ route('caronas.store')}}">
            {{csrf_field()}}
        
            <div class="form-group">
                <label>Nome</label>
                <input class="form-control" name="namecarona">
                 <input type="hidden" class="form-control" name="usuario_id" value="{{ Auth::user()->id }}" >
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
</div>
</div>
        </form>

</body>
</header>
    </div>

    </html>