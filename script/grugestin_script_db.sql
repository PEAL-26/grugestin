/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     29/03/2022 18:10:02                          */
/*==============================================================*/


/*==============================================================*/
/* Table: arquivo_requisicao                                    */
/*==============================================================*/
create table arquivo_requisicao
(
   requisicao_id        bigint not null  comment '',
   arquivo              text not null  comment '',
   descricao            text  comment '',
   key ak_key_1 (requisicao_id)
);

/*==============================================================*/
/* Index: index_1                                               */
/*==============================================================*/
create index index_1 on arquivo_requisicao
(
   requisicao_id
);

/*==============================================================*/
/* Table: documento_funcionario                                 */
/*==============================================================*/
create table documento_funcionario
(
   funcionario_id       bigint not null  comment '',
   tipo_documento_id    int not null  comment '',
   data_emissao         date not null  comment '',
   data_validade        date not null  comment '',
   arquivo              text not null  comment '',
   primary key (funcionario_id, tipo_documento_id)
);

/*==============================================================*/
/* Index: index_1                                               */
/*==============================================================*/
create unique index index_1 on documento_funcionario
(
   funcionario_id,
   tipo_documento_id
);

/*==============================================================*/
/* Table: estado_civil                                          */
/*==============================================================*/
create table estado_civil
(
   id                   smallint not null auto_increment  comment '',
   nome                 varchar(30) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_estado_civil                               */
/*==============================================================*/
create unique index index_nome_estado_civil on estado_civil
(
   nome
);

/*==============================================================*/
/* Table: estado_funcionario                                    */
/*==============================================================*/
create table estado_funcionario
(
   id                   smallint not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_estado_funcionario                         */
/*==============================================================*/
create unique index index_nome_estado_funcionario on estado_funcionario
(
   nome
);

/*==============================================================*/
/* Table: estado_operacao                                       */
/*==============================================================*/
create table estado_operacao
(
   id                   smallint not null auto_increment  comment '',
   nome                 varchar(10) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_1                                               */
/*==============================================================*/
create unique index index_1 on estado_operacao
(
   nome
);

/*==============================================================*/
/* Table: estado_requisicao                                     */
/*==============================================================*/
create table estado_requisicao
(
   id                   smallint not null auto_increment  comment '',
   nome                 varchar(10) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_1                                               */
/*==============================================================*/
create unique index index_1 on estado_requisicao
(
   nome
);

/*==============================================================*/
/* Table: estado_requisicao_log                                 */
/*==============================================================*/
create table estado_requisicao_log
(
   requisicao_id        bigint not null  comment '',
   estado_id            smallint not null  comment '',
   data                 datetime not null  comment '',
   aprovacao_funcionario_id bigint  comment '',
   primary key (requisicao_id, estado_id)
);

/*==============================================================*/
/* Index: index_1                                               */
/*==============================================================*/
create index index_1 on estado_requisicao_log
(
   requisicao_id,
   estado_id
);

/*==============================================================*/
/* Table: filial                                                */
/*==============================================================*/
create table filial
(
   id                   int not null auto_increment  comment '',
   nome                 varchar(200) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_filial                                     */
/*==============================================================*/
create unique index index_nome_filial on filial
(
   nome
);

/*==============================================================*/
/* Table: funcao                                                */
/*==============================================================*/
create table funcao
(
   id                   int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_funcao                                     */
/*==============================================================*/
create unique index index_nome_funcao on funcao
(
   nome
);

/*==============================================================*/
/* Table: funcionario                                           */
/*==============================================================*/
create table funcionario
(
   id                   bigint not null  comment '',
   naturalidade_id      int not null  comment '',
   provincia_id         int not null  comment '',
   estado_civil_id      smallint not null  comment '',
   filial_id            int not null  comment '',
   funcao_id            int not null  comment '',
   codigo               varchar(10) not null  comment '',
   nome                 varchar(150) not null  comment '',
   nome_pai             varchar(150)  comment '',
   nome_mae             varchar(150)  comment '',
   bilhete_identidade   varchar(14) not null  comment '',
   sexo                 char(1) not null  comment '',
   endereco             text  comment '',
   data_nascimento      date not null  comment '',
   salario_base         decimal(18,2)  comment '',
   ano_vinculo          int  comment '',
   observacao           text  comment '',
   estado               smallint not null  comment '',
   data_cadastro        datetime  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_funcionario                                */
/*==============================================================*/
create index index_nome_funcionario on funcionario
(
   nome
);

/*==============================================================*/
/* Index: index_codigo_funcionario                              */
/*==============================================================*/
create unique index index_codigo_funcionario on funcionario
(
   codigo
);

/*==============================================================*/
/* Index: index_bilhete_identidade_funcionario                  */
/*==============================================================*/
create unique index index_bilhete_identidade_funcionario on funcionario
(
   bilhete_identidade
);

/*==============================================================*/
/* Table: naturalidade                                          */
/*==============================================================*/
create table naturalidade
(
   id                   int not null auto_increment  comment '',
   nome                 varchar(50) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_natutralidade                              */
/*==============================================================*/
create unique index index_nome_natutralidade on naturalidade
(
   nome
);

/*==============================================================*/
/* Table: operacao                                              */
/*==============================================================*/
create table operacao
(
   id                   bigint not null  comment '',
   tipo                 smallint not null  comment '',
   data                 datetime not null  comment '',
   recebeu_funcionario_id bigint not null  comment '',
   entregou_funcionario_id bigint not null  comment '',
   estado               smallint not null  comment '',
   requisicao_id        bigint  comment '',
   observacao           text  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_funcionario_recebeu_entregou                    */
/*==============================================================*/
create unique index index_funcionario_recebeu_entregou on operacao
(
   recebeu_funcionario_id,
   entregou_funcionario_id
);

/*==============================================================*/
/* Table: produto                                               */
/*==============================================================*/
create table produto
(
   id                   bigint not null auto_increment  comment '',
   nome                 varchar(100) not null  comment '',
   descricao            text  comment '',
   stock_minimo         decimal(4,2)  comment '',
   stock_maximo         decimal(4,2)  comment '',
   stock_actual         decimal(4,2)  comment '',
   activo               bool  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_produto                                    */
/*==============================================================*/
create index index_nome_produto on produto
(
   nome
);

/*==============================================================*/
/* Table: produto_operacao                                      */
/*==============================================================*/
create table produto_operacao
(
   produto_id           bigint not null  comment '',
   operacao_id          bigint not null  comment '',
   quantidade           int not null  comment '',
   primary key (produto_id, operacao_id)
);

/*==============================================================*/
/* Index: index_produto_operacao                                */
/*==============================================================*/
create unique index index_produto_operacao on produto_operacao
(
   produto_id,
   operacao_id
);

/*==============================================================*/
/* Table: produto_requisicao                                    */
/*==============================================================*/
create table produto_requisicao
(
   produto_id           bigint not null  comment '',
   requisicao_id        bigint not null  comment '',
   quantidade           decimal(4,2) not null  comment '',
   valor                decimal(18,2) not null  comment '',
   total                decimal(18,2) not null  comment '',
   primary key (produto_id, requisicao_id)
);

/*==============================================================*/
/* Index: index_produto_requisicao                              */
/*==============================================================*/
create unique index index_produto_requisicao on produto_requisicao
(
   produto_id,
   requisicao_id
);

/*==============================================================*/
/* Table: provincia                                             */
/*==============================================================*/
create table provincia
(
   id                   int not null auto_increment  comment '',
   nome                 varchar(100) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_provincia                                  */
/*==============================================================*/
create unique index index_nome_provincia on provincia
(
   nome
);

/*==============================================================*/
/* Table: requisicao                                            */
/*==============================================================*/
create table requisicao
(
   id                   bigint not null  comment '',
   tipo                 smallint not null  comment '',
   data                 datetime  comment '',
   finalidade           varchar(200)  comment '',
   requerente_funcionario_id bigint not null  comment '',
   estado               smallint not null  comment '',
   observacao           text  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_finalidade_requisicao                           */
/*==============================================================*/
create index index_finalidade_requisicao on requisicao
(
   finalidade
);

/*==============================================================*/
/* Table: telefone                                              */
/*==============================================================*/
create table telefone
(
   id                   int not null  comment '',
   numero               varchar(9) not null  comment '',
   funcionario_id       bigint not null  comment '',
   principal            bool  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_numero_telefone                                 */
/*==============================================================*/
create unique index index_numero_telefone on telefone
(
   numero
);

/*==============================================================*/
/* Table: tipo_documento                                        */
/*==============================================================*/
create table tipo_documento
(
   id                   int not null auto_increment  comment '',
   nome                 varchar(40) not null  comment '',
   data_validade        bool  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_tipo_documento                             */
/*==============================================================*/
create index index_nome_tipo_documento on tipo_documento
(
   nome
);

/*==============================================================*/
/* Table: tipo_operacao                                         */
/*==============================================================*/
create table tipo_operacao
(
   id                   smallint not null auto_increment  comment '',
   nome                 varchar(7) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_nome_tipo_operacao                              */
/*==============================================================*/
create unique index index_nome_tipo_operacao on tipo_operacao
(
   nome
);

/*==============================================================*/
/* Table: tipo_requisicao                                       */
/*==============================================================*/
create table tipo_requisicao
(
   id                   smallint not null auto_increment  comment '',
   nome                 varchar(15) not null  comment '',
   primary key (id)
);

/*==============================================================*/
/* Index: index_1                                               */
/*==============================================================*/
create unique index index_1 on tipo_requisicao
(
   nome
);

/*==============================================================*/
/* Table: usuario                                               */
/*==============================================================*/
create table usuario
(
   usuario_id           int not null auto_increment  comment '',
   funcionario_id       bigint  comment '',
   email                varchar(245) not null  comment '',
   palavra_passe        text not null  comment '',
   primary key (usuario_id)
);

/*==============================================================*/
/* Index: index_email_usuario                                   */
/*==============================================================*/
create unique index index_email_usuario on usuario
(
   email
);

alter table arquivo_requisicao add constraint fk_arquivo__r_11_requisic foreign key (requisicao_id)
      references requisicao (id);

alter table documento_funcionario add constraint fk_document_r_19_funciona foreign key (funcionario_id)
      references funcionario (id);

alter table documento_funcionario add constraint fk_document_r_20_tipo_doc foreign key (tipo_documento_id)
      references tipo_documento (id);

alter table estado_requisicao_log add constraint fk_estado_r_r_7_requisic foreign key (requisicao_id)
      references requisicao (id);

alter table estado_requisicao_log add constraint fk_estado_r_r_8_estado_r foreign key (estado_id)
      references estado_requisicao (id);

alter table funcionario add constraint fk_funciona_r_12_naturali foreign key (naturalidade_id)
      references naturalidade (id);

alter table funcionario add constraint fk_funciona_r_13_provinci foreign key (provincia_id)
      references provincia (id);

alter table funcionario add constraint fk_funciona_r_14_estado_c foreign key (estado_civil_id)
      references estado_civil (id);

alter table funcionario add constraint fk_funciona_r_15_estado_f foreign key (estado)
      references estado_funcionario (id);

alter table funcionario add constraint fk_funciona_r_16_filial foreign key (filial_id)
      references filial (id);

alter table funcionario add constraint fk_funciona_r_18_funcao foreign key (funcao_id)
      references funcao (id);

alter table operacao add constraint fk_operacao_r_1_estado_o foreign key (estado)
      references estado_operacao (id);

alter table operacao add constraint fk_operacao_r_2_tipo_ope foreign key (tipo)
      references tipo_operacao (id);

alter table operacao add constraint fk_operacao_r_23_funciona foreign key (entregou_funcionario_id)
      references funcionario (id);

alter table operacao add constraint fk_operacao_r_24_funciona foreign key (recebeu_funcionario_id)
      references funcionario (id);

alter table operacao add constraint fk_operacao_r_25_requisic foreign key (requisicao_id)
      references requisicao (id);

alter table produto_operacao add constraint fk_produto__r_3_produto foreign key (produto_id)
      references produto (id);

alter table produto_operacao add constraint fk_produto__r_4_operacao foreign key (operacao_id)
      references operacao (id);

alter table produto_requisicao add constraint fk_produto__r_10_produto foreign key (produto_id)
      references produto (id);

alter table produto_requisicao add constraint fk_produto__r_9_requisic foreign key (requisicao_id)
      references requisicao (id);

alter table requisicao add constraint fk_requisic_r_22_funciona foreign key (requerente_funcionario_id)
      references funcionario (id);

alter table requisicao add constraint fk_requisic_r_5_estado_r foreign key (estado)
      references estado_requisicao (id);

alter table requisicao add constraint fk_requisic_r_6_tipo_req foreign key (tipo)
      references tipo_requisicao (id);

alter table telefone add constraint fk_telefone_r_17_funciona foreign key (funcionario_id)
      references funcionario (id);

alter table usuario add constraint fk_usuario_r_21_funciona foreign key (funcionario_id)
      references funcionario (id);

