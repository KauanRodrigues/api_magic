# API MAGIC

A **_API MAGIC_** é responsável pela manipulação de dados de filmes. Com ela você pode cadastrar, alterar, excluir e visualizar seus filmes favoritos e muitos outros.

### Instalação

1. No **_MySQL_** vamos criar o banco de dados executando o seguinte comando:
```
create database magic;
```

2. Após criar o banco de dados, vamos para o terminal do seu sistema operacional e vamos navegar ate diretório do projeto e executaremos o seguinte comando:

```
php artisan migrate
```

Esse comando irá criar as tabelas em nosso banco de dados, o projeto já esta configurado para rodar o script sql na base de dados **_MAGIC_**, mas caso você utilize senha no seu MySQL, você deverá ir ao arquivo **_.env_** e na parte **_DB_PASSWORD_** digitar a senha utilizada no seu MySQL, **_pois o projeto vem configurado com uma senha em branco. (Ao digitar a senha no .env recomenda que se digite a mesma entre aspas, exemplo 'senha123')._**


3. No terminal do seu sistema operacional navegue até a pasta do projeto e execute o seguinte comando:

```
php artisan serve
```

Esse comando irá iniciar a API no [localhost](http://localhost:8000).

4. Agora você deverá ir ao seu **_POSTMAN_** para **_importar o COLLECTION_** que contem os **_ENDPOINTS_** de teste para manipulação da API.

>IMPORT -> UPLOAD FILES -> Selecione "API Magic.postman_collection.json" -> IMPORT

### ENDPOINTS

Segue abaixo os endpoints com seus metodos, parametros e tipos de parametros que são aceitos pela API:

| METHOD | ENDPOINT        | PARAMETRO                                 | TYPE                           |
|--------|-----------------|-------------------------------------------|--------------------------------|
| POST   | /api/filme      | filme, classificacao, atores, diretor     | string, string, string, string |
| GET    | /api/filme      |                                           |                                |
| GET    | /api/filme/{id} | id                                        | integer                        |
| DELETE | /api/filme/{id} | id                                        | integer                        |
| PUT    | /api/filme      | id, filme, classificacao, atores, diretor | integer, string, string, string, string |

### Mais Informações

#### Tecnologias utilizadas

- **Framework:** Laravel 7;
- **Linguagem:** PHP 7;
- **Banco de Dados:** MySQL;
- **Ambiente de Desenvolvimento:** Macbook Pro;
- **IDE:** Visual Studio Code;
- **IDE MySQL:** MySQL Workbench;

#### Decisões Tomadas
Foi tomada a decisão de seguir o que foi solicitado no e-mail que descrevia o teste, pensei em fazer algo mais robusto como relacionamento de tabelas sql, criando uma tabela para salvar os atores relacionando-a com a tabela principal de filmes, mas como o teste não exigia tantas coisas, não vi necessidade de realizar métodos mais robustos, pois uma única tabela supria toda a necessidade sem problemas. O código fonte da API também esta documentado explicando cada ENDPOINT e o que cada FUNCTION faz no controller.

#### Desenvolvido por:
Kauan F. Rodrigues (Desenvolvedor Web Full Stack há 4 anos);

#### Links Extras (Portifólio)
- [Crypttus Sistemas](https://crypttus.com.br/)
- [Crypttus Food](https://food.crypttus.com.br/)
- [Crypttus Shop](https://shop.crypttus.com.br/)
- [Parcele Boletos](https://parceleboletos.com.br/)
