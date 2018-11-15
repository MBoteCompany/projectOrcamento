<?php
//template name: veiculos
get_header();
?>
<div class="row">

    <div class="col right">
        <button class="btn accent-color">Incluir</button>
        <button class="btn dark-primary-color">Alterar</button>
        <button class="btn dark-primary-color">Remover</button>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <ul class="tabs tabs-fixed-width">
            <li class="tab col s3"><a  href="#listapessoas">Procurar</a></li>
            <li class="tab col s3"><a class="active" href="#cadastropessoas">Cadastro completo</a></li>
        </ul>
    </div>
    <div id="listapessoas" class="col s12">
        <section class="row" action="#">
            <div class="container">
                <form class="">
                    <div class="row">
                        <div class="input-field col l12 m12 s12">
                            <input id="nome" type="text">
                            <label for="pesquiarpessoa" id="pesquisar">Pesquisar</label>
                        </div>
                        <div class="col l2 right">
                            <button class="btn accent-color">PESQUISAR</button>
                        </div>
                    </div>
                </form> 
            </div>
        </section>
    </div>
    <div id="cadastropessoas" class="col s12">
        <section class="row" action="#">
            <div class="container">
                <form class="col l12">
                    <div class="row">
                        <div class="col ">
                            <p>
                                <input class="with-gap tipoVeiculo" name="tipoPessoa" type="radio" value="carro" id="carro" checked/>
                                <label for="carro">Carro</label>
                            </p>
                            <p>
                                <input class="with-gap tipoVeiculo" name="tipoPessoa" type="radio" value="moto" id="moto" />
                                <label for="moto">Moto</label>
                            </p>
                            <p>
                                <input class="with-gap tipoVeiculo" name="tipoPessoa" type="radio" value="caminhao" id="caminhao" />
                                <label for="caminhao">Caminhão</label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l6 m12 s12">
                            <input id="nome" type="text">
                            <label for="nome" id="labelNomeRazao">Marca</label>
                        </div>
                        <div class="input-field col l6 m12 s12" id="nomeFantasia">
                            <input id="nome_fantasia" type="text">
                            <label for="nome_fantasia">Modelo</label>
                        </div>
                        <div class="input-field col l4 m12 s12" id="nomeFantasia">
                            <input id="nome_fantasia" type="text">
                            <label for="nome_fantasia">Kilometragem</label>
                        </div>
                        <div class="input-field col l4 m12 s12" id="nomeFantasia">
                            <input id="nome_fantasia" type="text">
                            <label for="nome_fantasia">Potência</label>
                        </div>
                        <div class="input-field col l4 m12 s12" id="nomeFantasia">
                            <input id="nome_fantasia" type="text">
                            <label for="nome_fantasia">Cilindradas</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="estadocivil">
                            <select>
                                <option value="" disabled selected>Tipo de Combustível</option>
                                <option value="1">Gasolina</option>
                                <option value="2">Álcool</option>
                                <option value="3">Diesel</option>
                                <option value="3">Flex</option>
                                <option value="3">Gás Natural</option>
                            </select>
                            <label>Combustível</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="estadocivil">
                            <select>
                                <option value="" disabled selected>Câmbio</option>
                                <option value="3">Manual</option>
                                <option value="1">Automático</option>
                                <option value="2">Semi-automático</option>
                            </select>
                            <label>Câmbio</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="dataNasc">
                            <input type="text" class="datepicker" placeholder="<?php echo date("d / m / Y "); ?>" name="nasc">
                            <label for="nasc">Ano do Veículo</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="sexo">
                            <select>
                                <option value="" disabled selected>Tipo da Carroceria</option>
                                <option value="1">Passeio</option>
                                <option value="2">Conversível</option>
                                <option value="2">Pick-up</option>
                                <option value="2">SUV</option>
                                <option value="2">Utilitário</option>
                                <option value="2">Sedan</option>
                                <option value="2">Hatch</option>
                            </select>
                            <label>Carroceria</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="sexo">
                            <select>
                                <option value="" disabled selected>Estilo</option>
                                <option value="1">Custom</option>
                                <option value="2">Esportiva</option>
                                <option value="2">Naked</option>
                                <option value="2">Off Road</option>
                                <option value="2">Scooter</option>
                                <option value="2">Street</option>
                                <option value="2">Touring</option>
                                <option value="2">Trail</option>
                                <option value="2">Utilitária</option>
                            </select>
                            <label>Estilo</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="sexo">
                            <select>
                                <option value="" disabled selected>Tipo de Partida</option>
                                <option value="1">Elétrica</option>
                                <option value="2">Pedal</option>
                                <option value="2">Pedal e Elétrica</option>
                            </select>
                            <label>Tipo de Partida</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="sexo">
                            <select>
                                <option value="" disabled selected>Número de Marchas</option>
                                <option value="1">4</option>
                                <option value="2">5</option>
                                <option value="2">6</option>
                                <option value="2">Automático</option>
                            </select>
                            <label>Tipo de Partida</label>
                        </div>
                        <div class="input-field col l4 m6 s12">
                            <input type="text" id="nome" >
                            <label for="nome" id="">Placa</label>
                        </div>


                        <div class="input-field col l2 m6 s12" id="ufRG">
                            <select>
                                <option value="" disabled selected>UF</option>
                                <option value="1">MG</option>
                                <option value="2">SP</option>
                                <option value="2">ES</option>
                                <option value="2">RJ</option>
                            </select>
                            <label>UF</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="orgaoemissor">
                            <select>
                                <option value="" disabled selected>Número de Portas</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="2">4</option>
                            </select>
                            <label>Número de Portas</label>
                        </div>
                        <div class="input-field col l3 s12">
                            <input id="nome" type="text">
                            <label for="nome">Cor</label>
                        </div>
                        <div class="input-field col l12 m6 s12">
                            <input id="cpfCnpj" class="" type="text">
                            <label for="cpfCnpj" id="labelCPFCNPJ">Preço FIPE</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Observações</label>
                        </div>
                        <div class="col">
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Air bag</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Alarme</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Ar condicionado</label>
                            </p>
                        </div>
                        <div class="col"
                             <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Trava elétrica</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Vidro elétrico</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Som</label>
                            </p>
                        </div>
                        <div class="col">
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Sensor de ré</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Câmera de ré</label>
                            </p>
                            <p>
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                <label for="filled-in-box">Blindado</label>
                            </p>
                        </div>
                    </div>

            </div>
            </form> 
    </div>
</section>  
</div>
</div>
</main>
<?php
get_footer();
