@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            ROL
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

                        @include('roles.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection