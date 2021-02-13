<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pymint - Iniciar Sesión</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container-register">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-3">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">¡Que bueno verte de nuevo!</h1>
                            </div>
                            @if(session('mensaje'))
                            {{session('mensaje')}}
                            @endif
                            <form class="user" method="POST" action="{{route('login.store')}}">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Correo" name="correo">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Contraseña" name="contra">
                                    </div>
                                    
                                </div>
                             
                                <button class="btn btn-info btn-user btn-block" type="submit">Iniciar Sesión</button>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">¿Se te olvidó tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{route('registrar.index')}}">¿Aún no tienes cuenta? ¡Regístrate!</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
     <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>

</body>

</html>