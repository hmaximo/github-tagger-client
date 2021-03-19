# CLIENTE GITHUB - Desafio Magrathea Labs

A partir de um desafio para a seleção do Magrathea Labs, essa aplicação tem como objetivo adicionar tags a repositórios classificados com uma estrela na própria plataforma do GitHub. O projeto ainda está em construção e, por enquanto, é composto por:

+ Um banco de dados no Mongo Atlas;
+ Uma API desenvolvida em Java com Spring Boot que é cliente da API do GitHub e persiste os dados no Mongo Atlas;
+ Um cliente da API desenvolvido em PHP.

## Observações sobre cada parte

### Banco de dados Mongo Atlas

Apesar de ter conhecido esse banco de dados há pouco tempoo, pareceu uma solução simples para o propósito do desafio, além de ter um bom "Get started free". :)

### API Java com Spring Boot

Fiz a opção por construir um backend independente para segregar responsabilidades. A princípio, seria possível resolver o desafio apenas com PHP e HTML, mas a construção de uma API me pareceu se adequar melhor a um código mais limpo.

Aqui no GitHub, a API está em outro [repositório](https://github.com/hmaximo/api-github-client.git)

A API pode ser acessada pelo Heroku:
    [Swagger da API Java com Spring Boot - api-github-tagger](https://api-github-tagger.herokuapp.com/swagger-ui/index.html "Clique e acesse")

### Cliente em PHP

Essa é a parte que tem mais lacunas, por enquanto. Inicialmente, a ideia foi construir um cliente em Angular, mas as tentativas foram frustradas pela falta de experiência com o framework. O PHP acabou por ajudar a construir uma aplicação mais leve (mesmo considerando que o código ainda está em desenvolvimento).

Para acessar a aplicação localmente, é necessário clonar o projeto, abrir a pasta *'tagger'* e subir a partir do console (com PHP instalado, é possível entrar com o comando *'$ php -S localhost:8000'*).

Para passar a parte de login, ainda é preciso verificar os usuários cadastrados [aqui](https://api-github-tagger.herokuapp.com/swagger-ui/index.html#/user-controller/listUsingGET_1) usando os dados do usuário GitHub e a senha.

## Grau de solução para as histórias de usuário

1. Autenticação do usuário:

    Existente, mesmo que ainda é preciso trabalhar na segurança.

2. Buscar repositóŕios:

    Existente, mas o gerenciamento das tags e a sua atribuição aos repositórios ainda precisam ser dessenvolvidos, principalmente na parte do Cliente PHP.

3. Adicionar tags aos repositórios:

    Apesar de haver algum gerenciamento de tags pela API Java, isso ainda não foi desenvolvido adequadamente. Status: atrasado.

4. Pesquisar repositórios por tags:

    Em função da lacuna anterior, a pesquisa por tags também está pendente. Status: atrasado.
