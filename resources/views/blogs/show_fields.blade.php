<!-- Img 1 Field -->
<div class="form-group md-col-3">
    {!! Form::label('img_1', 'Imagen de Entrada:') !!}
    <p>{!! $blog->img_1 !!}</p>
</div>

<!-- Img 2 Field -->
<div class="form-group md-col-3">
    {!! Form::label('img_2', 'Banner:') !!}
    <p>{!! $blog->img_2 !!}</p>
</div>

<!-- Img 3 Field -->
<div class="form-group md-col-3">
    {!! Form::label('img_3', 'Imagen de T&iacute;tulo:') !!}
    <p>{!! $blog->img_3 !!}</p>
</div>

<!-- Acepted Field -->
<!-- <div class="form-group md-col-3">
    {!! Form::label('acepted', 'Acepted:') !!}
    <p>{!! $blog->acepted !!}</p>
</div> -->

<!-- Note Field -->
<div class="form-group md-col-3">
    {!! Form::label('note', 'Note:') !!}
    <p>{!! $blog->note !!}</p>
</div>

<!-- Title Field -->
<div class="form-group md-col-3">
    {!! Form::label('Title', 'Title:') !!}
    <p>{!! $blog->Title !!}</p>
</div>

<!-- Bbody Field -->
<div class="form-group md-col-3">
    {!! Form::label('bBody', 'Bbody:') !!}
    <p>{!! $blog->bBody !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group md-col-3">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $blog->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group md-col-3">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $blog->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group md-col-3">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $blog->deleted_at !!}</p>
</div>
