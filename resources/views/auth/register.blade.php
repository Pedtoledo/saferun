@extends('layouts.app')

@section('content')
<html lang="en">

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
    <link href="{{asset('css')}}/freelancer.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/leoregistro.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">


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

                <a class="navbar-brand" href="/login">Safe Run</a>

            
              <img src="{{asset('css')}}/LOGO SAFE RUN1.png" width="60" alt=""/>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
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
       <div class="container"> 
            <h1>Faça seu Registro </h1>
            <br /><br />
            <form class="form-horizontal" method="POST" action="{{ route('register') }} " enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="center">
                <p><h4>Informações do usuário:</h4></p><br />
                </div>

                <div class="row">

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;">
                        <p><h5>Nome:<h5></p>
                        <div class="form-group">
                        <label for="inputname"> </label>
                        <input type="text" id="inputname" class="form-control" name="name"  value="{{ old('name')}}"  required>
                        </div > 
                    </div> 
        
                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;">
                        <p><h5>Sobrenome:<h5></p>
                        <div class="form-group">
                        <label for="inputsobrenome"></label>
                        <input type="text" id="inputsobrenome" class="form-control" name="sobrenome" value="{{ old('sobrenome')}}"   required>
                        </div> 
                    </div>   

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;">
                        <p><h5> E-mail: <h5></p>
                        <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                        <label for="email"></label>
                        <input type="text" id="email" class="form-control" name="email" value="{{ old('email')}}" placeholder="email@email.com" required>
                            @if($errors->has('email'))
                                <span class="help-block" right>
                                    <strong>{{$errors->first('email')}}</strong>
                                </span>
                            @endif
                        </div>  
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;"> 
                        <p><h5> Celular: <h5></p>
                        <div  class="form-group {{$errors->has('telefone') ? ' has-error' : ''}}">
                        <label for="telefone"> </label>
                        <input type="text" id="telefone" class="form-control" name="telefone" value="{{ old('telefone')}}" placeholder="(XX)XXXXX-XXXX" OnKeyPress="formatar('##-#####-####', this)" maxlength="13" required>
                            @if($errors->has('telefone'))
                                <span class="help-block" right>
                                    <strong>{{$errors->first('telefone')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;">         
                        <p><h5> Cpf: <h5></p>
                        <div  class="form-group {{$errors->has('cpf') ? ' has-error' : ''}}">
                        <label for="cpf"> </label>
                        <input type="text" id="cpf" class="form-control" name="cpf" value="{{ old('cpf')}}" placeholder="XXX.XXX.XXX-XX" OnKeyPress="formatar('###.###.###-##', this)" maxlength="14" required>
                            @if($errors->has('cpf'))
                                <span class="help-block" right>
                                    <strong>{{$errors->first('cpf')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;">                    
                        <p><h5> RG: <h5></p>
                        <div class="form-group ">
                        <label for="inputrg"> </label>
                        <input type="text" id="inputrg" class="form-control" name="rg" value="{{ old('rg')}}" placeholder="XX.XXX.XXX-X"OnKeyPress="formatar('##.###.###-#', this)" maxlength="12" required>
                        </div>  
                    </div>

                <div class="row">

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;"> 
                    <p><h5>Data de nascimento:<h5></p>
                    <div class="form-group">  
                    <label for="datanasc"> </label>
                    <input type="date" id="datanasc" class="form-control"name="datanasc" required><br>
                    </div>
                    </div>

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;"> 
                        <p><h5>Senha: <h5></p>
                        <div class="form-group {{$errors->has('password') ? ' has-error' : ''}}">
                        <label for="inputpassword"> </label>
                        <input type="password" id="password" class="form-control" name="password" required>
                            @if($errors->has('password'))
                                <span class="help-block" right>
                                    <strong>{{$errors->first('password')}}</strong>
                                </span>
                            @endif
                        </div>  
                    </div>

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;"> 
                        <p><h5> Confirme sua senha:<h5></p>
                        <div class="form-group ">
                        <label for="password"> </label>
                        <input type="password" id="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="col-md-3" style="margin-left:4%; margin-right:4%;">   
                        <p><h5>Sexo: &nbsp;&nbsp;&nbsp;</h5></p>
                        <div class="">
                        <label for="sexo"> </label>&nbsp;&nbsp;
                        <input type="radio" name="sexo" value="masculino"required> Masculino  &nbsp;
	                    <input  type="radio" name="sexo" value="feminino" required> Feminino
                        </div>
                    </div>
        
                    <div class="">
                        <label>Escolha uma imagem de perfil</label>
                        <input type="file" name="image">
                        <br>
                
                 <button type="submit" class="btn btn-success">
                                Cadastrar
                                </button>
                                </form>
                 <input <a class="btn btn-md btn-danger" type="reset" value="Apagar Dados">
                   
                </div>
                </div>
     </body>
    </header>
 <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
 
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

@endsection
