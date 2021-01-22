<h1>Lista de Usuarios</h1>
<br>
@foreach ($usuarios as $usuario)
    <h2> {{ $usuario->getNome() }} </h2>
@endforeach

<a href="{{ route('usuario.create')}}"> cadastrar</a>
