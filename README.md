# Car Scan

O **Car Scan** é uma aplicação web para gerenciamento de veículos e seus registros de manutenção, desenvolvida com PHP e Laravel.

> **Status: em desenvolvimento**
>
> O projeto ainda está em construção. Algumas funcionalidades descritas no planejamento ainda não estão disponíveis, podem estar incompletas ou sofrer alterações sem aviso. No estado atual, o dashboard continua sendo uma tela inicial, e as áreas de garagem e manutenção ainda estão sendo implementadas.

## Estado atual

### Disponível

* Estrutura inicial da aplicação Laravel.
* Cadastro, login, verificação de e-mail e recuperação de senha.
* Gerenciamento de perfil e preferências de aparência.
* Autenticação em dois fatores e suporte a passkeys.
* Migrações iniciais para usuários, veículos e manutenções.
* Estrutura inicial de rotas e controladores para veículos e manutenções.

### Em desenvolvimento ou ainda não disponível

* Dashboard com informações reais dos veículos e manutenções.
* Telas funcionais para visualizar e cadastrar veículos.
* Histórico e edição de manutenções.
* Atualização automática de quilometragem.
* Alertas de manutenções próximas do vencimento.
* Execução periódica de verificações com Laravel Task Scheduling.

As migrações de veículos e manutenções representam a estrutura planejada, mas não significam que todos esses fluxos já estejam disponíveis na interface.

## Tecnologias

| Área           | Tecnologia |
| -------------- | ---------- |
| Backend        | PHP 8.3+ e Laravel 13 |
| Frontend       | Livewire 4, Blade, Flux e Tailwind CSS 4 |
| Build          | Vite Plus e Laravel Vite Plugin |
| Banco de dados | PostgreSQL |
| Versionamento  | Git e GitHub |

## Pré-requisitos

* **PHP 8.3 ou superior** com as extensões `pgsql` e `pdo_pgsql`
* **Composer**
* **Node.js e NPM**
* **PostgreSQL**
* **Git**

O banco de dados previsto para o projeto é o **PostgreSQL**. Crie uma base de dados e configure as variáveis correspondentes no arquivo `.env`:

## Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/selksi/car-scan.git
cd car-scan
```

### 2. Instale e configure as dependências

O script de configuração instala as dependências, cria o `.env`, gera a chave da aplicação, executa as migrações e compila os assets:

```bash
composer run setup
```

Se preferir executar as etapas manualmente:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Confira se o `.env` contém uma configuração semelhante a esta, ajustando os valores para o seu ambiente:

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Depois, execute as migrações e compile os assets:

```bash
php artisan migrate
npm install
npm run build
```

### 3. Execute a aplicação

Para iniciar o servidor Laravel e o frontend em modo de desenvolvimento:

```bash
composer run dev
```

Alternativamente, execute o backend e o frontend em terminais separados:

```bash
php artisan serve
npm run dev
```

A aplicação estará disponível em <http://localhost:8000>.

## Licença e uso comercial

Este projeto está licenciado sob a **PolyForm Noncommercial License 1.0.0**.

O código pode ser utilizado para fins pessoais, acadêmicos, de estudo, teste e desenvolvimento. Não é permitida a utilização para fins comerciais, sua inclusão em produtos pagos ou qualquer outra forma de exploração comercial sem autorização prévia.

Para consultar os termos completos, consulte o arquivo [`LICENSE`](LICENSE).

## Autor

**Samuel Carvalho**
