<table class="table table-hover table-striped fs12">
    <thead>
        <tr> 
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año fabricación</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Nro. doc</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th style="width:150px;max-width: 150px;min-width: 150px;">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->placa }}</td>
            <td>{{ $cliente->marca }}</td>
            <td>{{ $cliente->modelo }}</td>
            <td>{{ Date::parse($cliente->fecha_fabricacion)->format("Y") }}</td> 
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido }}</td> 
            <td>{{ $cliente->nro_doc }}</td> 
            <td>{{ $cliente->correo }}</td> 
            <td>{{ $cliente->telefono }}</td> 
            <td>
                <a title="Detalle"  data-name="{{ $cliente->name }}" href="{{ route('cliente.show', $cliente->id) }}" class="btn btn-default show-entity  pl10 pr10 btn-show">
                    <i class="fa fa-lg fa-info"></i>
                </a>
                <a title="Editar" data-name="{{ $cliente->name }}"  href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-default edit-entity pl5 pr5 btn-edit">
                    <i class="fa fa-lg fa-pencil"></i>
                </a>
                <a title="Eliminar" data-name="{{ $cliente->name }}" data-id="{{$cliente->id }}" href="\#" class="btn btn-danger delete-entity pl5 pr5 btn-delete">
                    <i class="fa fa-lg fa-trash"></i>
                </a>                
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-center text-muted"><span>No se encontraron resultados</span></td>
        </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr class="bg-light">
        </tr>
    </tfoot>
</table>
