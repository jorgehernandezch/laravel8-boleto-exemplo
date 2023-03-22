# Laravel 8 com Biblioteca Laravel Boleto Eduardo Kum
_https://github.com/eduardokum/laravel-boleto

## Començando 🚀

_Siga as seguintes instruções para clonar este repositório em sua máquina local e ver o exemplo do Laravel 8 com Boleto_

### Pre-requisitos 📋

Para clonar este repositório, você deve ter instalado um servidor Apache, PHP e MSQL (Wamp, Xampp, Mamp ou Lamp) e os gerenciadores de dependências para PHP (Composer).

Antes de começar, verifique se você possui o composer com algum dos seguintes comandos em seu terminal.
```
composer --version 
composer -v
```
Se você não o instalou, pode instalá-lo seguindo a documentação oficial em:
https://getcomposer.org/doc/00-intro.md

Verifique as versões de cada um deles

Versión PHP - 7.4.21
Versión Mysql - 5.7.26  
Versión Composer - 2.3.5 

### Instalação 🔧

_Siga as instruções abaixo para clonar o repositório_

_Clone o repositório_

```
git clone https://github.com/jorgehernandezch/Laravel-7-Boleto-Exemplo.git
```

_Instale todas as dependências do projeto com_

```
composer install e composer update
```

_Como o projeto tem dependenças em JS pode instalá-las com_

```
npm install e npm update
```

_Copie o arquivo .env.example para um novo arquivo .env com_

```
cp .env.example .env
```
_Configure o banco de dados e outras variáveis ​​de ambiente no arquivo .env_

_Gerar uma nova Key para o projeto com_

```
php artisan key:generate
```

_Corra las migraciones del proyecto con_

```
php artisan migrate --seed
```

_Execute o projeto com_

```
php artisan serve
```

_Se tudo estiver correto você pode ver o boleto gerado no endereço http://localhost:8000/boleto_ 

_Como Funciona?_
Ao colocar a rota no navegador, o sistema vai gerar um boleto que vai ser processado pelo Controller BoletoController. Os dados são fixos, mas você pode colocar neles dados que podem ser pegados de um Banco de Dados. Ele gera a visualização do Boleto e gera a remessa em uma Pasta chamada arquivos dentro da Pasta Http

---

[Jorge Edo. Hernández](https://github.com/jorgehernandezch)  
_Engenheiro e Desenvolvedor Web_
