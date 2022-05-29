<?php
include_once("config.php");
?>

<?php
function insert($data)
{
    include_once("config.php");
    if (empty($data)) {

        if (isset($data)) {

            $RazaoSocial  = $data["RazaoSocial"];
            $NomeFantasia = $data["NomeFantasia"];
            $cnpj = $data["CNPJ"];
            $Telefone = $data["Telefone"];
            $Email =  $data["Email"];
            $cep = $data["CEP"];
            $cidade = $data["Cidade"];
            $endereco = $data["Endereco"];
            $numero = $data["numero"];
            $bairro = $data["Bairro"];
            $uf = $data["UF"];
            $pessoa_fisica  = $data["pessoaFisica"];
            $pessoa_juridica = $data["pessoaJuridica"];
            $valor_receber = $data["valor_receber"];
            $valor_pagar  = $data["valor_pagar"];
            $data_inicio = $data["dataInicio"];
            $data_final = $data["dataFinal"];

            $sql = ("INSERT INTO cliente (
                            RazaoSocial,
                            NomeFantasia,
                            CNPJ,
                            Telefone,
                            Email,
                            CEP,
                            Cidade
                            Endereco,
                            numero,
                            Bairro,
                            UF,
                            pessoaFisica,
                            pessoaJuridica,
                            ValoraReceber,
                            ValoraPagar,
                            dataInicio,
                            dataFinal

                    ) VALUES (
                        :RazaoSocial,
                        :NomeFantasia,
                        :CNPJ,
                        :Telefone,
                        :Email,
                        :CEP,
                        :Cidade
                        :Endereco,
                        :numero,
                        :Bairro,
                        :UF,
                        :pessoaFisica,
                        :pessoaJuridica,
                        :ValoraReceber,
                        :ValoraPagar
                    ) ");

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":RazaoSocial", $RazaoSocial);
            $stmt->bindParam(":NomeFantasia", $NomeFantasia);
            $stmt->bindParam(":CNPJ", $cnpj);
            $stmt->bindParam(":Telefone", $Telefone);
            $stmt->bindParam(":Email", $Email);
            $stmt->bindParam(":CEP", $cep);
            $stmt->bindParam(":Cidade", $cidade);
            $stmt->bindParam(":Endereco", $endereco);
            $stmt->bindParam(":numero", $numero);
            $stmt->bindParam(":Bairro", $bairro);
            $stmt->bindParam(":UF", $uf);
            $stmt->bindParam(":pessoa-fisica", $pessoa_fisica);
            $stmt->bindParam(":pessoaJuridica", $pessoa_juridica);
            $stmt->bindParam(":ValoraReceber", $valor_receber);
            $stmt->bindParam(":ValoraPagar", $valor_pagar);
            $stmt->bindParam(":dataInicio", $data_inicio);
            $stmt->bindParam(":dataFinal", $data_final);

            if (!empty($data) && isset($stmt)) {
                try {
                    $stmt->execute();
                    $stmt->rowCount();
                } catch (PDOException $e) {
                    echo "Falha a executar: " . $e->getMessage();
                    throw new PDOException($e);
                }
            }
        }
    }
    print_r($data);
}
insert($_POST);

echo $_POST;
