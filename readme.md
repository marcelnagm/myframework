Foi adicionado o link do postman utilizado para testar o backend
para accesar utilizar o link abaixo
https://app.getpostman.com/join-team?invite_code=5929ca47a5c4231d73f51186a2336a82&target_code=635fb825aa3069e565f34666f45f662a

Primeiramente para inicar o projeto vc deve rodar os seguintes comandos

composer install

Criar um banco de dados e setas os dados de acesso em .env

em seguida rodar

php build_database.php
./run.sh

a partir deste momento vc pode utilizaR O POSTMAN


Bibliotecas utilizadas e finalidades
  "illuminate/database": "^8.83", <- orm
        "vlucas/phpdotenv": "^5.5", <- usar os metodo env
        "symfony/http-foundation": "^5.4", <- padronizar o tratamento a request
        "league/flysystem": "^2.5", <- gestao  de arquivpos
        "symfony/mime": "^5.4" <- informacao do mimetype