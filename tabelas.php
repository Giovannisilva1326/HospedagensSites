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