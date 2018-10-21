<!-- Idpn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDPn', 'Idpn:') !!}
    {!! Form::number('IDPn', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_1', 'Img 1:') !!}
    {!! Form::text('img_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_2', 'Img 2:') !!}
    {!! Form::text('img_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Img 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_3', 'Img 3:') !!}
    {!! Form::text('img_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Acepted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acepted', 'Acepted:') !!}
    <label class="checkbox-inline">
        <!-- { !! Form::hidden('acepted', false) !!} -->
        {!! Form::select('acepted', array('0' => 'Rechazar', '1' => 'Aceptar'), '0'); !!}
    </label>
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::textarea('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Bbody Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bBody', 'Bbody:') !!}
    {!! Form::textarea('bBody', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('blogs.index') !!}" class="btn btn-default">Cancel</a>
</div>
