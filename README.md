# Lab Vulnerável - SQL Injection e Controle de Acesso

Projeto acadêmico desenvolvido para demonstração prática de vulnerabilidades da OWASP Top 10 2021.

## Objetivo

Demonstrar:
- SQL Injection (A03 – Injection)
- Broken Access Control (A01)
- Armazenamento inseguro de credenciais (A02)

E suas respectivas mitigações utilizando:
- PDO
- Prepared Statements
- Controle de Sessão

---

## Estrutura

- /vulneravel → versão intencionalmente insegura
- /seguro → versão mitigada

---

## Requisitos

- PHP 8+
- MySQL
- Apache (XAMPP recomendado)
- MySQL Workbench

---

## Instalação

1. Importar arquivo `database/lab_injection.sql`
2. Copiar pasta para `htdocs`
3. Acessar:

Versão vulnerável:
http://localhost/lab_vulneravel/vulneravel/login.php

Versão segura:
http://localhost/lab_vulneravel/seguro/login.php

---

## Credenciais

admin@lab.com
123456
