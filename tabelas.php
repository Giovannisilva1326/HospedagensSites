create table tb_usuarios(

    cd_usaurio int PRIMARY KEY AUTO_INCREMENT,
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



delimiter $$
create procedure procVerificaCadastro ( 
   in ds_nome varchar(100), 
   in ds_sobrenome varchar(100), 
   in ds_cpf varchar(11), 
   in ds_endereco varchar(200), 
   in cd_DDD int, in cd_telefone int, 
   in ds_usuario varchar(100), 
   in ds_senha varchar(100), 
   in ds_lembrete varchar(100), 
   in ds_email varchar(200), 
   in opcao varchar(100) 
) 


begin 

if opcao = 'insert'
then
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
) values 
(
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
   15,
   datetime
);
end if;
end $$