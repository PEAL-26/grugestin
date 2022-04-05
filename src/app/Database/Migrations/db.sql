/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     06/12/2021 16:58:48                          */
/*==============================================================*/


/*==============================================================*/
/* Table: agendamento                                           */
/*==============================================================*/
create table agendamento
(
   agendamento_id       bigint not null auto_increment  comment '',
   paciente_id          bigint not null  comment '',
   tipo_consulta_id     int not null  comment '',
   pessoa_id            bigint not null  comment 'Medico Solicitante',
   forma_marketingid    int not null  comment '',
   pedido               varchar(254) not null  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (agendamento_id)
);

/*==============================================================*/
/* Table: agendamento_historico                                 */
/*==============================================================*/
create table agendamento_historico
(
   agendamento_id       bigint not null  comment '',
   agendamento_status_id int not null  comment '',
   data_hora            datetime not null  comment '',
   primary key (agendamento_id, agendamento_status_id)
);

/*==============================================================*/
/* Index: index_agendamento_historico_id                        */
/*==============================================================*/
create unique index index_agendamento_historico_id on agendamento_historico
(
   agendamento_id,
   agendamento_status_id
);

/*==============================================================*/
/* Table: agendamento_status                                    */
/*==============================================================*/
create table agendamento_status
(
   agendamento_status_id int not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (agendamento_status_id)
);

/*==============================================================*/
/* Index: index_agendamento_status_nome                         */
/*==============================================================*/
create unique index index_agendamento_status_nome on agendamento_status
(
   nome
);

/*==============================================================*/
/* Table: carteira_pessoa_funcionario                           */
/*==============================================================*/
create table carteira_pessoa_funcionario
(
   pessoa_id            bigint not null  comment '',
   carteira_tipo_id     int not null  comment '',
   numero               varchar(50) not null  comment '',
   data_emissao         date not null  comment '',
   primary key (numero)
);

/*==============================================================*/
/* Index: index_carteira_pessoa_fisica_numero                   */
/*==============================================================*/
create unique index index_carteira_pessoa_fisica_numero on carteira_pessoa_funcionario
(
   numero
);

/*==============================================================*/
/* Table: carteira_tipo                                         */
/*==============================================================*/
create table carteira_tipo
(
   carteira_tipo_id     int not null auto_increment  comment '',
   nome                 varchar(40) not null  comment '',
   primary key (carteira_tipo_id)
);

/*==============================================================*/
/* Index: index_carteira_tipo_nome                              */
/*==============================================================*/
create unique index index_carteira_tipo_nome on carteira_tipo
(
   nome
);

/*==============================================================*/
/* Table: consulta                                              */
/*==============================================================*/
create table consulta
(
   consulta_id          bigint not null auto_increment  comment '',
   agendamento_id       bigint not null  comment '',
   data_hora_inicio     datetime not null  comment '',
   data_hora_final      datetime not null  comment '',
   local_atendimento    text  comment '',
   consulta_sem_triagem bool  comment '',
   sintomas             text  comment '',
   relatos              text  comment '',
   estado_geral         text  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (consulta_id)
);

/*==============================================================*/
/* Index: index_agendamento_id                                  */
/*==============================================================*/
create index index_agendamento_id on consulta
(
   agendamento_id
);

/*==============================================================*/
/* Table: contacto                                              */
/*==============================================================*/
create table contacto
(
   contacto_id          int not null auto_increment  comment '',
   contacto_tipo_id     int not null  comment '',
   numero               varchar(100) not null  comment '',
   primary key (contacto_id)
);

/*==============================================================*/
/* Index: index_contacto_numero                                 */
/*==============================================================*/
create unique index index_contacto_numero on contacto
(
   numero
);

/*==============================================================*/
/* Table: contacto_tipo                                         */
/*==============================================================*/
create table contacto_tipo
(
   contacto_tipo_id     int not null auto_increment  comment '',
   nome                 varchar(20) not null  comment '',
   primary key (contacto_tipo_id)
);

/*==============================================================*/
/* Index: index_contacto_tipo_nome                              */
/*==============================================================*/
create unique index index_contacto_tipo_nome on contacto_tipo
(
   nome
);

/*==============================================================*/
/* Table: contrato_peiodo                                       */
/*==============================================================*/
create table contrato_peiodo
(
   contrato_periodo_id  int not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (contrato_periodo_id)
);

/*==============================================================*/
/* Index: index_contrato_peiodo_nome                            */
/*==============================================================*/
create unique index index_contrato_peiodo_nome on contrato_peiodo
(
   nome
);

/*==============================================================*/
/* Table: contrato_status                                       */
/*==============================================================*/
create table contrato_status
(
   contrato_status_id   int not null auto_increment  comment '',
   nome                 varchar(8) not null  comment '',
   primary key (contrato_status_id)
);

/*==============================================================*/
/* Index: index_contratostatusnome                              */
/*==============================================================*/
create unique index index_contratostatusnome on contrato_status
(
   nome
);

/*==============================================================*/
/* Table: cor                                                   */
/*==============================================================*/
create table cor
(
   cor_id               int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   primary key (cor_id)
);

/*==============================================================*/
/* Index: index_cor_nome                                        */
/*==============================================================*/
create unique index index_cor_nome on cor
(
   nome
);

/*==============================================================*/
/* Table: endereco                                              */
/*==============================================================*/
create table endereco
(
   endereco_id          bigint not null auto_increment  comment '',
   cep                  varchar(18) not null  comment '',
   endereco             varchar(254)  comment '',
   bairro               varchar(80)  comment '',
   numero               varchar(20)  comment '',
   complemento          varchar(150)  comment '',
   estado               varchar(50)  comment '',
   cidade               varchar(100)  comment '',
   observacao           varchar(100)  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (endereco_id)
);

/*==============================================================*/
/* Index: index_endereco_cep                                    */
/*==============================================================*/
create index index_endereco_cep on endereco
(
   cep
);

/*==============================================================*/
/* Table: especialidade                                         */
/*==============================================================*/
create table especialidade
(
   especialidade_id     int not null auto_increment  comment '',
   nome                 varchar(70) not null  comment '',
   primary key (especialidade_id)
);

/*==============================================================*/
/* Index: index_especialidade_nome                              */
/*==============================================================*/
create unique index index_especialidade_nome on especialidade
(
   nome
);

/*==============================================================*/
/* Table: especie                                               */
/*==============================================================*/
create table especie
(
   especie_id           int not null auto_increment  comment '',
   nome                 varchar(60) not null  comment '',
   primary key (especie_id)
);

/*==============================================================*/
/* Index: index_especie_nome                                    */
/*==============================================================*/
create unique index index_especie_nome on especie
(
   nome
);

/*==============================================================*/
/* Table: exame                                                 */
/*==============================================================*/
create table exame
(
   exame_id             int not null auto_increment  comment '',
   nome                 varchar(100) not null  comment '',
   primary key (exame_id)
);

/*==============================================================*/
/* Index: index_exame_nome                                      */
/*==============================================================*/
create unique index index_exame_nome on exame
(
   nome
);

/*==============================================================*/
/* Table: exame_fisico                                          */
/*==============================================================*/
create table exame_fisico
(
   exame_fisico_id      bigint not null auto_increment  comment '',
   agendamento_id       bigint  comment '',
   diagnostico_presuntivo text  comment '',
   diagnostico_conclusivo text  comment '',
   procedimentos_realizados text  comment '',
   imunizacoes          text  comment '',
   conduta              text  comment '',
   primary key (exame_fisico_id)
);

/*==============================================================*/
/* Table: exame_status                                          */
/*==============================================================*/
create table exame_status
(
   exame_status_id      int not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (exame_status_id)
);

/*==============================================================*/
/* Index: index_exame_status_nome                               */
/*==============================================================*/
create unique index index_exame_status_nome on exame_status
(
   nome
);

/*==============================================================*/
/* Table: expectativa_vida                                      */
/*==============================================================*/
create table expectativa_vida
(
   expectativa_vida_id  int not null auto_increment  comment '',
   nome                 varchar(60) not null  comment '',
   primary key (expectativa_vida_id)
);

/*==============================================================*/
/* Index: index_espectativa_vida_nome                           */
/*==============================================================*/
create unique index index_espectativa_vida_nome on expectativa_vida
(
   nome
);

/*==============================================================*/
/* Table: forma_marketing                                       */
/*==============================================================*/
create table forma_marketing
(
   forma_marketing_id   int not null auto_increment  comment '',
   nome                 varchar(150) not null  comment '',
   primary key (forma_marketing_id)
);

/*==============================================================*/
/* Index: index_forma_marketing_nome                            */
/*==============================================================*/
create unique index index_forma_marketing_nome on forma_marketing
(
   nome
);

/*==============================================================*/
/* Table: funcao                                                */
/*==============================================================*/
create table funcao
(
   funcao_id            int not null auto_increment  comment '',
   nome                 varchar(40) not null  comment '',
   primary key (funcao_id)
);

/*==============================================================*/
/* Index: index_funcao_nome                                     */
/*==============================================================*/
create unique index index_funcao_nome on funcao
(
   nome
);

/*==============================================================*/
/* Table: grupo                                                 */
/*==============================================================*/
create table grupo
(
   grupo_id             int not null auto_increment  comment '',
   nome                 varchar(100) not null  comment '',
   primary key (grupo_id)
);

/*==============================================================*/
/* Index: index_grupo_nome                                      */
/*==============================================================*/
create unique index index_grupo_nome on grupo
(
   nome
);

/*==============================================================*/
/* Table: modulo                                                */
/*==============================================================*/
create table modulo
(
   modulo_id            int not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (modulo_id)
);

/*==============================================================*/
/* Index: index_modulo_nome                                     */
/*==============================================================*/
create unique index index_modulo_nome on modulo
(
   nome
);

/*==============================================================*/
/* Table: paciente                                              */
/*==============================================================*/
create table paciente
(
   paciente_id          bigint not null auto_increment  comment '',
   paciente_tipo_id     int not null  comment '',
   nome                 varchar(80) not null  comment '',
   sexo                 char(1) not null  comment '',
   data_nascimento      date not null  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (paciente_id)
);

/*==============================================================*/
/* Index: index_paciente                                        */
/*==============================================================*/
create index index_paciente on paciente
(
   nome
);

/*==============================================================*/
/* Table: paciente_contacto                                     */
/*==============================================================*/
create table paciente_contacto
(
   paciente_id          bigint not null  comment '',
   contacto_id          int not null  comment '',
   primary key (paciente_id, contacto_id)
);

/*==============================================================*/
/* Index: index_paciente_id_contacto_id                         */
/*==============================================================*/
create unique index index_paciente_id_contacto_id on paciente_contacto
(
   paciente_id,
   contacto_id
);

/*==============================================================*/
/* Table: paciente_dependente                                   */
/*==============================================================*/
create table paciente_dependente
(
   paciente_id          bigint not null  comment '',
   dependente_id        bigint not null  comment '',
   dependente_tipo_id   int not null  comment '',
   primary key (paciente_id, dependente_id)
);

/*==============================================================*/
/* Index: index_paciente_dependente_id                          */
/*==============================================================*/
create unique index index_paciente_dependente_id on paciente_dependente
(
   paciente_id,
   dependente_id
);

/*==============================================================*/
/* Table: paciente_dependente_tipo                              */
/*==============================================================*/
create table paciente_dependente_tipo
(
   paciente_dependente_tipo_id int not null auto_increment  comment '',
   paciente_tipo_id     int not null  comment '',
   nome                 varchar(25) not null  comment '',
   primary key (paciente_dependente_tipo_id)
);

/*==============================================================*/
/* Index: index_paciente_dependente_tipo_nome                   */
/*==============================================================*/
create unique index index_paciente_dependente_tipo_nome on paciente_dependente_tipo
(
   nome
);

/*==============================================================*/
/* Table: paciente_endereco                                     */
/*==============================================================*/
create table paciente_endereco
(
   paciente_id          bigint not null  comment '',
   endereco_id          bigint not null  comment '',
   primary key (paciente_id, endereco_id)
);

/*==============================================================*/
/* Index: index_paciente_id_endereco_id                         */
/*==============================================================*/
create unique index index_paciente_id_endereco_id on paciente_endereco
(
   paciente_id,
   endereco_id
);

/*==============================================================*/
/* Table: paciente_humano                                       */
/*==============================================================*/
create table paciente_humano
(
   paciente_id          bigint not null  comment '',
   paciente_humano_tipo_id int  comment '',
   cpf_cnpj             varchar(20)  comment '',
   email                varchar(254)  comment '',
   aceitar_campanha     bool  comment '',
   nome_mae             varchar(80)  comment '',
   nome_pai             varchar(80)  comment '',
   profissao            varchar(20)  comment '',
   observacao           text  comment '',
   primary key (paciente_id)
);

/*==============================================================*/
/* Index: index_paciente_id                                     */
/*==============================================================*/
create unique index index_paciente_id on paciente_humano
(
   paciente_id
);

/*==============================================================*/
/* Table: paciente_humano_tipo                                  */
/*==============================================================*/
create table paciente_humano_tipo
(
   paciente_humano_tipo_id int not null auto_increment  comment '',
   paciente_tipo_id     int not null  comment '',
   nome                 varchar(15) not null  comment 'Clínico, odontológico ',
   primary key (paciente_humano_tipo_id)
);

/*==============================================================*/
/* Index: index_paciente_humano_tipo_nome                       */
/*==============================================================*/
create unique index index_paciente_humano_tipo_nome on paciente_humano_tipo
(
   nome
);

/*==============================================================*/
/* Table: paciente_tipo                                         */
/*==============================================================*/
create table paciente_tipo
(
   paciente_tipo_id     int not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (paciente_tipo_id)
);

/*==============================================================*/
/* Index: index_paciente_tipo_nome                              */
/*==============================================================*/
create unique index index_paciente_tipo_nome on paciente_tipo
(
   nome
);

/*==============================================================*/
/* Table: paciente_veterinario                                  */
/*==============================================================*/
create table paciente_veterinario
(
   paciente_id          bigint not null  comment '',
   especie_id           int not null  comment '',
   raca_id              int not null  comment '',
   cor_id               int not null  comment '',
   expectativa_vida_id  int not null  comment '',
   peso                 decimal(4,2) not null  comment '',
   altura               decimal(4,2)  comment '',
   plumagem             text  comment '',
   alergias             text  comment '',
   sinais_particulares  text  comment '',
   tatuagem             text  comment '',
   brinco               text  comment '',
   microchip            text  comment '',
   registro_genealogico text  comment '',
   resenha_detalhada    text  comment '',
   primary key (paciente_id)
);

/*==============================================================*/
/* Table: pedido_exame                                          */
/*==============================================================*/
create table pedido_exame
(
   pedido_exame_id      bigint not null  comment '',
   exame_id             int not null  comment '',
   unidade_id           bigint not null  comment '',
   primary key (pedido_exame_id)
);

/*==============================================================*/
/* Table: pedido_exame_status                                   */
/*==============================================================*/
create table pedido_exame_status
(
   pedido_exame_id      bigint not null  comment '',
   exame_status_id      int not null  comment '',
   data                 date not null  comment '',
   hora                 time not null  comment '',
   primary key (pedido_exame_id, exame_status_id)
);

/*==============================================================*/
/* Index: index_pedidoexamestatusid                             */
/*==============================================================*/
create unique index index_pedidoexamestatusid on pedido_exame_status
(
   pedido_exame_id,
   exame_status_id
);

/*==============================================================*/
/* Table: perfil                                                */
/*==============================================================*/
create table perfil
(
   perfil_id            int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   primary key (perfil_id)
);

/*==============================================================*/
/* Index: index_perfil_nome                                     */
/*==============================================================*/
create unique index index_perfil_nome on perfil
(
   nome
);

/*==============================================================*/
/* Table: pessoa                                                */
/*==============================================================*/
create table pessoa
(
   pessoa_id            bigint not null auto_increment  comment '',
   pesso_tipo_id        int not null  comment '',
   nome                 varchar(80) not null  comment '',
   cpf_cnpj             varchar(30) not null  comment '',
   email                varchar(254) not null  comment '',
   data_nascimento      date  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (pessoa_id)
);

/*==============================================================*/
/* Index: index_pessoa_nome                                     */
/*==============================================================*/
create index index_pessoa_nome on pessoa
(
   nome
);

/*==============================================================*/
/* Index: index_pessoa_cpf_cnpj                                 */
/*==============================================================*/
create unique index index_pessoa_cpf_cnpj on pessoa
(
   cpf_cnpj
);

/*==============================================================*/
/* Index: index_pessoa_email                                    */
/*==============================================================*/
create unique index index_pessoa_email on pessoa
(
   email
);

/*==============================================================*/
/* Table: pessoa_contacto                                       */
/*==============================================================*/
create table pessoa_contacto
(
   pessoa_id            bigint not null  comment '',
   contacto_id          int not null  comment '',
   primary key (pessoa_id, contacto_id)
);

/*==============================================================*/
/* Index: index_pessoa_contacto_id                              */
/*==============================================================*/
create unique index index_pessoa_contacto_id on pessoa_contacto
(
   pessoa_id,
   contacto_id
);

/*==============================================================*/
/* Table: pessoa_endereco                                       */
/*==============================================================*/
create table pessoa_endereco
(
   pessoa_id            bigint not null  comment '',
   endereco_id          bigint not null  comment '',
   primary key (pessoa_id, endereco_id)
);

/*==============================================================*/
/* Index: index_pessoa_endereco_id                              */
/*==============================================================*/
create unique index index_pessoa_endereco_id on pessoa_endereco
(
   pessoa_id,
   endereco_id
);

/*==============================================================*/
/* Table: pessoa_fornecedor                                     */
/*==============================================================*/
create table pessoa_fornecedor
(
   pessoa_id            bigint not null  comment '',
   primary key (pessoa_id)
);

/*==============================================================*/
/* Table: pessoa_funcionario                                    */
/*==============================================================*/
create table pessoa_funcionario
(
   pessoa_id            bigint not null  comment '',
   funcao_id            int  comment '',
   primary key (pessoa_id)
);

/*==============================================================*/
/* Index: index_pessoa_funcionario_id                           */
/*==============================================================*/
create unique index index_pessoa_funcionario_id on pessoa_funcionario
(
   pessoa_id
);

/*==============================================================*/
/* Table: pessoa_medico                                         */
/*==============================================================*/
create table pessoa_medico
(
   pessoa_id            bigint not null  comment '',
   tipo_documento_id    int  comment '',
   especialidade_id     int not null  comment '',
   assinatura           varchar(200)  comment '',
   primary key (pessoa_id)
);

/*==============================================================*/
/* Index: index_pessoa_medico_id                                */
/*==============================================================*/
create unique index index_pessoa_medico_id on pessoa_medico
(
   pessoa_id
);

/*==============================================================*/
/* Table: pessoa_tipo                                           */
/*==============================================================*/
create table pessoa_tipo
(
   pesso_tipo_id        int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   primary key (pesso_tipo_id)
);

/*==============================================================*/
/* Index: index_pessoa_tipo_nome                                */
/*==============================================================*/
create unique index index_pessoa_tipo_nome on pessoa_tipo
(
   nome
);

/*==============================================================*/
/* Table: produto                                               */
/*==============================================================*/
create table produto
(
   produto_id           bigint not null auto_increment  comment '',
   produto_tipo_id      int not null  comment '',
   unidade_id           bigint not null  comment '',
   nome                 varchar(100) not null  comment '',
   fabricante           varchar(100)  comment '',
   registro             varchar(100)  comment '',
   concentracao         varchar(100)  comment '',
   forma_farmaceutica   varchar(100)  comment '',
   data_incercao_anvisa datetime  comment '',
   permitir_fracao      bool  comment '',
   codigo_barra         varchar(254)  comment '',
   preco_compra         decimal(18,2)  comment '',
   margem_lucro         decimal(5,2)  comment '',
   preco_venda          decimal(18,2)  comment '',
   comissao             decimal(5,2)  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (produto_id)
);

