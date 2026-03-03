# LAB INJECTION
## Mitigação de SQL Injection com Diretrizes OWASP em Aplicações PHP/MySQL

**Autor:** Danillo Bryan Dias Simões  
**Curso:** Engenharia de Software  
**Ano:** 2025  

---

## Resumo

Este laboratório experimental foi desenvolvido com o objetivo de avaliar empiricamente a eficácia de técnicas de mitigação de SQL Injection em aplicações web desenvolvidas com PHP e MySQL. O experimento foi estruturado em dois cenários distintos: um ambiente propositalmente vulnerável e um ambiente seguro após a implementação de medidas baseadas nas diretrizes da OWASP.

Os resultados esperados demonstram a eliminação total das vulnerabilidades críticas após a aplicação de consultas parametrizadas (Prepared Statements), controle de sessão e verificação segura de credenciais.

---

## 1. Objetivo

Desenvolver e comparar dois cenários de autenticação web:

1. Versão Vulnerável (com SQL Injection explorável)
2. Versão Segura (com mitigação baseada em OWASP)

Avaliar quantitativamente a redução de vulnerabilidades por meio de testes automatizados com ferramenta DAST.

---

## 2. Fundamentação Técnica

O laboratório baseia-se nas recomendações da:

- OWASP Top 10 (A03:2021 – Injection)
- OWASP ASVS (Application Security Verification Standard)
- Boas práticas de desenvolvimento seguro (Secure SDLC)

A vulnerabilidade de SQL Injection ocorre quando entradas do usuário são interpretadas como parte da consulta SQL devido à concatenação direta de strings.

A mitigação é realizada por meio de:

- Prepared Statements (PDO)
- Separação entre código e dados
- Armazenamento seguro de senhas
- Controle de sessão

---

## 3. Tecnologias Utilizadas

- PHP 8.1
- MySQL 8.0
- Apache (XAMPP)
- MySQL Workbench
- Visual Studio Code
- OWASP ZAP (Dynamic Application Security Testing)

---

## 4. Estrutura do Projeto

lab_injection/
│
├── config/conexao.php
├── vulneravel/login.php
├── seguro/login.php
├── dashboard.php
├── logout.php
├── index.php
├── database.sql
└── README.md

---

## 5. Procedimentos para Execução

### 5.1 Configuração do Banco de Dados

Executar o arquivo:

database.sql

no MySQL Workbench para criar:

- Banco: lab_injection
- Tabela: usuarios

### 5.2 Execução da Aplicação

1. Copiar a pasta para:
   C:\xampp\htdocs\

2. Iniciar Apache e MySQL no XAMPP.

3. Acessar:
   http://localhost/lab_injection

---

## 6. Descrição dos Cenários

### 6.1 Ambiente Vulnerável

Características:

- Concatenação direta de variáveis em consultas SQL.
- Ausência de validação ou parametrização.
- Senhas armazenadas em texto claro.

Payload de teste:

Email:
' OR '1'='1

Resultado esperado:
Autenticação indevida.

---

### 6.2 Ambiente Seguro

Medidas aplicadas:

- PDO com Prepared Statements
- password_verify()
- Validação de sessão
- Separação entre lógica e dados

Resultado esperado:
Bloqueio completo das tentativas de injeção.

---

## 7. Metodologia de Testes

A validação pode ser realizada com OWASP ZAP:

1. Spider automático
2. Active Scan
3. Testes manuais de injeção

Critérios de análise:

- Número de vulnerabilidades detectadas
- Classificação de risco
- Possibilidade de exploração

---

## 8. Resultados Esperados

Ambiente Vulnerável:
- Presença de SQL Injection
- Alertas classificados como High ou Medium

Ambiente Seguro:
- 0 vulnerabilidades críticas
- Bloqueio integral dos payloads maliciosos

---

## 9. Reprodutibilidade

Para replicação do experimento:

1. Configurar ambiente local idêntico.
2. Executar script SQL.
3. Realizar testes no ambiente vulnerável.
4. Aplicar varredura DAST.
5. Repetir testes no ambiente seguro.
6. Comparar métricas obtidas.

---

## 10. Contribuição Científica

Este laboratório demonstra, de forma prática, que:

- A prevenção é mais eficiente que a correção posterior.
- Consultas parametrizadas eliminam SQL Injection.
- A adoção das diretrizes OWASP reduz significativamente a superfície de ataque.

O projeto pode ser utilizado como material de apoio em disciplinas de:

- Segurança da Informação
- Teste de Vulnerabilidades
- Desenvolvimento Seguro
- Engenharia de Software

---

## Licença

Uso acadêmico e educacional.
