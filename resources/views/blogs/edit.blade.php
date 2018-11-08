@extends('layouts.app')

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="">
                   {!! Form::model($blog, ['route' => ['blogs.update', $blog->IDBg], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('blogs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
