# Ambiente de Boas Práticas Reconfiguráveis de Engenharia de Software (ABPRES)

## Equipe

- Helder Rangel [@helder-rangel](https://github.com/helder-rangel)
- Matheus Augusto [@mattaugusto](https://github.com/mattaugusto)
- Maurício de Lira [@mauriciodelira](https://github.com/mauriciodelira)
- Rafael Cardoso [@rcardosoo](https://github.com/rcardosoo)


## Para melhor visão geral do projeto...


## Requisitos iniciais

- Linux + GitFlow (ou windows com Git Bash mais recente - já vem com `git-flow`)
- Editor de texto ou IDE
- PostgreSQL instalado
- PHP 7.1
- Composer

### Para linux

```
sudo apt-get install git-flow
sudo apt-get install postgres-9.6
sudo apt-get install pgadmin3           // se preferir a GUI do pgAdmin
sudo apt-get install php7.1
sudo apt-get install php7.1-pgsql
sudo apt-get install php7.1-xml         // nem sempre necessário
sudo apt-get install php7.1-json        // nem sempre necessário
sudo apt-get install php7.1-mbstring    // nem sempre necessário
sudo apt-get install php7.1-zip         // nem sempre necessário
sudo apt-get install composer
```

Uma vez com as dependências instaladas, configure o PostgreSQL
e crie um novo database para ser usado pelo projeto:


- Configurações iniciais: [Getting Started with PostgreSQL- suite.opengeo.org](http://suite.opengeo.org/docs/latest/dataadmin/pgGettingStarted/firstconnect.html)
- Após configurar o PostgreSQL, entre no console e crie a base de dados:

```
psql -U [usuário (default: postgres)] -W
[digite sua senha para o usuário postgres]

[usuário]=# CREATE DATABASE abpresa_dev;
CREATE DATABASE         // deve aparecer abaixo após criar o database com sucesso 

// PS: fica criada para o usuário que você colocou após o -U do comando `psql -U [username]`

[usuário]=# \q           // para sair do console psql
```

## Iniciando o projeto

`git clone https://github.com/gpes-ifpb/abpresa.git`

```
git flow init       // para quem for desenvolver.

Branch name for production releases: [master] 
Branch name for "next release" development: [develop]

How to name your supporting branch prefixes?
Feature branches? [feature/]        // enter
Bugfix branches? [bugfix/]          // enter
Release branches? [release/]        // enter
Hotfix branches? [hotfix/]          // enter
Support branches? [support/]        // enter
Version tag prefix? [] v            // não esquecer do "v" aqui
Hooks and filters directory? [[caminho-para-o-projeto]/abpresa/.git/hooks]      // enter
```

Você agora possui os arquivos do projeto em seu computador!

## Buscando as dependências do projeto

Uma vez clonado o repositório e o `git flow` configurado, 
vamos baixar as dependências do projeto:

```
composer update
composer install
```

## Configurando o projeto

Feito isso, vamos configurar o projeto. Na raiz, há um 
arquivo chamado `.env.example`. Crie uma cópia dele 
com o nome `.env` apenas, e edite as seguintes linhas:

```
APP_NAME=ABPRESA

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=[database que você criou anteriormente]
DB_USERNAME=[usuário que você configurou anteriormente junto com o postgres]
DB_PASSWORD=[senha do usuário acima]
```

Agora que a conexão com o banco está configurada, 
precisamos gerar uma chave secreta. Isso vai atualizar 
o seu arquivo `.env` com a nova chave gerada.

```
php artisan key:generate
```

E rode as migrations para criar as entidades no banco:

```
php artisan migrate
```

Para rodar o projeto agora, dê um:

```
php artisan serve
```