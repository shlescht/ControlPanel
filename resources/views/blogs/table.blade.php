<table class="table table-responsive" id="blogs-table">
    <thead>
        <tr>
            <th>Idpn</th>
        <th>Img 1</th>
        <th>Img 2</th>
        <th>Img 3</th>
        <th>Acepted</th>
        <th>Note</th>
        <th>Bbody</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
        <tr>
            <td>{!! $blog->IDPn !!}</td>
            <td>{!! $blog->img_1 !!}</td>
            <td>{!! $blog->img_2 !!}</td>
            <td>{!! $blog->img_3 !!}</td>
            <td>{!! $blog->acepted !!}</td>
            <td>{!! $blog->note !!}</td>
            <td>{!! $blog->bBody !!}</td>
            <td>
                {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('blogs.show', [$blog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('blogs.edit', [$blog->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>