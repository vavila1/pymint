@extends("welcome")
@section('menu')
<hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tablero</span></a>
            </li>

            <!-- Divider despues de tablero -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('proveedores.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Proveedores</span></a>
            </li>
             <hr class="sidebar-divider my-0">
             <li class="nav-item">
                <a class="nav-link" href="{{route('clientes.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Divider antes del boton que esconde el menu-->
            <hr class="sidebar-divider d-none d-md-block">

@endsection
@section("main_content")

@if(session('id'))
<h1>Bienvenid@ {{session('nombre')}}</h1>
@endif
@endsection

