# Mini Sistema de Gestão de Produtos

Trabalho prático para disciplina de Programação para Internet. Ele inclui funcionalidades de cadastro de usuários, produtos, fornecedores, gerenciamento de carrinho de compras e finalização de pedidos.

## Tecnologias Utilizadas

- **PHP 8.2**
- **MySQL**
- **Bootstrap** (Frontend)
- **JavaScript**
- **Docker** (ambiente de desenvolvimento)

## Funcionalidades do Projeto

- **Autenticação**: Registro e login de usuários.
- **Cadastro de Produtos e Fornecedores**.
- **Carrinho de Compras**: Adicionar/remover produtos.
- **Finalização de Compra**: Criação de pedidos.

## Como Rodar o Projeto

### Com Docker
### Passo 1: Clonar o Repositório

```bash
git clone https://github.com/seu-usuario/periquito_pdv.git
cd periquito_pdv
```

### Passo 2: Configurar o Ambiente

Renomeie o arquivo `.env-example` para `.env` e ajuste as variáveis de ambiente de acordo:

```bash
mv .env-example .env
```

### Passo 3: Subir os Containers

```bash
docker-compose up -d
```

O projeto estará acessível em `http://localhost:8000`.

### Passo 4: Executar as Migrações

```bash
docker exec -it seu-container-php bash
php app/infrastructure/migration.php
```

Com isso, estarão criadas as tabelas no MySQL.

### Estrutura Básica

- **app**: Controllers, camada de infraestrutura, models e actions.
- **public**: Arquivo de entrada `index.php`.
- **resources**: Arquivos de frontend (CSS, JS).

## Comandos Úteis

- **Subir containers**: `docker-compose up -d`
- **Derrubar containers**: `docker-compose down`
- **Acessar o container PHP**: `docker exec -it php_app bash`

O sistema está pronto para uso!
Obs: desenvolvi o projeto utilizando docker para os ambientes pela facilidade, você pode alternativamente instalar em seu sistema as dependências e rodar o projeto normalmente.
