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
    <link href="{{asset('css')}}/leoindex1.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css')}}/freelancer.css" rel="stylesheet" type="text/css"/>
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
                <a class="navbar-brand" href="/admin">Safe Run</a>
            
              <img src="{{asset('css')}}/carrinho.png" width="60" alt=""/>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  
                <ul class="nav navbar-nav navbar-right">
              
                    <li class="page-scroll">
                        <a href="/admin">Painel de controle <span class="glyphicon glyphicon-info-sign"></span></a></a>
                
                    </li>
                    
             
              <form class="navbar-form navbar-left" method="POST" action="{{ route('usuariopesquisa')}}">
                 {{csrf_field()}}
        <div class="form-group">
          <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar">
        </div>

        <button type="submit" class="btn btn-success "><i class="glyphicon glyphicon-search"></i></button>

      </form>

                </ul>
                
            </div>     
          


                              
      
    </nav>  
<header>
<body>
     <div class="col-lg-4">
                  @if (Session::has('flash_message'))
<div class="alert alert-success alert-dismissable">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{Session::get('flash_message')}}</div>
@endif
</div>
</br>
</br>
        <div class="col-lg-12">
                     
            <h1 class="page-header">
            
                 Usuários
            </h1>
           
        </div>
    </div>
    <div class="container">
     <div class="col-lg-6">
       <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                         <th>E-mail</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->sobrenome}}</td>
                                        <td>{{$user->email}}</td>
                            <td>
                                           
                                         <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal{{$user->id}}">
  Excluir
</button>

<div class="modal fade" id="myModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cuidado!!</h4>
      </div>
      <div class="modal-body">
        Tem certeza que deseja excluir esse cara ? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <form style="display: inline;" action="{{route('usuarios.destroy', $user->id)}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="delete">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </td>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
 
  
    
           {!! $users->links()!!}  
           </body>
    
               
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
