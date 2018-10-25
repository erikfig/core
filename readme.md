# O QUE É a comuREDE?

UM NEGÓCIO DE IMPACTO SOCIAL OPEN SOURCE
   > Para distribuir internet gratuita e serviços de IoT nas periferias

[VEJA AQUI](https://www.facebook.com/comuREDE/videos/897710280400227/)


# WHAT IS comuREDE?
  
AN OPEN SOURCE SOCIAL IMPACT BUSINESS
   > To deliver free internet and IoT services in shanty towns

[WATCH HERE](https://youtu.be/DjV8mJWbhzo)


# COMO FUNCIONA?
    
## Do laboratório de informática para as ruas
https://portal.ifrj.edu.br/laboratorio-informatica-ruas

### core

Versão 0.1 - back / frontend
PHP >= 7.0 / HTML, CSS e JAVASCRIPT

[Design](https://olha.ai/gRUrx) por Pedro Rangel

[Topologia](https://olha.ai/BlYuA) por Filipe Rimes    
   
## hardware / software

### servidor
Raspberry W Zero / Raspbian / Apache / MQTT / MariaDB 

### sensores autônomos
C++

[Apresentação](https://olha.ai/imh6d) - Fluxo de Água (AGO18)
              

[Sketch](https://olha.ai/bYlY1)

## rodar este projeto

Baixe/clone este repositório, instale as dependências com [Composer](https://getcomposer.org).

Crie uma cópia do arquivo `.env.example` com o nome `.env`, configure o banco de dados no `.env` (suporte a MySQL, PostgreSQL, SQLite e SQL Server).

Crie as tabelas com o comando `php artisan migrate`, se quiser alguns dados de exemplo rode `php artisan db:seed`.

Para subir um servidor de desenvolvimento rode `php artisan serve`.

Qualquer dúvida crie um issue.

## banco de dados
MySQL

[Modelo Entidade Relacional](https://olha.ai/2fUSM)

[Arquivo de exemplo](https://olha.ai/V2aP2) REAL (SET18)


## redes mesh

[Conheça nossa base aqui](https://commotionwireless.net/)
