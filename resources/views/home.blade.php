@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                @if(Auth::user()->role == "dev" or Auth::user()->role == "Admin")
                  <div class="card-header">
                    <a href="{{Route::getFacadeRoot()->current()->uri()}}/../users">Usuarios</a>
                  </div>
                @endif
                <!-- @ if(Auth::user()->role) -->
                <div class="card-header">
                  <a href="{{Route::getFacadeRoot()->current()->uri()}}/../blogs">Blogs</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <b>
                      Bienvenido,
                    </b>
                    {{Auth::user()->name}}
                    <div>
                      @include('alerts.errors')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
