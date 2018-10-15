<h2>Listar usuários</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tr>
        <td><?=$usuario['IdUsuario']?></td>
        <td><?=$usuario['NomeUsuario']?></td>
        <td><?=$usuario['Email']?></td>
        <td><a href="./usuario/visualizar/<?=$usuario['IdUsuario']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./usuario/editar/<?=$usuario['IdUsuario']?>" class="btn btn-info">edit</a></td>
        <td><a href="./usuario/deletar/<?=$usuario['IdUsuario']?>" class="btn btn-danger">del</a></td>
    </tr>
</table>


<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

