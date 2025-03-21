# Fortify Project

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Sobre o Projeto

**Fortify Project** é uma aplicação desenvolvida utilizando o framework Laravel (versão 12.3.0), que oferece diversas funcionalidades modernas para criação de aplicações web robustas e escaláveis. Este projeto inclui integração com banco de dados MySQL, gerenciamento de filas por meio de conexões baseadas em banco de dados e outras bibliotecas e ferramentas úteis, como o `tailwindcss` para design responsivo e `vite` para construção e otimização de assets.

## Requisitos

Certifique-se de ter instalado as seguintes tecnologias para executar o projeto:

- **PHP:** versão 8.2 ou superior
- **Composer:** para gerenciar dependências PHP
- **Node.js e npm:** para gerenciar pacotes e construir arquivos front-end
- **MySQL:** para o banco de dados
- **Laravel Sail** (opcional): para um ambiente de desenvolvimento Docker simplificado

## Instalação

Siga estas etapas para configurar o projeto localmente:

1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/fortify-project.git
   cd fortify-project
   ```

2. Instale as dependências PHP:
   ```bash
   composer install
   ```

3. Instale as dependências JavaScript:
   ```bash
   npm install
   ```

4. Configure o arquivo `.env`:
   Copie o arquivo de exemplo `.env.example` para `.env` e configure as variáveis de ambiente, como detalhes do banco de dados e serviços de filas.

   ```bash
   cp .env.example .env
   ```

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Configure o banco de dados:
   Crie um banco de dados no MySQL e execute as migrações e seeds:
   ```bash
   php artisan migrate --seed
   ```

7. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

8. Para compilar os assets front-end:
   ```bash
   npm run dev
   ```

Agora, você pode acessar o projeto no navegador em [http://localhost:8000](http://localhost:8000).

## Funcionalidades Principais

- **Sistema de Autenticação:** Baseado no pacote Laravel Fortify para login, registro e gerenciamento de sessões.
- **Banco de Dados MySQL:** Objeto-relacional com suporte a migrações.
- **Gerenciamento de Filas:** Utilizando a conexão de filas com banco de dados do Laravel.
- **Design Responsivo:** Utilizando `tailwindcss` para um front-end moderno.
- **Compilação e Otimização de Assets:** Utilizando `vite` para desenvolvimento rápido e eficiente.
- **APIs de Terceiros:** Integração com `guzzlehttp` para requisições HTTP.

## Scripts NPM Disponíveis

- `npm run dev`: Inicia o servidor de desenvolvimento.
- `npm run build`: Compila e otimiza os assets para produção.
- `npm run watch`: Reconstrói os assets automaticamente durante o desenvolvimento.

## Estrutura do Projeto

- **Backend:** Laravel Framework.
- **Frontend:** `tailwindcss` e `vite`.
- **Banco de Dados:** MySQL.
- **Gerenciamento de Dependências:**
    - PHP: Composer
    - JavaScript: npm

## Contribuindo

Sinta-se à vontade para contribuir com melhorias, relatórios de bugs ou novas funcionalidades. Por favor, abra um `pull request` com uma descrição clara das alterações realizadas.

### Etapas para contribuição:

1. Faça o fork do repositório.
2. Crie sua branch com a funcionalidade ou correção (`git checkout -b minha-branch`).
3. Commit suas alterações (`git commit -m 'Descrição das alterações'`).
4. Envie para sua branch (`git push origin minha-branch`).
5. Abra um `pull request` no GitHub.

## Licença

Este projeto está licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

## Contato

Se você tiver dúvidas, problemas, ou sugestões sobre o projeto, entre em contato com:

- **Manutenção:** Vinecius
- **E-mail:** contato@viniciuslucio.com.br

---
**Fortify Project** - Feito com ❤️ usando Laravel.
