<div class="table-responsive">
    <table class="table" id="vehicles-table">
        <thead>
            <tr>
                <th>Manufacturer</th>
        <th>Model</th>
        <th>Class</th>
        <th>Registration</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->manufacturer }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>{{ $vehicle->class }}</td>
            <td>{{ $vehicle->registration }}</td>
                <td>
                    {!! Form::open(['route' => ['vehicles.destroy', $vehicle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehicles.show', [$vehicle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('vehicles.edit', [$vehicle->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
