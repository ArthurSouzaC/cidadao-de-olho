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
cd desktop/oficina-2.0
```
- Instale as dependências
```console
composer install
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
