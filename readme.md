# Você quer ser um desenvolvedor Backend na Web Jump?
Criamos esse teste para avaliar seus conhecimentos e habilidades como desenvolvedor backend.

# O teste
O desafio é desenvolver um sistema de gerenciamento de produtos. Esse sistema será composto de um cadastro de produtos e categorias. Os requisitos desse sistema estão listados nos tópicos abaixo.
Não existe certo ou errado, queremos saber como você se sai em situações reais como esse desafio.

# Instruções
- O foco principal do nosso teste é o backend. Para facilitar você poderá utilizar os arquivos html  disponíveis no diretório assets
- Crie essa aplicação como se fosse uma aplicação real, que seria utilizada pelo WebJump
- Fique à vontade para usar bibliotecas/componentes externos (composer)
- Não utilize nenhum Framework, tais como Laravel, Lumen ou Symphony
- Seguir princípios **SOLID** 
- Utilize boas práticas de programação
- Utilize boas práticas de git
- Documentar como rodar o projeto
- Crie uma documentação simples comentando sobre as tecnologias, versões e soluções adotadas

# Requisitos
- O sistema deverá ser desenvolvido utilizando a linguagem PHP (de preferência a versão mais nova) ou outra linguagem se assim foi especificado para sua avaliação por nossa equipe.
- Você deve criar um CRUD que permita cadastrar as seguintes informações:
	- **Produto**: Nome, SKU (Código), preço, descrição, quantidade e categoria (cada produto pode conter uma ou mais categorias)
	- **Categoria**: Código e nome.
- Salvar as informações necessárias em um banco de dados (relacional ou não), de sua escolha

# Opcionais
- Gerar logs das ações
- Testes automatizados com informação da cobertura de testes
- Upload de imagem no cadastro de produtos

# O que será avaliado
- Estrutura e organização do código e dos arquivos
- Soluções adotadas
- Tecnologias utilizadas
- Qualidade
- Padrões PSR, Design Patterns
- Enfim, tudo será observado e levado em conta

# Como iniciar o desenvolvimento
- **Fork** esse repositório na sua conta do BitBucket.
- Crie uma branch com o nome **desafio**

# Como enviar seu teste
Envie um email para [carreira@webjump.com.br] com o link do seu repositório.

O repositório do teste precisa ser público. 

Qualquer dúvida sobre o teste, fique a vontade para entrar em contato conosco.


#Edit Marcel

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