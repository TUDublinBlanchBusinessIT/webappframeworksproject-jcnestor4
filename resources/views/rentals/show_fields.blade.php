<!-- Rentaldate Field -->
<div class="form-group">
    {!! Form::label('rentaldate', 'Rentaldate:') !!}
    <p>{{ $rental->rentaldate }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $rental->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $rental->end_date }}</p>
</div>

<!-- Customerid Field -->
<div class="form-group">
    {!! Form::label('customerid', 'Customerid:') !!}
    <p>{{ $rental->customerid }}</p>
</div>

<!-- Vehicleid Field -->
<div class="form-group">
    {!! Form::label('vehicleid', 'Vehicleid:') !!}
    <p>{{ $rental->vehicleid }}</p>
</div>

<!-- Insurancecompany Field -->
<div class="form-group">
    {!! Form::label('insurancecompany', 'Insurancecompany:') !!}
    <p>{{ $rental->insurancecompany }}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    <p>{{ $rental->cost }}</p>
</div>

