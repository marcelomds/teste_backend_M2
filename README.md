# Teste de Backend

# Realizado para a empresa: M2

## O que é este projeto?
-- O projeto tem como objetivo: Montar uma api RESTful com laravel para alimentar uma SPA com as seguintes funções.

- Cadastrar/Editar/Listar/Excluir cidades;
- Cadastrar/Editar/Listar/Excluir grupo de cidades;
- Cadastrar/Editar/Listar/Excluir Campanhas para o grupo de cidades onde cada
  grupo possui somente uma campanha ativa;
- Cadastrar/Editar/Listar/Excluir desconto para os produtos da campanha;
- Cadastrar/Editar/Listar/Excluir produtos;

### - Foi utilizado o MySQL como banco de dados do teste.

## Para rodar este projeto
```bash
$ git clone https://github.com/marcelomds/teste_backend_M2.git
$ cd teste_backend_M2
$ composer install 
$ cp .env.example .env

 ------------ Configurar Banco de Dados no Arquivo .env ------------
 
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    
 -------------------------------------------------------------------

$ php artisan key:generate
$ php artisan migrate #antes de rodar este comando verifique sua configuracao com banco em .env
$ php artisan db:seed #para gerar os seeders, dados de teste
$ php artisan serve
```
