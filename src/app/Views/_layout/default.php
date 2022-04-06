<!DOCTYPE html>
<html lang="pt-br">

<?= $this->include('_include/head'); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <?= $this->include('_include/header'); ?>
        <?= $this->include('_include/menu'); ?>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <?= $this->renderSection('content_header'); ?>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>
                &copy; <?= date('Y'); ?> - <a href="https://www.pealsystems.ao" target="_blank"> PEALSystems </a>
                
            </strong>
            <a href="" target="_blank">Facenbook</a>
            <a href="" target="_blank">Instagram</a>
            <a href="" target="_blank">Tweeter</a>
        </footer>
    </div>

    <?= $this->include('_include/foot'); ?>
    <?= $this->renderSection('script'); ?>
</body>
</html>