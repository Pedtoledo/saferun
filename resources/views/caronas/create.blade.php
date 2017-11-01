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
    <link href="http://localhost:8000/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Theme CSS -->
    <link href="http://localhost:8000/css/freelancer.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/css/leoindex.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost:8000/css/botao.css" rel="stylesheet" type="text/css" />
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
                <a class="navbar-brand" href="/caronas">Safe Run</a>

                <img src="http://localhost:8000/css/carrinho.png" width="70" alt="" />
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top "></a>
                    </li>

                    <li class="page-scroll">
                        <a href="/sobre">Sobre a equipe <span class="glyphicon glyphicon-info-sign"></span></a></a>

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

<header>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="container">
           <div class="row">
                <div class="col-lg-12">
         
                    <h1 class="page-header" style="color: #191d32;">
                        Cadastrar caronas
                    </h1>
                </div>
            </div> 

                <form action="{{ route('caronas.store')}}" enctype="multipart/form-data" method="POST">

                    {{csrf_field()}}
<div class="row">
        <div class="col-md-6">

            <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <label>Nome:</label>
                            <input class="form-control" name="namecarona">
                            <input type="hidden" class="form-control" name="usuario_id" value="{{ Auth::user()->id }}">
                    </div>
                        </div>
            </div>

    
            <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <label for="saida">De:</label>
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
            </div>

            <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <label for="chegada">Para:</label>
                            <select class="form-control" name="chegada" id="sel1">
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
            </div>
            
            </div>
            <div class="col-md-6">
                    <div class="col-lg-12">
                        <div class="">
                            <label for="desccarona">Descrição da carona:</label>
                            <textarea class="form-control" rows="8" name="desccarona" id="desccarona"></textarea>
                        </div>
                    </div>
            </div>
        </div>
        <hr>
            <div class="row">
                        <body>
                            <div class="col-lg-6">
                                <div class="">
                                 <span class="glyphicon glyphicon-dashboard"></span>   <label>Hora saída:</label>
                                    <input type="Time" class="form-control" name="hrsaida">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                   <span class="glyphicon glyphicon-dashboard"></span> <label>Hora chegada:</label>
                                    <input type="Time" class="form-control" name="hrchegada">
                                </div>
                            </div>
            </div>
            <div class="row">
                              <div class="col-lg-6">
                                <div class="">
                                    <span class="glyphicon glyphicon-calendar"></span>  <label>Dia saida:</label>
                                    <input type="date" class="form-control" name="datasaida">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="">
                                 <span class="glyphicon glyphicon-calendar"></span>   <label>Dia chegada:</label>  
                                  <input type="date" class="form-control" name="datachegada">
                                </div>
                            </div>
            </div>
                        <div class="row">
                        <div class="col-md-3">
                        
                        <label><h4>Escolha uma imagem</h4></label>
                        <div style="color:black;">
                        <input type="file" name="image">
                        <br>
                        </div>
                        </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Cadastrar</button>

                        </body>

                    </div>
                </form>


    </body>
</header>
</div>

</html>