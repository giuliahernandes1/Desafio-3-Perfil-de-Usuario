# Sistema de Login com Personalização de Perfil (PHP + MySQL)

Este é um sistema de autenticação simples desenvolvido em PHP puro e MySQL, que permite aos utilizadores fazerem login e definirem uma cor de fundo personalizada para a sua página de perfil através de sessões (`$_SESSION`).

---

## 🚀 Funcionalidades

- **Autenticação de Utilizadores:** Validação de utilizador e senha diretamente na base de dados MySQL.
- **Sessões Persistentes:** Controlo de acesso às páginas restritas usando `session_start()`.
- **Personalização de Interface:** Seleção de cor de fundo via `<input type="color">` enviada no formulário de login e mantida na sessão.
- **Proteção de Rotas:** Redirecionamento automático para a página de login caso um utilizador não autenticado tente aceder ao perfil.
- **Encerramento de Sessão:** Logout completo com limpeza e destruição dos dados da sessão.

---

## 📁 Estrutura do Projeto

```text
.
├── 15d_login.php    # Formulário de login e validação com o banco de dados
├── 15d_perfil.php   # Página restrita que exibe a cor personalizada e o nome do utilizador
└── 15d_logout.php   # Destrói a sessão e redireciona para o login
