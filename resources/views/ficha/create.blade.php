<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css" >

<form action="{{route('ficha.store')}}" method="post">
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
                         <label class="label" for="nomeC">Nome</label>
                         <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite o Nome Completo" name="nomeC" id="nomeC">
                        </div>
                    </div>
                    <div class="field">
                         <label class="label" for="cpf">CPF</label>
                         <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite seu CPF" name="cpf" id="cpf">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="assunto">Assunto</label>
                        <div class="control">
                            <div class="select">
                              <select>
                                  <option>Selecione o que desejas</option>
                                  <option>Saque via CPF</option>
                                  <option>Saque Aposentadoria</option>
                                  <option>Saque via Cheque</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                         <label class="label" for="data">Data</label>
                         <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Data de quando você quer agendar sua senha" name="data" id="data">
                        </div>
                    </div>
                    <div class="field">
                         <label class="label" for="hora">Horario</label>
                         <div class="control">
                            <input class="input is-rounded" type="text" placeholder="Digite o horario de atendimento. Ex.: 12:30" name="hora" id="hora">
                        </div>
                    </div>
                    <div class="field">
                      <div class="control">
                        <label class="checkbox">
                          <input type="checkbox">
                          Concordo com os <a href="#">termos e condições</a>
                        </label>
                      </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Enviar</button>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
</form>
