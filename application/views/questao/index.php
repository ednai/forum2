
<?php if ($questoes == FALSE): ?>
    <h3>Nenhuma questão encontrada</h3>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>...</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questoes as $questao): ?>
                <tr>
                    <td><?=$questao['questao']?></td>
                    <td></td>
                    <td></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>    
<?php endif; ?>