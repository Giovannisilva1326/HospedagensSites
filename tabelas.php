create table tb_usuarios(

    cd_usaurio int PRIMARY KEY,
    ds_nome varchar(100),
    ds_sobrenome varchar(100),
    ds_cpf varchar(11),
    ds_endereco varchar(200),
    cd_DDD int,
    cd_Telefone int,
    ds_usuario varchar(100),
    ds_senha varchar(100),
    ds_lembrete varchar(100),
    ds_email varchar(200),
    cd_status int,
    dt_operacao datetime

)



create procedure procVerificaCadastro

(
@ds_nome varchar(100) = null,
@ds_sobrenome varchar(100) = null,
@ds_cpf varchar(11) = null,
@ds_endereco varchar(200) = null,
@cd_DDD int = null,
@cd_telefone int = null
@ds_usuario varchar(100) = null,
@ds_senha varchar(100) = null,
@ds_lembrete varchar(100) = null,
@ds_email varchar(200) = null,
@opcao varchar(100) = null
)

as 

if opcao = 'insert'
begin

insert into tb_usuario (
    ds_nome,
    ds_sobrenome,
    ds_cpf,
    ds_endereco,
    cd_DDD,
    cd_telefone,
    ds_usuario,
    ds_senha,
    ds_lembrete,
    ds_email,
    cd_status,
    dt_operacao
)

values
(   
    @ds_nome
    @ds_sobrenome
    @ds_cpf
    @ds_endereco
    @cd_DDD
    @cd_telefone
    @ds_usuario
    @ds_senha
    @ds_lembrete
    @ds_email
     15,
    datetime
)
end