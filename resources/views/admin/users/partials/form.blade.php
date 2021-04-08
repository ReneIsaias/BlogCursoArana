<div class="form-group">
    {!! Form::label('name', 'Nombre',) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el nombre del usuario']) !!}
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el email del usuario']) !!}
    @error('email')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingresa la contraseña del usuario']) !!}
    @error('password')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>
