# Sistema CRUD de Empresas

Sistema web de gerenciamento de empresas com operações completas de **Create, Read, Update e Delete (CRUD)**, desenvolvido com **PHP**, **MySQL** e **Bootstrap 5**.

---

## Sobre o Projeto

Este projeto permite cadastrar, listar, editar e excluir empresas através de uma interface web simples e responsiva. Os dados são armazenados em um banco de dados MySQL e as operações utilizam **Prepared Statements** para maior segurança contra SQL Injection.

---

## Funcionalidades

- **Cadastrar** empresa (nome, email, setor, telefone, status e data de fundação)
- **Listar** todas as empresas cadastradas
- **Editar** informações de uma empresa
- **Excluir** empresa com confirmação
- Proteção contra SQL Injection com Prepared Statements
- Interface responsiva com Bootstrap 5

---

## Tecnologias

<p>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3"/>
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"/>
</p>

---

## Estrutura do Projeto

```
Sistema-CRUD-de-Empresas/
├── CSS/
│   └── style.css           # Estilos personalizados
├── Imagens/
│   └── empresa.jpg         # Imagem do projeto
├── PHP/
│   ├── config.php          # Configurações do banco de dados
│   ├── connect.php         # Conexão com o MySQL
│   ├── index.php           # Formulário de cadastro
│   ├── processa.php        # Insere empresa no banco
│   ├── listar.php          # Lista todas as empresas
│   ├── editar.php          # Formulário de edição
│   ├── atualizar.php       # Atualiza empresa no banco
│   └── excluir.php         # Exclui empresa do banco
└── SQL/
    └── empresas.sql        # Script de criação do banco de dados
```

---

## Banco de Dados

**Banco:** `sistema_empresas`  
**Tabela:** `empresas`

| Campo | Tipo | Descrição |
|---|---|---|
| id | INT (PK, AUTO_INCREMENT) | Identificador único |
| nome | VARCHAR(75) | Nome da empresa |
| email | VARCHAR(100) | Email de contato |
| setor | VARCHAR(100) | Setor de atuação |
| telefone | VARCHAR(20) | Telefone de contato |
| status | ENUM | Funcionando / Temporariamente fechada / Fechada |
| data_de_fundacao | DATE | Data de fundação |

---

## Como Executar

### Pré-requisitos
- PHP 8.x
- MySQL / MariaDB
- Servidor local: **XAMPP**, **WAMP** ou similar

### Passo a passo

**1. Clone o repositório**
```bash
git clone https://github.com/helcioshimoda/Sistema-CRUD-de-Empresas.git
```

**2. Mova a pasta para o servidor local**
```
C:/xampp/htdocs/Sistema-CRUD-de-Empresas
```

**3. Crie o banco de dados**
- Acesse o **phpMyAdmin** (`http://localhost/phpmyadmin`)
- Crie um banco chamado `sistema_empresas`
- Importe o arquivo `SQL/empresas.sql`

**4. Configure a conexão**

Edite o arquivo `PHP/config.php` com suas credenciais:
```php
$DB_host = "localhost";
$DB_user = "root";
$DB_password = "sua_senha";
$DB_name = "sistema_empresas";
```

**5. Acesse no navegador**
```
http://localhost/Sistema-CRUD-de-Empresas/PHP/index.php
```

---

## Autor

**Helcio Yuji Shimoda**  
Estudante de Análise e Desenvolvimento de Sistemas — Fatec Campinas

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/helcio-shimoda/)
[![Gmail](https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:helcioshimoda@gmail.com)
