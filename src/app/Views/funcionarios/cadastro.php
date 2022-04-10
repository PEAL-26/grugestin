<?= $this->extend('_layout/_cadastro'); ?>
<?= $this->section('css'); ?>
<link rel="stylesheet" href="<?= base_url("assets/adminlte/plugins/daterangepicker/daterangepicker.css") ?>">
<?= $this->endsection(); ?>
<?= $this->section('campos'); ?>

<div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="dados-pessoais-tab" data-toggle="pill" href="#dados-pessoais" role="tab" aria-controls="dados-pessoais" aria-selected="true">Dados Pessoais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dados-profissionais-tab" data-toggle="pill" href="#dados-profissionais" role="tab" aria-controls="dados-profissionais" aria-selected="false">Dados Profissionais</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="dados-documentais-tab" data-toggle="pill" href="#dados-documentais" role="tab" aria-controls="dados-documentais" aria-selected="false">Dados Documentais</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-four-tabContent">
            <!-- Dados Pessoais -->
            <div class="tab-pane fade show active" id="dados-pessoais" role="tabpanel" aria-labelledby="dados-pessoais-tab">

                <div class="row">
                    <div class="col-sm-2">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control" name="codigo" placeholder="Código" disabled="">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label for="nome_pai">Nome do Pai</label>
                            <input type="text" class="form-control" name="nome_pai" placeholder="Nome do Pai">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nome_mae">Nome da Mãe</label>
                            <input type="text" name="nome_mae" class="form-control" placeholder="Nome da Mãe">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" name="data_nascimento" id="data_nascimento" class="form-control datetimepicker-input" data-target="#reservationdate" data-inputmask-inputformat="dd/mm/yyyy" data-mask />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Estado Civil</label>
                            <select class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                                <input type="radio" name="sexo" id="sexo_m" value="M">
                                <label for="sexo_m">Masculino</label>
                            </div>
                            <div class="icheck-primary d-inline">
                                <input type="radio" name="sexo" id="sexo_f" value="F">
                                <label for="sexo_f">Femenino</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Província</label>
                            <select class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Naturalidade</label>
                            <select class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label>Telefone</label>
                    <div class="lista-telefone">
                        <div class="form-inline align-middle pb-2">
                            <div class="pr-2">
                                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                            </div>
                            <a href="#" class="text-danger sm remover-telefone"><i class="fa fa-trash"></i></a>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-sm add-telefone">
                            <i class="fa fa-plus"></i> Adicionar
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label>Morada</label>
                        <textarea class="form-control" rows="3" placeholder="Morada"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <label>Observações</label>
                        <textarea class="form-control" rows="3" placeholder="Observações"></textarea>
                    </div>
                </div>

            </div>

            <!-- Dados Profissionais -->
            <div class="tab-pane fade" id="dados-profissionais" role="tabpanel" aria-labelledby="dados-profissionais-tab">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Filial</label>
                            <select class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Função</label>
                            <select class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Salário Base</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <div class="input-group-text">0,00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="codigo">Ano de Vínculo</label>
                            <input type="text" class="form-control" name="ano_vinculo" placeholder="Ano de vínculo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Estado</label>
                            <select class="form-control select2" style="width: 100%;">
                            </select>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Dados Documentais -->
            <div class="tab-pane fade" id="dados-documentais" role="tabpanel" aria-labelledby="dados-documentais-tab">

                <div class="row">
                    <div class="col-sm-12">

                        <table id="tabela" class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th>Data de Emissão</th>
                                    <th>Data de Validade</th>
                                    <th>Descrição</th>
                                    <th>Arquivo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <input type="hidden" name="documentos[]">
                                    <th>
                                        <div class="form-group">
                                            <select class="form-control select2" style="width: 100%;">
                                            </select>
                                        </div>
                                    </th>
                                    <th><input type="date" name="" id=""></th>
                                    <th><input type="date" name="" id=""></th>
                                    <th><input type="text" name="" id="" disabled></th>
                                    <th><input type="file" name="" id=""> </th>
                                    <th class="text-center">
                                        <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </th>
                                </tr>
                                
                                <tr>
                                    <input type="hidden" name="documentos[]">
                                    <th>
                                        <div class="form-group">
                                            <select class="form-control select2" style="width: 100%;">
                                            </select>
                                        </div>
                                    </th>
                                    <th><input type="date" name="" id=""></th>
                                    <th><input type="date" name="" id=""></th>
                                    <th><input type="text" name="" id="" disabled></th>
                                    <th><input type="file" name="" id=""> </th>
                                    <th class="text-center">
                                        <a href="#" class="text-danger"><i class="fa fa-trash"></i></a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-primary btn-block">Adicionar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endsection(); ?>
<?= $this->section('script'); ?>
<script src="<?= base_url("assets/adminlte/plugins/daterangepicker/daterangepicker.js") ?>"></script>
<script>
    var countTelefones = 1
    $('.add-telefone').click(function() {
        addTelefone();
    });

    function addTelefone() {
        var html = '<div class="form-inline align-middle pb-2">' +
            '<div class="pr-2">' +
            '<input type="text" name="telefone" class="form-control" placeholder="Telefone">' +
            '</div>' +
            '<a href="#" class="text-danger sm remover-telefone"><i class="fa fa-trash"></i></a>' +
            '</div>';

        $('.lista-telefone').append(html);
    }

    $('.remover-telefone').click(function() {
        lista = $('.lista-telefone');
        // $(this).parent().remove();
        lista.removeChild(this);
    });


    $('#data_nascimento').datetimepicker({
        format: 'L'
    });
</script>
<?= $this->endsection(); ?>