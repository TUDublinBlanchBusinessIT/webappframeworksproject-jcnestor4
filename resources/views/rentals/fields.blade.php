<!-- Rentaldate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rentaldate', 'Rentaldate:') !!}
    {!! Form::date('rentaldate', null, ['class' => 'form-control','id'=>'rentaldate']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rentaldate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control','id'=>'end_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#end_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Customerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customerid', 'Customerid:') !!}
    {!! Form::number('customerid', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicleid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicleid', 'Vehicleid:') !!}
    {!! Form::number('vehicleid', null, ['class' => 'form-control']) !!}
</div>

<!-- Insurancecompany Field -->
<div class="form-group col-sm-6">
    {!! Form::label('insurancecompany', 'Insurancecompany:') !!}
    {!! Form::text('insurancecompany', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rentals.index') }}" class="btn btn-default">Cancel</a>
</div>
