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
            <li class="nav-item">
                <a class="nav-link" href="{{route('clientes.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Divider antes del boton que esconde el menu-->
            <hr class="sidebar-divider d-none d-md-block">

@endsection
@section("main_content")
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-2 text-gray-800">Movimientos</h1>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">
                    Ingresos
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <a href="#">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;height: 100px;"src="/Fotos/ingresos.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">
                    Gastos
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <a href="#">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;height: 100px;"src="/Fotos/gastos.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection