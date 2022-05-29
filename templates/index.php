<?php
include_once("header.php");
?>
<main>
    <table class="table" table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Funcionario</th>
                <th>Nome da empresa</th>
                <th>Status do pedido</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>358</td>
                <td>Pedro</td>
                <td>Ultra maqunas comercial</td>
                <td class="verify_status">
                    <div>
                        <select name="status" id="status">
                            <option value=""></option>
                        </select>
                    </div>
                    <div>
                        <button>detalhes</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</main>
<?php
include_once("footer.php");
?>