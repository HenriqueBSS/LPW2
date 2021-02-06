<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" >

<form action="{{ route('usuario.store')}}" method="post">
    @csrf
    <div class="container">
         <div class="notification is-white">
         </div>
    </div>
    <div class="container">
         <div class="notification is-white">
         </div>
    </div>

    <div class="container">
        <div class="notification is-primary">
            <section class="hero">
                <div class="hero-body">

                    <div class="field">
                        <label class="label" for="nome">Nome</label>
                        <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite seu nome" name="nome" id="nome">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="sobrenome">Sobrenome</label>
                        <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite seu sobrenome" name="sobrenome" id="sobrenome">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="email">Email</label>
                        <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite um email para login" name="email" id="email">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="senha">Senha</label>
                        <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite uma Senha" name="senha" id="senha">
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Cadastre-se</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</form>