/*==============================================================*/
/* Index: index_produto_nome                                    */
/*==============================================================*/
create index index_produto_nome on produto
(
   nome
);

/*==============================================================*/
/* Table: produto_tipo                                          */
/*==============================================================*/
create table produto_tipo
(
   produto_tipo_id      int not null auto_increment  comment '',
   nome                 varchar(20) not null  comment '',
   primary key (produto_tipo_id)
);

/*==============================================================*/
/* Index: index_produto_tipo_nome                               */
/*==============================================================*/
create unique index index_produto_tipo_nome on produto_tipo
(
   nome
);

/*==============================================================*/
/* Table: prontuario                                            */
/*==============================================================*/
create table prontuario
(
   prontuario_id        bigint not null auto_increment  comment '',
   unidade_id           bigint not null  comment '',
   paciente_id          bigint not null  comment '',
   geral                bool not null  comment '',
   primary key (prontuario_id)
);

/*==============================================================*/
/* Index: index_prontuario_id                                   */
/*==============================================================*/
create unique index index_prontuario_id on prontuario
(
   unidade_id
);

/*==============================================================*/
/* Table: protocolo                                             */
/*==============================================================*/
create table protocolo
(
   protocolo_id         bigint not null auto_increment  comment '',
   produto_id           bigint  comment '',
   grupo_id             int not null  comment '',
   nome                 varchar(100)  comment '',
   aplicacao            text  comment '',
   primary key (protocolo_id)
);

/*==============================================================*/
/* Table: raca                                                  */
/*==============================================================*/
create table raca
(
   raca_id              int not null auto_increment  comment '',
   nome                 varchar(60) not null  comment '',
   primary key (raca_id)
);

/*==============================================================*/
/* Index: index_raca_nome                                       */
/*==============================================================*/
create unique index index_raca_nome on raca
(
   nome
);

/*==============================================================*/
/* Table: receituario                                           */
/*==============================================================*/
create table receituario
(
   receituario_id       bigint not null auto_increment  comment '',
   consulta_id          bigint not null  comment '',
   data_hora            datetime not null  comment '',
   data_validade        date not null  comment '',
   primary key (receituario_id)
);

/*==============================================================*/
/* Table: receituario_protocolo                                 */
/*==============================================================*/
create table receituario_protocolo
(
   receituario_id       bigint not null  comment '',
   protocolo_id         bigint not null  comment '',
   unidade              int not null  comment '',
   primary key (receituario_id, protocolo_id)
);

/*==============================================================*/
/* Index: index_receituario_protocolo_id                        */
/*==============================================================*/
create unique index index_receituario_protocolo_id on receituario_protocolo
(
   receituario_id,
   protocolo_id
);

/*==============================================================*/
/* Table: renovacao_paciente                                    */
/*==============================================================*/
create table renovacao_paciente
(
   paciente_id          bigint not null  comment '',
   renovacao_tipo_id    int not null  comment '',
   periodo              date not null  comment '',
   primary key (paciente_id, renovacao_tipo_id)
);

/*==============================================================*/
/* Index: index_renovacao_paciente_id                           */
/*==============================================================*/
create unique index index_renovacao_paciente_id on renovacao_paciente
(
   paciente_id,
   renovacao_tipo_id
);

/*==============================================================*/
/* Table: renovacao_tipo                                        */
/*==============================================================*/
create table renovacao_tipo
(
   renovacao_tipo_id    int not null auto_increment  comment '',
   nome                 varchar(80) not null  comment '',
   primary key (renovacao_tipo_id)
);

/*==============================================================*/
/* Index: index_paciente_humano_tipo_nome                       */
/*==============================================================*/
create unique index index_paciente_humano_tipo_nome on renovacao_tipo
(
   nome
);

/*==============================================================*/
/* Table: responsave_lrt                                        */
/*==============================================================*/
create table responsave_lrt
(
   unidade_id           bigint not null  comment '',
   pessoa_id            bigint not null  comment '',
   activo               bool not null  comment '',
   primary key (unidade_id, pessoa_id)
);

/*==============================================================*/
/* Index: index_responsave_lrt_id                               */
/*==============================================================*/
create unique index index_responsave_lrt_id on responsave_lrt
(
   unidade_id,
   pessoa_id
);

/*==============================================================*/
/* Table: sub_grupo                                             */
/*==============================================================*/
create table sub_grupo
(
   sub_grupo_id         int not null auto_increment  comment '',
   grupo_id             int not null  comment '',
   nome                 varchar(100) not null  comment '',
   primary key (sub_grupo_id)
);

/*==============================================================*/
/* Index: index_sub_grupo_nome                                  */
/*==============================================================*/
create unique index index_sub_grupo_nome on sub_grupo
(
   nome
);

/*==============================================================*/
/* Table: tipo_consulta                                         */
/*==============================================================*/
create table tipo_consulta
(
   tipo_consulta_id     int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   primary key (tipo_consulta_id)
);

/*==============================================================*/
/* Index: index_tipo_consulta_nome                              */
/*==============================================================*/
create unique index index_tipo_consulta_nome on tipo_consulta
(
   nome
);

