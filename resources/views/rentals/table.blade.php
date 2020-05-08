<div class="table-responsive">
    <table class="table" id="rentals-table">
        <thead>
            <tr>
                <th>Rentaldate</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Customerid</th>
        <th>Vehicleid</th>
        <th>Insurancecompany</th>
        <th>Cost</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rentals as $rental)
            <tr>
                <td>{{ $rental->rentaldate }}</td>
            <td>{{ $rental->start_date }}</td>
            <td>{{ $rental->end_date }}</td>
            <td>{{ $rental->customerid }}</td>
            <td>{{ $rental->vehicleid }}</td>
            <td>{{ $rental->insurancecompany }}</td>
            <td>{{ $rental->cost }}</td>
                <td>
                    {!! Form::open(['route' => ['rentals.destroy', $rental->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rentals.show', [$rental->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('rentals.edit', [$rental->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
