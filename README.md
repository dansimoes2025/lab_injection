# Lab Injection – Mitigação de SQL Injection com OWASP

Repositório oficial do laboratório experimental desenvolvido para análise e mitigação de vulnerabilidades baseadas no OWASP Top 10 (2021).

O projeto implementa duas versões da aplicação:

- 📂 /vulneravel → versão intencionalmente insegura
- 📂 /seguro → versão corrigida com boas práticas

---

## 🎯 Objetivo

Demonstrar, de forma prática e comparativa, a mitigação de:

- SQL Injection (A03:2021 – Injection)
- Cross-Site Scripting (XSS)
- Broken Access Control (A01:2021)
- Cryptographic Failures (A02:2021)

---

⚙️ Ambiente Experimental

- PHP 8.1+
- MySQL 8.0+
- Apache (XAMPP)
- Visual Studio Code
- OWASP ZAP 2.14+

---

🛠 Instalação

### 1️⃣ Clonar o repositório

```bash
git clone https://github.com/SEU-USUARIO/lab_injection.git