/*==============================================================*/
/* Table: tipo_documento                                        */
/*==============================================================*/
create table tipo_documento
(
   tipo_documento_id    int not null auto_increment  comment '',
   nome                 varchar(20) not null  comment '',
   descricao            varchar(254)  comment '',
   primary key (tipo_documento_id)
);

/*==============================================================*/
/* Index: index_tipo_documento_nome                             */
/*==============================================================*/
create unique index index_tipo_documento_nome on tipo_documento
(
   nome
);

/*==============================================================*/
/* Table: tipo_estabelecimento                                  */
/*==============================================================*/
create table tipo_estabelecimento
(
   tipo_estabelecimento_id int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   medico_responsavel_obrigatorio bool not null  comment '',
   primary key (tipo_estabelecimento_id)
);

/*==============================================================*/
/* Index: index_tipo_estabelecimento_nome                       */
/*==============================================================*/
create unique index index_tipo_estabelecimento_nome on tipo_estabelecimento
(
   nome
);

/*==============================================================*/
/* Table: triagem                                               */
/*==============================================================*/
create table triagem
(
   triagem_id           bigint not null auto_increment  comment '',
   agendamento_id       bigint not null  comment '',
   peso                 decimal(4,2) not null  comment '',
   data_hora            datetime not null  comment '',
   relatos              text not null  comment 'Sintomas e acidentes',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (triagem_id)
);

/*==============================================================*/
/* Table: unidade                                               */
/*==============================================================*/
create table unidade
(
   unidade_id           bigint not null auto_increment  comment '',
   modulo_id            int not null  comment '',
   tipo_estabelecimento_id int not null  comment '',
   cpf_cnpj             varchar(30) not null  comment '',
   inscricao_estadual_municipal varchar(30)  comment '',
   logo                 varchar(254)  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (unidade_id)
);

/*==============================================================*/
/* Index: index_unidade_cpf_cnpj                                */
/*==============================================================*/
create unique index index_unidade_cpf_cnpj on unidade
(
   cpf_cnpj
);

/*==============================================================*/
/* Table: unidade_contracto                                     */
/*==============================================================*/
create table unidade_contracto
(
   unidade_id           bigint not null  comment '',
   contrato_id          int not null  comment '',
   contrato_periodo_id  int  comment '',
   contrato_status_id   int  comment '',
   produto_id           bigint  comment '',
   valor                decimal(18,2)  comment '',
   data_adesao          datetime  comment '',
   data_cancelamento    datetime  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (unidade_id, contrato_id)
);

/*==============================================================*/
/* Index: index_unidade_contracto                               */
/*==============================================================*/
create unique index index_unidade_contracto on unidade_contracto
(
   unidade_id,
   contrato_id
);

/*==============================================================*/
/* Table: unidade_endereco                                      */
/*==============================================================*/
create table unidade_endereco
(
   unidade_id           bigint not null  comment '',
   endereco_id          bigint not null  comment '',
   primary key (unidade_id, endereco_id)
);

/*==============================================================*/
/* Index: index_unidade_endereco_id                             */
/*==============================================================*/
create unique index index_unidade_endereco_id on unidade_endereco
(
   unidade_id,
   endereco_id
);

/*==============================================================*/
/* Table: unidade_incorporada                                   */
/*==============================================================*/
create table unidade_incorporada
(
   unidade_id           bigint not null  comment '',
   unidade_incorporada_id bigint not null  comment '',
   primary key (unidade_id, unidade_incorporada_id)
);

/*==============================================================*/
/* Index: index_unidade_id_incorporada_id                       */
/*==============================================================*/
create index index_unidade_id_incorporada_id on unidade_incorporada
(
   unidade_id,
   unidade_incorporada_id
);

/*==============================================================*/
/* Table: unidade_medico                                        */
/*==============================================================*/
create table unidade_medico
(
   unidade_id           bigint not null  comment '',
   pessoa_id            bigint not null  comment '',
   primary key (unidade_id, pessoa_id)
);

/*==============================================================*/
/* Index: index_unidade_id_medico_id                            */
/*==============================================================*/
create unique index index_unidade_id_medico_id on unidade_medico
(
   unidade_id,
   pessoa_id
);

/*==============================================================*/
/* Table: usuario                                               */
/*==============================================================*/
create table usuario
(
   usuario_id           bigint not null auto_increment  comment '',
   perfil_id            int not null  comment '',
   email                varchar(254) not null  comment '',
   senha                text not null  comment '',
   revalidar_senha      bool  comment '',
   created_at           datetime  comment '',
   updated_at           datetime  comment '',
   deleted_at           datetime  comment '',
   primary key (usuario_id)
);

/*==============================================================*/
/* Index: index_usuario_email                                   */
/*==============================================================*/
create unique index index_usuario_email on usuario
(
   email
);

