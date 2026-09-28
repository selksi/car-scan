# Car Scan

O **Car Scan** é uma aplicação web em desenvolvimento em **PHP com Laravel**, criada para facilitar o gerenciamento e o acompanhamento da manutenção de veículos.

O sistema permite cadastrar veículos, registrar manutenções e acompanhar automaticamente a quilometragem e os prazos de validade dos componentes, auxiliando na prevenção de manutenções atrasadas.

## Funcionalidades

### Gestão de veículos

* Cadastro de veículos com marca, modelo, ano e quilometragem atual.
* Organização dos veículos vinculados a cada usuário.

### Histórico de manutenções

* Registro dos serviços realizados em cada veículo.
* Controle de validade por **quilometragem**.
* Controle de validade por **data**.
* Histórico das manutenções realizadas.

### Atualização automática

* Sincronização da quilometragem do veículo com os registros de manutenção.
* Atualização dos dados utilizados pelo painel de acompanhamento.

### Sistema de alertas

* Verificação automática de manutenções próximas do vencimento.
* Utilização do **Laravel Task Scheduling** para execução das verificações de forma periódica.

### Autenticação

* Contas de usuário independentes.
* Cada usuário possui acesso somente aos seus próprios veículos e registros de manutenção.

## Tecnologias

| Área           | Tecnologia        |
| -------------- | ----------------- |
| Backend        | PHP 8.x + Laravel |
| Arquitetura    | MVC               |
| Frontend       | Blade, HTML e CSS |
| Banco de dados | PostgreSQL        |
| Versionamento  | Git + GitHub      |

## Pré-requisitos

Antes de executar o projeto, certifique-se de possuir:

* **PHP 8.x** com as extensões `pgsql` e `pdo_pgsql`
* **Composer**
* **Node.js e NPM**
* **PostgreSQL**
* **Git**

## Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/selksi/car-scan.git
cd car-scan
```

### 2. Instale as dependências

Instale as dependências do PHP e do frontend:

```bash
composer install
npm install
npm run build
```

### 3. Configure o ambiente

Copie o arquivo de configuração de exemplo:

```bash
cp .env.example .env
```

Gere a chave da aplicação:

```bash
php artisan key:generate
```

### 4. Configure o PostgreSQL

Crie uma base de dados no PostgreSQL e configure as credenciais no arquivo `.env`:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome_da_sua_base_de_dados
DB_USERNAME=seu_utilizador_postgres
DB_PASSWORD=sua_palavra_passe
```

### 5. Execute as migrações

Para criar a estrutura do banco de dados:

```bash
php artisan migrate
```

### 6. Execute a aplicação

Em um terminal, inicie o servidor Laravel:

```bash
php artisan serve
```

Em outro terminal, inicie o agendador de tarefas:

```bash
php artisan schedule:work
```

A aplicação estará disponível em:

```text
http://localhost:8000
````

Os dados são persistidos em **PostgreSQL**, utilizando relacionamentos entre usuários, veículos e manutenções.

## Licença e uso comercial

Este projeto está licenciado sob a **PolyForm Noncommercial License 1.0.0**.

### Uso não comercial

O código pode ser utilizado livremente para:

* Uso pessoal;
* Estudos;
* Projetos acadêmicos;
* Testes e desenvolvimento;
* Gerenciamento da própria garagem.

### Uso comercial

Não é permitida a utilização do software para fins comerciais, sua inclusão em produtos pagos ou qualquer forma de exploração comercial sem autorização prévia.

Oficinas, empresas ou outras organizações interessadas em utilizar o sistema comercialmente devem entrar em contato com o autor para negociação de uma **Licença Comercial Privada**.

Para consultar os termos completos, consulte o arquivo [`LICENSE`](LICENSE).

## Autor

**Samuel Carvalho**

Desenvolvido como projeto utilizando **PHP, Laravel e PostgreSQL**.

---
