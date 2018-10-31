@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Creaci&oacute;n de Blog
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                    {!! Form::open(['route' => 'blogs.store', 'enctype' => 'multipart/form-data']) !!}
                    <!-- Idbg Field -->
                    <div class="row">
                        {!! Form::hidden('IDPn',$idpn) !!}
                        @include('blogs.fields')
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
