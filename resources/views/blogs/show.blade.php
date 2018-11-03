@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 style="color:black;">
            Blog
            <a href="{!! route('blogs.index') !!}" class="btn btn-primary">Regresar</a>
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
