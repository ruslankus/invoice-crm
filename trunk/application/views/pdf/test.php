<h2>отчет</h2>
<h3>Карта : <?=$card->cart_number?></h3>
<p>Телефон : <?=$card->phone_number?></p>
<hr/>
<p>Периуд: <?=$date_from?>  до  <?=$date_to?></p>
<table>
    <?foreach($ops as $op):?>
        <tr>
            <td><?=$op->data?></td>
            <td><?=$op->op_names->op_name?></td>
            <td><?=$op->op_names->op_code?></td>
            <td><?=$op->op_names->op_cost?></td>
        </tr>
    <?endforeach;?>
</table>