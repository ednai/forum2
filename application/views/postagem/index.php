<?=anchor('questao-novo','Nova Postagem')?>

<?php if ($postagens == FALSE): ?>
    <h3>Nenhuma postagem encontrada</h3>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>questao</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postagens as $postagem): ?>
                <tr>
                    <td><?=anchor('questao-visualizar/'.$tb_questao['id'], $tb_questao['questao'])?></td>
                    <td><?=anchor('questao-editar/'.$tb_questao['id'],'Editar')?>
                    <td><?=anchor('questao-excluir/'.$tb_questao['id'],'Excluir')?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>