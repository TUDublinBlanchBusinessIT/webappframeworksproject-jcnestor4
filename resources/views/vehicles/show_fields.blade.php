<!-- Manufacturer Field -->
<div class="form-group">
    {!! Form::label('manufacturer', 'Manufacturer:') !!}
    <p>{{ $vehicle->manufacturer }}</p>
</div>

<!-- Model Field -->
<div class="form-group">
    {!! Form::label('model', 'Model:') !!}
    <p>{{ $vehicle->model }}</p>
</div>

<!-- Class Field -->
<div class="form-group">
    {!! Form::label('class', 'Class:') !!}
    <p>{{ $vehicle->class }}</p>
</div>

<!-- Registration Field -->
<div class="form-group">
    {!! Form::label('registration', 'Registration:') !!}
    <p>{{ $vehicle->registration }}</p>
</div>

