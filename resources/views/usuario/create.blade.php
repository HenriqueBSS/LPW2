<form action="{{ route('usuario.store')}}" method="post">
    @csrf
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome">
    </div>
    <div>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">
    </div>

    <button>Cadastrar</button>
</form>
