        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('/'); ?>" class="brand-link elevation-4">
                <img src="<?= base_url('assets/images/PSLogo128x128.png'); ?>" alt="PSLogo" class="brand-image img-circle elevation-3" style="opacity: .8">

                <span class="brand-text font-weight-light">GRUGESTIN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?= base_url('/'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-stream"></i>
                                <p>
                                    Funcionários
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url('funcionarios'); ?>" class="nav-link">
                                        <i class="far nav-icon"></i>Listagem
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url('funcionarios/controle-presenca'); ?>" class="nav-link">
                                        <i class="far nav-icon"></i>Controle de Presença
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder-plus"></i>
                                <p>
                                    Cadastros
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('agencias'); ?>">
                                        <i class="far nav-icon"></i>Agencias
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('cartorio-registros'); ?>">
                                        <i class="far nav-icon"></i>Cartório de Registros
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('codigo-ccas'); ?>">
                                        <i class="far nav-icon"></i>Código CCAs
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('empreendimentos'); ?>">
                                        <i class="far nav-icon"></i>Empreendimentos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('parceiros'); ?>">
                                        <i class="far nav-icon"></i>Parceiros
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('proponentes'); ?>">
                                        <i class="far nav-icon"></i>Proponentes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('vendedores'); ?>">
                                        <i class="far nav-icon"></i>Vendedores
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('documentos'); ?>">
                                        <i class="far nav-icon"></i>Documentos
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon  fas fa-users"></i>
                                <p>
                                    Usuários
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('usuarios'); ?>">
                                        <i class="far nav-icon"></i>Usuários
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('perfis'); ?>">
                                        <i class="far nav-icon"></i>Perfis
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-folder-plus"></i>
                                <p>
                                    Definições
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('estados-civis'); ?>">
                                        <i class="far nav-icon"></i>Estados Civis
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('estados-funcionarios'); ?>">
                                        <i class="far nav-icon"></i>Estados de Funcionários
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('estados-operacoes'); ?>">
                                        <i class="far nav-icon"></i>Estados de Operações
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('estados-requisicoes'); ?>">
                                        <i class="far nav-icon"></i>Estados das Requisições
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('filiais'); ?>">
                                        <i class="far nav-icon"></i>Filiais
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('funcoes'); ?>">
                                        <i class="far nav-icon"></i>Funções
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tipos-funcoes'); ?>">
                                        <i class="far nav-icon"></i>Tipos de Funções
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('naturalidades'); ?>">
                                        <i class="far nav-icon"></i>Naturalidades
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tipos-documentos'); ?>">
                                        <i class="far nav-icon"></i>Tipos de Documentos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tipos-operacoes'); ?>">
                                        <i class="far nav-icon"></i>Tipos de Operações
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tipos-requisicoes'); ?>">
                                        <i class="far nav-icon"></i>Tipos de Requisições
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>