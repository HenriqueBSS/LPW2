<form action="{{route('usuario.update', $usuario->id)}}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="nome">Nome</label>
        <input type="text"  name="nome" id="nome" value="{{$usuario->nome}}">
    </div>
    <div>
        <label for="sobrenome">Sobrenome</label>
        <input type="text"  name="sobrenome" id="sobrenome" value="{{$usuario->sobrenome}}">
    </div>
    <div>
        <label for="cpf">CPF</label>
        <input type="text"  name="cpf" id="cpf" value="{{$usuario->cpf}}">
    </div>
    <div>
        <button>VOltar</button>
        <button type="submit">Atualizar</button>
    </div>
</form>
