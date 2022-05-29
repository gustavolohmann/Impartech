<?php
    include_once("header.php");
?>
<form class="form-servico" action="../config/servico.php" method="POST">
    <div class="cad_cliente">
        <!--cad_cliente-->
        <div>
            <label for="RazaoSocial">Razão Social:</label>
            <input type="text" name="RazaoSocial" placeholder="Razão social">
        </div>
        <div>
            <label for="NomeFantasia">Nome Fantasia:</label>
            <input type="text" name="NomeFantasia" placeholder="Nome Fantasia">
        </div>
        <div>
            <label for="CNPJ">CNPJ:</label>
            <input type="text" name="CNPJ" placeholder="CNPJ">
        </div>
        <div>
            <label for="Telefone">Telefone:</label>
            <input type="text" name="Telefone" placeholder="Telefone">
        </div>
        <div>
            <label for="Email">Email:</label>
            <input type="text" name="Email" placeholder="Email">
        </div>
    </div>
    <!--fim cad_cliente-->

    <div class="endereco">
        <!--endereco-->
        <div>
            <label for="CEP">CEP:</label>
            <input type="text" name="CEP" placeholder="cep xxxxx-xxx">
            <button id="pesquisa-cep" type="button">Buscar cep</button>
        </div>
        <div>
            <label for="Cidade">cidade:</label>
            <input type="text" name="Cidade" placeholder="cidade">
        </div>
        <div>
            <label for="Endereco">Endereço:</label>
            <input type="text" name="Endereco" placeholder="Endereço">
        </div>
        <div>
            <label for="numero">Numero:</label>
            <input id="numeracao" type="text" name="numero" placeholder="Numero">
        </div>
        <div>
            <label for="Bairro">Bairro:</label>
            <input type="text" name="Bairro" placeholder="Bairro">
        </div>
        <div>
            <label for="UF">UF:</label>
            <input id="uf" type="text" name="UF" placeholder="UF">
        </div>
    </div>
    <!--fim endereco-->

    <div class="data-valor-nome">
        <!--funcionarios-->
        <div class="data-inicio">
            <label for="dataInicio">Data de inicio:</label>
            <input type="date" name="dataInicio">
        </div>
        <div class="data-termino">
            <label for="dataFinal">Data de termino:</label>
            <input type="date" name="dataFinal">
        </div>
        <!--fim funcionarios-->

        <div class="nome-funcionario">
            <!--nome-funcionario-->
            <label for="pessoaFisica">Pessoa fisica:</label>
            <select name="pessoaFisica" id="pessoa-fisica">
                <option value="">Gustavo</option>
            </select>
            <label for="pessoaJuridica">Pessoa juridico:</label>
            <select name="pessoaJuridica" id="pessoa-juridica">
                <option value="">Ultra maquinas</option>
            </select>
        </div>

        <div class="valores">
            <!--valores-->
            <div class="valor-receber">
                <label for="valor-receber">Valor a receber:</label>
                <input type="text" name="valor_receber" placeholder="Valor a receber">
            </div>
            <div class="valor-pagar">
                <label for="valor-pagar">Valor a pagar:</label>
                <input type="text" name="valor_pagar" placeholder="Valor a pagar">
            </div>
        </div>
        <!--fim valores-->
        <!--fim nome-funcionario-->
    </div>
    </div>
    <div class="submit">
        <button id="button" type="submit" name="button">Cadastrar ordem de serviço</button>
    </div>
</form>

<?php
    include_once("footer.php");
?>