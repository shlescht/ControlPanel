<!-- Idur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDUr', 'Usuario:') !!}
    {!! Form::number('IDUr', null, ['class' => 'form-control']) !!}
</div>

<!-- Idrl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('IDRl', 'ROL:') !!}
    {!! Form::number('IDRl', null, ['class' => 'form-control']) !!}
</div>

<!-- P Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_name', 'Nombre:') !!}
    {!! Form::text('p_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Pa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_pa', 'Apellido Paterno:') !!}
    {!! Form::text('ap_pa', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Ma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_ma', 'Apellido Materno:') !!}
    {!! Form::text('ap_ma', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('people.index') !!}" class="btn btn-default">Cancel</a>
</div>
