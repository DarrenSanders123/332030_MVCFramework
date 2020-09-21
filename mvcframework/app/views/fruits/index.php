<?php
$fmt = numfmt_create('nl_NL', NumberFormatter::CURRENCY);
?>

<h1>Fruit overzicht</h1>
<table>
    <tr>
        <th>id</th>
        <th>naam</th>
        <th>kleur</th>
        <th>prijs</th>
    </tr>

    <?php if (isset($data)) {
        foreach ($data['fruits'] as $fruit): ?>
            <tr>
                <td><?= $fruit->id ?></td>
                <td><?= $fruit->name ?></td>
                <td><?= $fruit->color ?></td>
                <td><?= numfmt_format_currency($fmt, amount: $fruit->price, currency: 'euro') ?></td>
            </tr>
        <?php endforeach;
    } ?>

</table>
