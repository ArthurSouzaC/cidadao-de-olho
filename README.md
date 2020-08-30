# cidadao-de-olho
API que consome os dados abertos da Assembléia Legislativa do Estado de Minas Gerais e disponibiliza os top 5 deputados que mais pediram reembolso de verbas indenizatórias por mês, além de mostrar o ranking das redes sociais mais utilizadas dentre os deputados. Código desenvolvido para submissão ao desafio de nível intermediário, proposto pelo programa de recrutamento da empresa Codificar.

**Tecnologias utilizadas:** PHP, Laravel.

---
### Rotas

- /api/redes_sociais
Retorna um JSON com o ranking das redes sociais mais utilizadas pelos deputados da ALMG, ordenada em ordem descrescente.

- /api/verbas_ind/2019/{mes}
Retorna um JSON com o ranking dos deputados que mais pediram reembolso de verbas indenizatórias de acordo com um dado mês do ano de 2019.

---
### Instruções

**Pré-requisitos para rodar a aplicação:**
- Ter o [Composer](https://getcomposer.org/) instalado na máquina
- Ter todos os [pré-requisitos necessários para rodar o Laravel](https://laravel.com/docs/7.x#server-requirements)

**Para rodar a aplicação, siga os seguintes passos:**
- Clone o repositório para a sua máquina
- Navegue até o diretório clonado utilizando seu terminal. Exemplo:
```console
cd desktop/cidadao-de-olho
```
- Instale as dependências
```console
composer install
```

- Realizar as configurações iniciais

**Habilite as variáveis de ambiente criando um arquivo ".env" na raiz da aplicação, contendo tudo que há do arquivo ".env.example"** (você pode simplesmente tirar o ".example" do arquivo ".env.example")

Use os comandos
```console
php artisan key:generate
php artisan config:cache
```
OBS: caso haja algum erro nessa fase, rode mais uma vez o comando "composer install" e tente novamente.

- Inicie o banco de dados da aplicação a nível local

A aplicação utiliza o SQLite para armazenar os dados. Para realizar as migrations com sucesso, deve haver um arquivo nomeado "database.sqlite" no diretório "/database" da aplicação. Esse arquivo deve ser criado sem nenhum texto ou quaisquer conteúdos dentro dele.

**Crie o arquivo "database.sqlite"**

Através do terminal (exceto CMD)
```console
cd database
touch database.sqlite
```

Ou simplesmente acesse o diretório "/database" através do explorador de arquivos e crie um arquivo com nome "database.sqlite"

Esse arquivo servirá como um banco de dados a nível local, e armazenará todos os dados após as migrations. Note que se você apagar o arquivo "database.sqlite" ou mudá-lo de diretório, a aplicação encontrará problemas para se conectar ao banco de dados, portanto, se houver algum problema, crie manualmente o arquivo "database.sqlite" no diretório "/database". Lembre-se também de realizar as migrations novamente caso tenha apagado e recriado o arquivo "database.sqlite" por algum motivo.

OBS: caso tenha problemas com o SQLite, basta trocar os dados no arquivo ".env" para se conectar ao banco de dados da sua preferência. Exemplo:

Para se conectar ao MySQL, devem ser feitas as seguintes alterações


DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=laravel

DB_USERNAME=seuusuario

DB_PASSWORD=suasenha



- Realize as migrations, usando o comando
```console
php artisan migrate
```

- Popule o banco de dados com os dados da API, usando o comando
```console
php artisan db:seed
```

- Para visualizar a aplicação no browser, use o comando
```console
php artisan serve
```
Esse comando deixará a aplicação disponível na porta 8000 do seu localhost.
Acesse localhost:8000/{webservice}

---
#### Contato
arthursouza.info@gmail.com
