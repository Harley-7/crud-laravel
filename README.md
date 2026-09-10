## 🛠 Instalação do Projeto

Siga os passos abaixo para configurar o ambiente de desenvolvimento e instalar o projeto localmente.

### 🔄 1. Clonar o Repositório

Para clonar o repositório, utilize o seguinte comando:


```bash
git clone https://github.com/Harley-7/crud-laravel.git
```


### 📂 2. Navegar até o Diretório do Projeto

Depois de clonar, entre no diretório do projeto com:


```bash
cd crud-laravel
```


### 📦 3. Instalar Dependências

Para instalar todas as dependências do projeto, você pode utilizar os comandos abaixo:


```bash
composer install
```

```bash
npm install
```


OBS: se ocorrer um erro em PackageManifest.php line 179, apague e crie novamente a pasta cache que está em CRUD-com-livraria\projeto\bootstrap\


### ⚙️ 4. Configurar Variáveis de Ambiente

Crie um arquivo .env na raiz do projeto, utilizando o arquivo de exemplo como base. Para isso, copie o arquivo .env.example com o seguinte comando:


```bash
cp .env.example .env
```


### 🛢 5. Criar o Banco de dados

crie um banco de dados chamado bookstore

em seguida utilize o comando abaixo:


```bash
php artisan migrate --seed
``` 


### 🚀 6. Iniciar o Servidor de Desenvolvimento

Para iniciar o servidor de desenvolvimento, utilize os comandos abaixo:


```bash
php artisan serve
```

```bash
npm run dev
```


O projeto estará disponível no navegador no endereço http://127.0.0.1:8000

