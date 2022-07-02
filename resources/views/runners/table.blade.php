<div class="table-responsive">
    <table class="table" id="runners-table">
        <thead>
        <tr>
            <th>N° Participante</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($runners as $runner)
            <tr>
                <td>{{ $runner->user_id }}</td>
            <td>{{ $runner->name }}</td>
            <td>{{ $runner->apellido }}</td>
            <td>{{ $runner->telefono }}</td>
          
                <td width="120">
                    {!! Form::open(['route' => ['runners.destroy', $runner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('runners.show', [$runner->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
