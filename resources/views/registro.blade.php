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
    <link href="css/leoregistro.css" rel="stylesheet" type="text/css"/>
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
            
             <img src="css/LOGO SAFE RUN1.png" width="60" alt=""/>
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
      
            <h1>Faça seu Registro </h1>
        </body>
           <div class="container"> 
             <h1>Faça seu Registro </h1>
             <br>
             <br>
              <br>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

   <div class="col-md-4">
       <form method="post"> 
     <div class="form-group ">
         <label class="control-label" for="Nome">
       Nome:
      </label>
    
             <input class="form-control" id="name" name="Nome" placeholder="Exemplo" type="text" required/>
       </div>
             <br>
        <div class="form-group ">
      <label class="control-label " for="sobrenome">
       Sobrenome:
      </label>
            <input class="form-control" id="name" name="sobrenome" placeholder="Exemplo" type="text" required/>
     </div>
   
        <br>
      <tr>
             <td><strong>Estado: </strong></td>
             <td><select name="estado" id="estado" >
                     <option>Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
                 <br>
                 <br>
        <div class="form-group ">
      <label class="control-label" for="email">
       Email:
      </label>
         <input class="form-control" id="email" name="email" placeholder="Exemplo@exemplo.com" type="email" required />
     </div>
                 <div class="form-group ">
            <strong>Senha:</strong> 
<input type="password"class="form-control" placeholder="Senha" id="senha" required>
     </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmação de Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                 <fieldset id="sexo">
                    <legend>Sexo:</legend>
                        <input type="radio" name="tsexo" id="cmasc" required/><label for="cmasc">Masculino
                         <input type="radio" name="tsexo" id="cfem" required/><label for="cmasc">Feminino   
                             </fieldset>
                 <br>
                 <input <a class="btn btn-md btn-success" type="submit" value="Registrar">
                 <input <a class="btn btn-md btn-danger" type="reset" value="Apagar Dados">
                   
              
     
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



    