<h1>Lista de clientes</h1>
<table class="table table-striped">

    <tr>
        <th>ID cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th colspan="2">Ações</th>
    </tr>

    <?php
    foreach($arrayClients as $client){
    ?>
    
        <tr>
            <td>
                <?=$client['idClient']?>
            </td>
            <td>
                <?=$client['name']?>
            </td>
            <td>
                <?=$client['email']?>
            </td>
            <td>
                <?=$client['phone']?>
            </td>
            <td>
                <?=$client['address']?>
            </td>
            <td>
                <a href="?controller=client&action=updateClient&id=<?=$client['idClient']?>" class="btn btn-warning">
                    Alterar
                </a>
            </td>
            <td>
                <a href="?controller=client&action=deleteClient&id=<?=$client['idClient']?>" class="btn btn-danger">
                    Deletar
                </a>
            </td>
    </tr>
  <?php 
    }
    ?>
</table>