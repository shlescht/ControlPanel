<!-- User array -->
<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('user[email]', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('user[password]', ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('re-password', 're-Password:') !!}
    {!! Form::password('user[re-password]', ['class' => 'form-control']) !!}
</div>

<!-- People array  -->
<!-- P Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('p_name', 'P Name:') !!}
    {!! Form::text('person[p_name]', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Pa Field -->
<div class="form-group col-sm-6">
  {!! Form::label('ap_pa', 'Ap Pa:') !!}
  {!! Form::text('person[ap_pa]', null, ['class' => 'form-control']) !!}
</div>

<!-- Ap Ma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ap_ma', 'Ap Ma:') !!}
    {!! Form::text('person[ap_ma]', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Array -->
<div class="form-group col-sm-6">
  {!! Form::label('roles[r_name]', 'Tipo de Usuario:') !!}
  <!-- { !! Form::hidden('acepted', false) !!} -->
  {{Form::select('roles[r_name]', array('0' => 'Seleccione','1' => 'Desarrollador', '2' => 'Blogger','3' => 'Admin'), '0')}}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
