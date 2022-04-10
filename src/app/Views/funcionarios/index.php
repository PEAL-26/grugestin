<?= $this->extend('_layout/default'); ?>
<?= $this->section('content_header'); ?>
<div class="col-sm-6">
    <h1><?= $titulo ?? ''; ?> </h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?= base_url($url); ?>"><?= $titulo ?? ''; ?></a></li>
        <li class="breadcrumb-item active"><?= $subTitulo ?? ''; ?></li>
    </ol>
</div>
<?= $this->endsection(); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <?= $subTitulo ?? ''; ?>
                    &nbsp;
                    <div class="btn-group">
                        <a class="btn btn-sm btn-success" href="<?= base_url($urlNovo); ?>"><i class="fas fa-plus"></i> Novo</a>
                        <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="<?= base_url($url . '/adicionar-varios'); ?>">Adicionar Vários</a>
                        </div>
                    </div>
                    <?php if (isset($pesquisar)) : ?>
                        <a href="<?= base_url($url); ?>">Limpar Pesquisa</a>
                    <?php endif; ?>
                </h3>
            </div>
            <div class="card-body">
                <table id="tabela" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Função</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listagem as $funcionario) : ?>
                            <tr>
                                <td><?= $funcionario->codigo ?? ''; ?></td>
                                <td><?= $funcionario->nome ?? ''; ?></td>
                                <td><?= $funcionario->funcao ?? ''; ?></td>
                                <td><?= $funcionario->estado ?? ''; ?></td>
                                <td class="botao-tabela">
                                    <a class="btn btn-sm btn-primary" href="<?= '' // base_url($urlEditar . $funcionario->id??''); 
                                                                            ?>"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-primary" href="<?= '' // base_url($urlEditar . $funcionario->id??''); 
                                                                            ?>"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-sm btn-danger" href="<?= '' // base_url($urlExcluir . $funcionario->id??''); 
                                                                            ?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white">
                <?php if (isset($paginacao)) echo $paginacao->links('default', 'paginacao'); ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>
<?= $this->section('script'); ?>

<?= $this->endsection(); ?>