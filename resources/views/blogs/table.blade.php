<table class="table table-responsive" id="blogs-table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Estatus</th>
        <th>T&iacute;tulo</th>
        <th>Note</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
        <tr>
            <td>{!! $blog->IDBg !!}</td>
            <td>
              @if(Auth::user()->role == "Blogger")
                {!! $blog->acepted?'Aceptado':'En espera' !!}
              @elseif(Auth::user()->role == "Admin" || Auth::user()->role == "dev")
                {!! !$blog->acepted ? __("<a href=".url('blogs/'.$blog->IDBg.'/change')." class='btn btn-success btn-xs'>Aceptar</a>") : __("<a href=".url('blogs/'.$blog->IDBg.'/change')." class='btn btn-warning btn-xs'>Rechazar</a>") !!}
              @endif
            </td>
            <td>{!! $blog->Title !!}</td>
            <td>{!! $blog->note !!}</td>
            <td>
                {!! Form::open(['route' => ['blogs.destroy', $blog->IDBg], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('blogs.show', [$blog->IDBg]) !!}" class='btn btn-info btn-xs'>Ver</a>
                    <a href="{!! route('blogs.edit', [$blog->IDBg]) !!}" class='btn btn-primary btn-xs'>Editar</a>
                    {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Est&aacute; seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
