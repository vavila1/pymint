@extends('welcome')
@section('menu')
<hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Tablero</span></a>
            </li>

            <!-- Divider despues de tablero -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('proveedores.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Proveedores</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-briefcase"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Divider antes del boton que esconde el menu-->
            <hr class="sidebar-divider d-none d-md-block">
@endsection
@section('main_content')
<h1 class="h3 mb-2 text-gray-800" align="center">Registrar Producto</h1>
<br>
<form class="user" method="POST" action="{{route('proveedores.productos.store',$id_proveedor)}}">
    @csrf
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" id="" placeholder="Nombre del producto" name="nombre" required>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-3">
            
        </div>
        <div class="col-sm-6">
            <button class="btn btn-info btn-user btn-block" type="submit">Guardar Registro</button>
        </div>
    </div>
</form>


@endsection