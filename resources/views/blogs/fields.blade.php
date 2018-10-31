<!-- Img 1 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('img_1', 'Imagen de Entrada:') !!}
    {!! Form::file('img_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 2 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('img_2', 'Banner:') !!}
    {!! Form::file('img_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 3 Field -->
<div class="form-group col-sm-3">
    {!! Form::label('img_3', 'Imagen de T&iacute;tulo:') !!}
    {!! Form::file('img_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Title', 'T&iacute;tulo:') !!}
    {!! Form::text('Title', null, ['class' => 'form-control']) !!}
</div>

<!-- Bbody Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bBody', 'Contenido:') !!}
    {!! Form::textarea('bBody', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('blogs.index') !!}" class="btn btn-default">Cancel</a>
</div>

<!-- Acepted Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('acepted', '0') !!}
</div>
<!-- Acepted Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('note', '&nbsp;') !!}
</div>
