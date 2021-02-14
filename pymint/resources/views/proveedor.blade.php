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
                <a class="nav-link" href="#">
                    <i class="fas fa-briefcase"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Divider antes del boton que esconde el menu-->
            <hr class="sidebar-divider d-none d-md-block">

@endsection
@section("main_content")

@if(session('id'))
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-2 text-gray-800">Proveedores</h1>
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-plus"></i> Registrar Proveedor</a>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info">
            Tabla de Proveedores
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
                        <th>Cuenta Bancaria</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($proveedores))
                    @foreach($proveedores as $id =>$proveedor)
                    <tr>
                        <td>{{$proveedor['nombre']}}</td>
                        <td>{{$proveedor['rfc']}}</td>
                        <td>{{$proveedor['direccion']}}</td>
                        <td>{{$proveedor['telefono']}}</td>
                        <td>{{$proveedor['cuenta_bancaria']}}</td>
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