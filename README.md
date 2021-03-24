# Laravel 7 com Biblioteca Boleto

## Començando 🚀

_Siga as seguintes instruções para clonar este repositório em sua máquina local e ver o exemplo do Laravel 7 com Ticket_

### Pre-requisitos 📋

Para clonar este repositório, você deve ter instalado um servidor Apache, PHP e MSQL (Wamp, Xampp, Mamp ou Lamp) e os gerenciadores de dependências para PHP (Composer) e para NodeJs (Npm).

Antes de começar, verifique se você possui o composer com algum dos seguintes comandos em seu terminal.
```
composer --version 
composer -v
```
Se você não o instalou, pode instalá-lo seguindo a documentação oficial em:
https://getcomposer.org/doc/00-intro.md

Verifique também a versão do NPM no terminal com
```
npm --version
```
Se você não o instalou, pode instalá-lo seguindo a documentação oficial em: 
https://www.npmjs.com/get-npm

Verifique as versões de cada um deles

Versión PHP - 7.4.2  
Versión Mysql - 5.7.26  
Versión Composer - 1.10.1  
Versión NPM - 7.0.10  

### Instalação 🔧

_Siga as instruções abaixo para clonar o repositório_

_Clone o repositório_

```
git clone https://github.com/jorgehernandezch/Laravel-Boleto-Exemplo.git
```

_Instale todas as dependências do projeto com_

```
composer install
```

_Como o projeto tem dependências em JS, instale-as com_

```
npm install
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
php artisan migrate
```

_Execute migrações de projeto com_

```
php artisan db:seed
```
_Execute o projeto com_

```
php artisan serve
```

_Se tudo estiver correto você pode acessar o projeto no endereço http://localhost:8000_ com o Usuario admin@admin.com - Admin


---
[Jorge Edo. Hernández](https://github.com/jorgehernandezch)  
_Engenheiro e Desenvolvedor Web_
