<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'N° Participante:') !!}
    <p>{{ $runner->user_id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $runner->name }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $runner->apellido }}</p>
</div>

<!-- Telefono Field -->
<div class="col-sm-12">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $runner->telefono }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $runner->foto }}</p>
</div>

<!-- Antecedentes Field -->
<div class="col-sm-12">
    {!! Form::label('antecedentes', 'Antecedentes:') !!}
    <p>{{ $runner->antecedentes }}</p>
</div>

