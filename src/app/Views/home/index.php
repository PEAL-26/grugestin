<?= $this->extend('_layout/default'); ?>
<?= $this->section('content_header'); ?>
<div class="col-sm-6">
    <h1><?= $subtitulo ?? ''; ?></h1>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item "><a href="<?= base_url('/'); ?>"><?= $titulo ?? ''; ?></a></li>
        <li class="breadcrumb-item active"><?= $subtitulo ?? ''; ?></li>
    </ol>
</div>
<?= $this->endsection(); ?>
<?= $this->section('content'); ?>


<?= $this->endsection(); ?>
<?= $this->section('script'); ?>

<?= $this->endsection(); ?>