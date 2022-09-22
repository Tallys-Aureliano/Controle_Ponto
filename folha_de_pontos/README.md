# FOLHA DE PONTOS -> SERIDÓ SOFT

## Configurações do projeto

Antes de seguir as instruções logo abaixo, você deve ter instalado o 
1. php
2. composer
3. mysql

Para instalar as dependências, utilize o seguinte comando:

```composer install```

Para configurar a conexão com o banco de dados e outras configurações para que a aplicação funcione corretamente, você deve entrar na pasta raiz e copia o arquivo na raiz do projeto chamado **.env.example** para **.env** e encontrar a configuração do banco. Como padrão está sendo utilizado o **mysql**.

## Gerando a chave de segurança

Para gerar a chave, utilize o comando:

```php artisan key:generate```

## Aplicando migrações

Para popular o banco com as tabelas, você deve utilizao o seguinte comando:
```php artisan migrate```

E para popular as tabelas com os dados iniciais, você deve utilizar o comando:

```php artisan db:seed```

## Rodando a aplicação

Utilize o comando para rodar o projeto:
```php artisan serve```

Até logo!