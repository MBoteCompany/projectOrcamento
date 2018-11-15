<?php
//template name: pessoas
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
            <li class="tab col s3"><a class="active" href="#listapessoas">Procurar</a></li>
            <li class="tab col s3"><a href="#cadastropessoas">Cadastro completo</a></li>
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
                                <input class="with-gap tipoPessoa" name="tipoPessoa" type="radio" value="fisica" id="fisica" checked/>
                                <label for="fisica">Física</label>
                            </p>
                            <p>
                                <input class="with-gap tipoPessoa" name="tipoPessoa" type="radio" id="juridica" />
                                <label for="juridica">Jurídica</label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col l12 m12 s12">
                            <input id="nome" type="text">
                            <label for="nome" id="labelNomeRazao">Nome / Razão Social</label>
                        </div>
                        <div class="input-field col l12 m12 s12" id="nomeFantasia">
                            <input id="nome_fantasia" type="text">
                            <label for="nome_fantasia">Nome Fantasia</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="estadocivil">
                            <select>
                                <option value="" disabled selected>Estado Civil</option>
                                <option value="solteiro">Solteiro</option>
                                <option value="casado">Casado</option>
                                <option value="viuvo">Viúvo</option>
                                <option value="divorciado">Divorciado</option>
                            </select>
                            <label>Estado Civil</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="dataNasc">
                            <input type="text" class="datepicker" placeholder="<?php echo date("d / m / Y "); ?>" name="nasc">
                            <label for="nasc">Data de Nascimento</label>
                        </div>
                        <div class="input-field col l3 m6 s12" id="sexo">
                            <select>
                                <option value="" disabled selected>Sexo</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>
                            <label>Sexo</label>
                        </div>
                        <div class="input-field col l3 m6 s12">
                            <input type="text" id="nacionalidade" >
                            <label for="nacionalidade" id="labelNacionalidade">Nacionalidade</label>
                        </div>
                        <div class="input-field col l4 m6 s12">
                            <input id="cpfCnpj" class="" type="text">
                            <label for="cpfCnpj" id="labelCPFCNPJ">CPF / CNPJ</label>
                        </div>
                        <div class="input-field col rgie s12" >
                            <input id="rgIE" type="text">
                            <label for="rgIE" id="labelrgIE">RG / IE</label>
                        </div>
                        <div class="input-field col l2 m6 s12" id="ufRG">
                            <select>
                                <option value="" disabled selected>UF</option>
                                <option value="MG">MG</option>
                                <option value="SP">SP</option>
                                <option value="ES">ES</option>
                                <option value="RJ">RJ</option>
                            </select>
                            <label>UF</label>
                        </div>
                        <div class="input-field col l2 m6 s12" id="orgaoemissor">
                            <select>
                                <option value="" disabled selected>Orgão Emissor</option>
                                <option value="1">SSP</option>
                                <option value="2">PF</option>
                            </select>
                            <label>Orgão Emissor</label>
                        </div>
                        <div class="input-field col l8 s12">
                            <input id="nome" type="text">
                            <label for="nome">Endereço</label>
                        </div>
                        <div class="input-field col l2 m3 s12">
                            <input id="nome" type="text">
                            <label for="nome">Número</label>
                        </div>
                        <div class="input-field col l2 m3 s12">
                            <select>
                                <option value="" disabled selected>UF</option>
                                <option value="1">MG</option>
                                <option value="2">SP</option>
                                <option value="2">ES</option>
                                <option value="2">RJ</option>
                            </select>
                            <label>UF</label>
                        </div>
                        <div class="input-field col l2 m6 s12">
                            <input id="nome" class="cep" type="text">
                            <label for="nome">CEP</label>
                        </div>
                        <div class="input-field col l5 s12">
                            <input id="nome" type="text">
                            <label for="nome">Cidade</label>
                        </div>
                        <div class="input-field col l4 m6 s12">
                            <input id="nome" type="text">
                            <label for="nome">Telefone</label>
                        </div>
                        <div class="input-field col l4 m6 s12">
                            <input id="nome" type="text">
                            <label for="nome">Celular</label>
                        </div>
                        <div class="input-field col l4 s12">
                            <input id="nome" type="text">
                            <label for="nome">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1">Observações</label>
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
