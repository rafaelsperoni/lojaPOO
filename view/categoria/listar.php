<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
<?php
    $categorias = $dados['categorias'];
    foreach ($categorias as $categoria){
        echo '<tr>';
        echo '<td>'.$categoria->getId().'</td>';
        echo '<td>'.utf8_encode($categoria->getNome()).'</td>';
        echo '<td>'.utf8_encode($categoria->getDescricao()).'</td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>