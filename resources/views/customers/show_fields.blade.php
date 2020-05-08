<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $customer->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $customer->surname }}</p>
</div>

<!-- Customertype Field -->
<div class="form-group">
    {!! Form::label('customertype', 'Customertype:') !!}
    <p>{{ $customer->customertype }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="form-group">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $customer->dateofbirth }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $customer->phone }}</p>
</div>

<!-- Email Address Field -->
<div class="form-group">
    {!! Form::label('email_address', 'Email Address:') !!}
    <p>{{ $customer->email_address }}</p>
</div>

