# TCC-IFSul-2022
O tema do meu trabalho de conclusão do curso técnico em informática no Instituto Federal Sul-rio-grandesese é um sistema de agendamento de consultas e cadastro de pacientes, médicos e clínicas. A aplicação se chama Find a Doctor, além das funções citadas no tema, também é possível pesquisar e avaliar médicos e clínicas. Find a Doctor foi desenvolvida utilizando os frameworks Laravel e Bootstrap. Abaixo estão as instruções de como instalar e abrir a aplicação:

## Instalando o projeto

#### Clonar o repositório

```
git clone https://github.com/HenriqueCastel/TCC-IFSul-2022
```

#### Instalar as depencências

```
composer install
```

Ou em ambiente de desenvolvimento:

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto configurar os detalhes da aplicação e conexão com o banco de dados.

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
