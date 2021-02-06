<h1>Lista de Usuarios</h1>
<br>
@foreach ($usuarios as $usuario)
    <h2>{{$usuario->getNome()}}</h2>
@endforeach

<a href="{{ route('usuario.create')}}"> cadastrar</a>

<form action="{{route('usuario.edit',$usuario->id)}}">
    <button type="submit">Editar</button>
</form>

<form action="{{route('usuario.destroy',$usuario->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Apagar</button>
</form>
