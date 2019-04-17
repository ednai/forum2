<?=form_open('questao-atualizar')?>
    <input type="hidden" name="id" value="<?=$tb_questao['id']?>">
    <table>
        <tr>
            <td>Questão</td>
            <td><input type="text" name="questao" value="<?=$tb_questao['questao']?>"/></td>
        </tr>
        
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('postagem','Voltar')?>