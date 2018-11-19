<table class="table table-responsive" id="people-table">
    <thead>
        <tr>
            <th>Idur</th>
        <th>Idrl</th>
        <th>P Name</th>
        <th>Ap Ma</th>
        <th>Ap Pa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($people as $person)
        <tr>
            <td>{!! $person->IDUr !!}</td>
            <td>{!! $person->IDRl !!}</td>
            <td>{!! $person->p_name !!}</td>
            <td>{!! $person->ap_ma !!}</td>
            <td>{!! $person->ap_pa !!}</td>
            <td>
                {!! Form::open(['route' => ['people.destroy', $person->IDPn], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('people.show', [$person->IDPn]) !!}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('people.edit', [$person->IDPn]) !!}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>