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
            <li class="nav-item">
                <a class="nav-link" href="{{route('movimientos.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Movimientos</span></a>
                </a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="{{route('proveedores.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Proveedores</span></a>
            </li>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('clientes.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Divider antes del boton que esconde el menu-->
            <hr class="sidebar-divider d-none d-md-block">

@endsection
@section("main_content")

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
<h1 class="h3 mb-2 text-gray-800">Clientes</h1>
<a href="{{route('clientes.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-plus"></i> Registrar Cliente</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">
            Tabla de Clientes
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>RFC</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($clientes))
                    @foreach($clientes as $id =>$cliente)
                    <tr>
                        <td>{{$cliente['nombre']}}</td>
                        <td>{{$cliente['rfc']}}</td>
                        <td>{{$cliente['direccion']}}</td>
                        <td>{{$cliente['telefono']}}</td>
                        <td><a class="btn btn-danger btn-circle btn-sm" href="{{route('eliminar_cliente',$cliente['id'])}}" onclick="return confirm('<?php echo "¿Deseas borrar a ".$cliente['nombre']?>')"><i class="fas fa-trash"></i></a></td>
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