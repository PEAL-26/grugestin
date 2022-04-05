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
                    <a class="btn btn-sm btn-primary" href="<?= base_url($urlNovo); ?>"><i class="fas fa-plus"></i></a>
                </h3>
            </div>
            <div class="card-body">
                <table id="tabela" class="table table-bordered table-striped">
                    <?php if (isset($tabelaGenerica)) : ?>
                        <?= $this->include('_include/tabela'); ?>
                    <?php else : ?>
                        <thead>
                            <tr>
                                <?= $this->renderSection('table_head'); ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $this->renderSection('table_body'); ?>
                        </tbody>
                    <?php endif; ?>
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