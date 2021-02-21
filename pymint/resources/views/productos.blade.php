@extends("welcome")
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
                <a class="nav-link" href="{{route('clientes.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Divider antes del boton que esconde el menu-->
            <hr class="sidebar-divider d-none d-md-block">

@endsection
@section('main_content')
@if(session('id'))
@if(session('mensaje'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
      {{session('mensaje')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-2 text-gray-800">Productos del proveedor {{$productos[1]['nombre_proveedor']}}</h1>
<a href="#" class="d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-plus"></i> Registrar Producto</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">
            Tabla de Productos
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($productos))
                    @foreach($productos as $id =>$producto)
                    <tr>
                        <td>{{$producto['nombre']}}</td>
                        <td><a class="btn btn-danger btn-circle btn-sm" href="" onclick="return confirm('<?php echo "¿Deseas borrar a ".$producto['nombre']?>')"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@endsection