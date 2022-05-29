<?php
    include_once("header.php");
?>
<form class="form-prestador"  action="../config/configuracao.php" method="post">
    <div class="cad_prestador">
        <div>
            <label for="RazaoSocial">Razão Social:</label>
            <input type="text" name="RazaoSocial" placeholder="Razão social">
        </div>
        <div>
            <label for="NomeFantasia">Nome Fantasia:</label>
            <input type="text" name="NomeFantasia" placeholder="Nome Fantasia">
        </div>
        <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" name="cnpj" placeholder="CNPJ">
        </div>
        <div>
            <label for="Telefone">Telefone:</label>
            <input type="text" name="Telefone" placeholder="Telefone">
        </div>
    </div>
    <div class="endereco_prestador">
        <div>
            <label for="cep">CEP:</label>
            <input type="text" name="cep" placeholder="cep xxxxx-xxx">
            <button id="pesquisa-cep" type="button">Buscar cep</button>
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" placeholder="Endereço">
        </div>
        <div>
            <label for="numero">Numero:</label>
            <input id="numeracao" type="text" name="numero" placeholder="Numero">
        </div>
        <div>
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" placeholder="Bairro">
        </div>
        <div>
            <label for="uf">UF:</label>
            <input id="uf" type="text" name="uf" placeholder="UF">
        </div>
    </div>
    <div class="submit">
        <button id="button" type="submit">Cadastrar ordem de serviço</button>
    </div>
    </div>
</form>
<?php
include_once("footer.php");
?>