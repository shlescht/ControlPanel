@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 style="color:black;">
            Blog
            <a href="{!! route('blogs.index') !!}" class="btn btn-primary">Regresar</a>
            @if(Auth::user()->role == "Blogger")
              {!! $blog->acepted?'<p class="push-left">Aceptado</p>':'<p class="push-left">En espera</p>' !!}
            @elseif(Auth::user()->role == "Admin" || Auth::user()->role == "dev")
              {!! !$blog->acepted ? __("<a href=".url('blogs/'.$blog->IDBg.'/change')." class='btn btn-success btn-xs'>Aceptar</a>") : __("<a href=".url('blogs/'.$blog->IDBg.'/change')." class='btn btn-warning btn-xs'>Rechazar</a>") !!}
            @endif
        </h1>

    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">

                    @include('blogs.show_fields')

                </div>
            </div>
        </div>
    </div>
@endsection
