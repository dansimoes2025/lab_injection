# Lab Injection

Laboratório de estudo de técnicas de injeção (SQL, etc), demonstrando versões inseguras e seguras de implementação de login em PHP.

---

## Sumário

- [Descrição](#descrição)  
- [Objetivo](#objetivo)  
- [Conteúdo](#conteúdo)  
- [Instalação](#instalação)  
- [Uso](#uso)  
- [Segurança](#segurança)  
- [Contribuição](#contribuição)  
- [Licença](#licença)

---

## Descrição

Este projeto demonstra exemplos de login em PHP, com versões inseguras (vulneráveis a injeção de SQL) e versões mais seguras. Serve como material educativo para entender as diferenças e aprender boas práticas.

---

## Objetivo

- Mostrar como falhas de segurança podem surgir quando não se valida ou prepara corretamente entradas do usuário.  
- Comparar abordagens inseguras vs seguras.  
- Ajudar no aprendizado de proteção contra injeção de SQL em PHP.

---

## Conteúdo

O repositório possui:

- `conexao.php` — script de conexão com banco de dados.  
- `index.php` — página inicial / formulário de login.  
- `login_inseguro.php` — versão de login vulnerável (não filtra, não usa prepared statements).  
- `login_seguro.php` — versão aplicando práticas seguras (uso de prepared statements, escopo de entrada sanitizada, etc.).

---

## Instalação

Para rodar localmente:

1. Clone o repositório: Clone o repositório:  
   ```bash
   git clone https://github.com/dansimoes2025/lab_injection.git
   
   
2. Coloque os arquivos em um servidor local que suporte PHP (por exemplo, XAMPP, WAMP, LAMP, ou usando php -S).

Configure um banco de dados MySQL/MariaDB:

Crie um banco de dados (ex: lab_injection_db)

Crie uma tabela de usuários com colunas como id, username, password

Ajuste em conexao.php os dados de conexão (host, usuário, senha, nome do banco)

Uso

Acesse index.php no navegador.

Tente logar usando credenciais válidas ou inválidas.

Observe o comportamento das versões insegura vs segura.

Teste casos de injeção de SQL (por exemplo inserindo ' OR '1'='1 em campos de entrada) e veja qual versão evita o problema.

Segurança

A versão segura (login_seguro.php) inclui:

Uso de prepared statements (statements preparados) com PDO ou mysqli (a depender do que foi implementado).

Sanitização/validação dos dados de entrada.

Evita concatenar diretamente valores de usuário em queries SQL.

Recomendações adicionais:

Use hashing seguro para senhas (ex: password_hash / password_verify em PHP).

Proteja contra XSS, CSRF, etc., se ampliar o projeto.

Use conexões seguras (HTTPS) em ambientes de produção.

Contribuição

Contribuições são bem-vindas! Algumas ideias:

Adicionar testes automatizados

Implementar versões com frameworks modernos

Demonstrar outras vulnerabilidades relacionadas

Melhorar documentação

Para contribuir:

Fork este repositório

Crie uma nova branch (git checkout -b minha-melhoria)

Faça seus ajustes / adições

Envie pull request

Licença

Este projeto está licenciado sob a MIT License
 — sinta-se à vontade para estudar, usar e adaptar.

 Autor

dansimoes2025

Projeto criado para fins de aprendizado em segurança de aplicações web, focando em injeção de SQL.





   ```bash
   git clone https://github.com/dansimoes2025/lab_injection.git
