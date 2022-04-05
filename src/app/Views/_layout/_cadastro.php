<?= $this->extend('_layout/default'); ?>
<?= $this->section('content_header'); ?>
<div class="col-sm-6">
    <h1><?= $subTitulo ?? ''; ?></h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="<?= base_url($url); ?>"><?= $titulo ?? ''; ?></a></li>
        <li class="breadcrumb-item active"><?= $subTitulo ?? ''; ?></li>
    </ol>
</div>
<?= $this->endsection(); ?>
<?= $this->section('content'); ?>

<?php
$class = ['class' => 'col s12'];
$atributo = ['id' =>  set_value('id', $entidade->id ?? '0')];
?>

<div class="row">
    <div class="col-12">
        <?= form_open($accao,  $class ?? [], $atributo ?? []); ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $titulo ?? ''; ?> - <?= $subTitulo ?? ''; ?></h3>
            </div>
            <div class="card-body">

                <?php if ($validacao) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <?= $validacao; ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($formularioGenerico)) : ?>
                    <?= $this->include('_include/formulario'); ?>
                <?php else : ?>
                    <?= $this->renderSection('campos'); ?>
                <?php endif; ?>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url($url); ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<?= $this->endsection(); ?>
<?= $this->section('script'); ?>

<?= $this->endsection(); ?>