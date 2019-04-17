<?=form_open('questao-salvar')?>
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="questão"/></td>
        </tr>
        
    </table>
    <input type="submit" value="Salvar"/>
<?=form_close()?>
<?=anchor('postagem','Voltar')?>