<?php

use App\Generics\View;
?>

<thead>
    <tr>
        <?= View::table_head($tabelaGenerica ?? ''); ?>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php foreach ($listagem as $entidade) : ?>
        <tr>
            <?= View::table_body($entidade, $tabelaGenerica ?? ''); ?>
            <td class="botao-tabela">
                <a class="btn btn-sm btn-primary" href="<?= base_url($urlEdit . $entidade->id); ?>"><i class="fas fa-edit"></i></a>
                <a class="btn btn-sm btn-danger" href="javascript:remover('<?= base_url($urlDelete . $entidade->id); ?>')"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>