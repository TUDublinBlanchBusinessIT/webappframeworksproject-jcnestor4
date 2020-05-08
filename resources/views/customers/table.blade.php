<div class="table-responsive">
    <table class="table" id="customers-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Surname</th>
        <th>Customertype</th>
        <th>Dateofbirth</th>
        <th>Phone</th>
        <th>Email Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->firstname }}</td>
            <td>{{ $customer->surname }}</td>
            <td>{{ $customer->customertype }}</td>
            <td>{{ $customer->dateofbirth }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->email_address }}</td>
                <td>
                    {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customers.show', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('customers.edit', [$customer->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