alter table agendamento add constraint fk_agendame_r_52_paciente foreign key (paciente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table agendamento add constraint fk_agendame_r_53_tipo_con foreign key (tipo_consulta_id)
      references tipo_consulta (tipo_consulta_id) on delete restrict on update restrict;

alter table agendamento add constraint fk_agendame_r_54_pessoa_m foreign key (pessoa_id)
      references pessoa_medico (pessoa_id) on delete restrict on update restrict;

alter table agendamento add constraint fk_agendame_r_55_forma_ma foreign key (forma_marketingid)
      references forma_marketing (forma_marketing_id) on delete restrict on update restrict;

alter table agendamento_historico add constraint fk_agendame_r_56_agendame foreign key (agendamento_id)
      references agendamento (agendamento_id) on delete restrict on update restrict;

alter table agendamento_historico add constraint fk_agendame_r_57_agendame foreign key (agendamento_status_id)
      references agendamento_status (agendamento_status_id) on delete restrict on update restrict;

alter table carteira_pessoa_funcionario add constraint fk_carteira_r_31_carteira foreign key (carteira_tipo_id)
      references carteira_tipo (carteira_tipo_id) on delete restrict on update restrict;

alter table carteira_pessoa_funcionario add constraint fk_carteira_r_32_pessoa_f foreign key (pessoa_id)
      references pessoa_funcionario (pessoa_id) on delete restrict on update restrict;

alter table consulta add constraint fk_consulta_r_59_agendame foreign key (agendamento_id)
      references agendamento (agendamento_id) on delete restrict on update restrict;

alter table contacto add constraint fk_contacto_r_8_contacto foreign key (contacto_tipo_id)
      references contacto_tipo (contacto_tipo_id) on delete restrict on update restrict;

alter table exame_fisico add constraint fk_exame_fi_r_60_agendame foreign key (agendamento_id)
      references agendamento (agendamento_id) on delete restrict on update restrict;

alter table paciente add constraint fk_paciente_r_69_paciente foreign key (paciente_tipo_id)
      references paciente_tipo (paciente_tipo_id) on delete restrict on update restrict;

alter table paciente_contacto add constraint fk_paciente_r_10_contacto foreign key (contacto_id)
      references contacto (contacto_id) on delete restrict on update restrict;

alter table paciente_contacto add constraint fk_paciente_r_9_paciente foreign key (paciente_id)
      references paciente_humano (paciente_id) on delete restrict on update restrict;

alter table paciente_dependente add constraint fk_paciente_r_16_paciente foreign key (paciente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table paciente_dependente add constraint fk_paciente_r_17_paciente foreign key (dependente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table paciente_dependente add constraint fk_paciente_r_18_paciente foreign key (dependente_tipo_id)
      references paciente_dependente_tipo (paciente_dependente_tipo_id) on delete restrict on update restrict;

alter table paciente_dependente_tipo add constraint fk_paciente_r_71_paciente foreign key (paciente_tipo_id)
      references paciente_tipo (paciente_tipo_id) on delete restrict on update restrict;

alter table paciente_endereco add constraint fk_paciente_r_2_paciente foreign key (paciente_id)
      references paciente_humano (paciente_id) on delete restrict on update restrict;

alter table paciente_endereco add constraint fk_paciente_r_3_endereco foreign key (endereco_id)
      references endereco (endereco_id) on delete restrict on update restrict;

alter table paciente_humano add constraint fk_paciente_r_11_paciente foreign key (paciente_humano_tipo_id)
      references paciente_humano_tipo (paciente_humano_tipo_id) on delete restrict on update restrict;

alter table paciente_humano add constraint fk_paciente_r_14_paciente foreign key (paciente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table paciente_humano_tipo add constraint fk_paciente_r_72_paciente foreign key (paciente_tipo_id)
      references paciente_tipo (paciente_tipo_id) on delete restrict on update restrict;

alter table paciente_veterinario add constraint fk_paciente_r_15_paciente foreign key (paciente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table paciente_veterinario add constraint fk_paciente_r_4_especie foreign key (especie_id)
      references especie (especie_id) on delete restrict on update restrict;

alter table paciente_veterinario add constraint fk_paciente_r_5_raca foreign key (raca_id)
      references raca (raca_id) on delete restrict on update restrict;

alter table paciente_veterinario add constraint fk_paciente_r_6_cor foreign key (cor_id)
      references cor (cor_id) on delete restrict on update restrict;

alter table paciente_veterinario add constraint fk_paciente_r_7_expectat foreign key (expectativa_vida_id)
      references expectativa_vida (expectativa_vida_id) on delete restrict on update restrict;

alter table pedido_exame add constraint fk_pedido_e_r_46_exame foreign key (exame_id)
      references exame (exame_id) on delete restrict on update restrict;

alter table pedido_exame add constraint fk_pedido_e_r_47_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table pedido_exame_status add constraint fk_pedido_e_r_48_pedido_e foreign key (pedido_exame_id)
      references pedido_exame (pedido_exame_id) on delete restrict on update restrict;

alter table pedido_exame_status add constraint fk_pedido_e_r_49_exame_st foreign key (exame_status_id)
      references exame_status (exame_status_id) on delete restrict on update restrict;

alter table pessoa add constraint fk_pessoa_r_20_pessoa_t foreign key (pesso_tipo_id)
      references pessoa_tipo (pesso_tipo_id) on delete restrict on update restrict;

alter table pessoa_contacto add constraint fk_pessoa_c_r_28_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table pessoa_contacto add constraint fk_pessoa_c_r_29_contacto foreign key (contacto_id)
      references contacto (contacto_id) on delete restrict on update restrict;

alter table pessoa_endereco add constraint fk_pessoa_e_r_26_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table pessoa_endereco add constraint fk_pessoa_e_r_27_endereco foreign key (endereco_id)
      references endereco (endereco_id) on delete restrict on update restrict;

alter table pessoa_fornecedor add constraint fk_pessoa_f_r_23_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table pessoa_funcionario add constraint fk_pessoa_f_r_21_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table pessoa_funcionario add constraint fk_pessoa_f_r_30_funcao foreign key (funcao_id)
      references funcao (funcao_id) on delete restrict on update restrict;

alter table pessoa_medico add constraint fk_pessoa_m_r_22_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table pessoa_medico add constraint fk_pessoa_m_r_24_tipo_doc foreign key (tipo_documento_id)
      references tipo_documento (tipo_documento_id) on delete restrict on update restrict;

alter table pessoa_medico add constraint fk_pessoa_m_r_25_especial foreign key (especialidade_id)
      references especialidade (especialidade_id) on delete restrict on update restrict;

alter table produto add constraint fk_produto_r_67_produto_ foreign key (produto_tipo_id)
      references produto_tipo (produto_tipo_id) on delete restrict on update restrict;

alter table produto add constraint fk_produto_r_68_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table prontuario add constraint fk_prontuar_r_51_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table prontuario add constraint fk_prontuar_r_69_paciente foreign key (paciente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table protocolo add constraint fk_protocol_r_62_produto foreign key (produto_id)
      references produto (produto_id) on delete restrict on update restrict;

alter table protocolo add constraint fk_protocol_r_64_grupo foreign key (grupo_id)
      references grupo (grupo_id) on delete restrict on update restrict;

alter table receituario add constraint fk_receitua_r_61_consulta foreign key (consulta_id)
      references consulta (consulta_id) on delete restrict on update restrict;

alter table receituario_protocolo add constraint fk_receitua_r_65_receitua foreign key (receituario_id)
      references receituario (receituario_id) on delete restrict on update restrict;

alter table receituario_protocolo add constraint fk_receitua_r_66_protocol foreign key (protocolo_id)
      references protocolo (protocolo_id) on delete restrict on update restrict;

alter table renovacao_paciente add constraint fk_renovaca_r_13_renovaca foreign key (renovacao_tipo_id)
      references renovacao_tipo (renovacao_tipo_id) on delete restrict on update restrict;

alter table renovacao_paciente add constraint fk_renovaca_r_70_paciente foreign key (paciente_id)
      references paciente (paciente_id) on delete restrict on update restrict;

alter table responsave_lrt add constraint fk_responsa_r_46_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table responsave_lrt add constraint fk_responsa_r_47_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table sub_grupo add constraint fk_sub_grup_r_63_grupo foreign key (grupo_id)
      references grupo (grupo_id) on delete restrict on update restrict;

alter table triagem add constraint fk_triagem_r_58_agendame foreign key (agendamento_id)
      references agendamento (agendamento_id) on delete restrict on update restrict;

alter table unidade add constraint fk_unidade_r_35_modulo foreign key (modulo_id)
      references modulo (modulo_id) on delete restrict on update restrict;

alter table unidade add constraint fk_unidade_r_38_tipo_est foreign key (tipo_estabelecimento_id)
      references tipo_estabelecimento (tipo_estabelecimento_id) on delete restrict on update restrict;

alter table unidade_contracto add constraint fk_unidade__r_41_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table unidade_contracto add constraint fk_unidade__r_43_contrato foreign key (contrato_periodo_id)
      references contrato_peiodo (contrato_periodo_id) on delete restrict on update restrict;

alter table unidade_contracto add constraint fk_unidade__r_44_contrato foreign key (contrato_status_id)
      references contrato_status (contrato_status_id) on delete restrict on update restrict;

alter table unidade_contracto add constraint fk_unidade__r_45_produto foreign key (produto_id)
      references produto (produto_id) on delete restrict on update restrict;

alter table unidade_endereco add constraint fk_unidade__r_33_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table unidade_endereco add constraint fk_unidade__r_34_endereco foreign key (endereco_id)
      references endereco (endereco_id) on delete restrict on update restrict;

alter table unidade_incorporada add constraint fk_unidade__r_36_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table unidade_incorporada add constraint fk_unidade__r_37_unidade foreign key (unidade_incorporada_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table unidade_medico add constraint fk_unidade__r_39_unidade foreign key (unidade_id)
      references unidade (unidade_id) on delete restrict on update restrict;

alter table unidade_medico add constraint fk_unidade__r_40_pessoa foreign key (pessoa_id)
      references pessoa (pessoa_id) on delete restrict on update restrict;

alter table usuario add constraint fk_usuario_r_19_perfil foreign key (perfil_id)
      references perfil (perfil_id) on delete restrict on update restrict;

