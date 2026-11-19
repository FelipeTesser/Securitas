🛡️ Securitas - Sistema de Segurança Antifurto Veicular IoT (Web)

​Este repositório contém a plataforma web do Securitas, um sistema de segurança e rastreamento antifurto inteligente baseado no conceito de Internet das Coisas (IoT), voltado para motocicletas e automóveis.

​Desenvolvido em Laravel 11 com Laravel Breeze, Tailwind CSS e SQLite/MySQL, o projeto atua como o painel de gerenciamento e controle administrativo do ecossistema Securitas, espelhando as funcionalidades do aplicativo móvel nativo (Android/Kotlin) e da arquitetura embarcada (ESP32 + GPS NEO-6M + Relé de Ignição).

​📋 Sobre o Projeto (TCC)

​O alto índice de roubos e furtos de motocicletas no estado de São Paulo exige soluções acessíveis e preventivas. Os rastreadores comerciais convencionais possuem altos custos de adesão, mensalidades contínuas e operam de maneira reativa por meio de centrais terceirizadas.
​O Securitas propõe a desintermediação da segurança:
​Hardware Embarcado (IoT): Microcontrolador ESP32 integrado ao módulo GPS NEO-6M, Conversor Buck (Step-down) e Relés Mecânicos para corte remoto da ignição.
​Comunicação Bidirecional: Baixa latência para monitoramento de telemetria e envio de comandos de bloqueio e desbloqueio.
​Plataforma Web (Este Repositório): Interface administrativa construída com Laravel Breeze para autenticação segura, dashboard de monitoramento, indicadores em tempo real e gerenciamento completo (CRUD) de veículos protegidos.

​✅ Requisitos Técnicos Implementados

​1. Autenticação Completa (Laravel Breeze): Rotas nativas de Login, Registro de Usuários, Recuperação de Senha e Gerenciamento de Perfil.

​2. Controle de Acesso (Middlewares): Proteção das rotas do painel administrativo (/dashboard) e operações de veículos por meio dos middlewares auth e verified. 

## 🖼️ Prints do Projeto

### 1. Site Funcionando em `localhost` (Página Inicial)
![Tela Inicial Securitas](01-home-localhost.jpg.jpeg)

### 2. Painel de Controle e Listagem CRUD (Dashboard)
![Dashboard Securitas](02-dashboard-localhost.jpg.jpeg)

### 3. Front-End - Cadastro de Veículo (Operação Create)
![Cadastro de Veículo](03-frontend-create.jpg.jpeg)

​3. Rota Fallback: Tratamento customizado para URLs inexistentes (Route::fallback), redirecionando o usuário de volta ao sistema de forma amigável.

​4. Banco de Dados & Migrations: Estruturação relacional (users e veiculos) utilizando Migrations do Laravel.

​5. Seeders (10 Registros): População automatizada do banco de dados (VeiculoSeeder) com 10 registros de motocicletas e status de segurança variados (Protegido, Alerta, Desbloqueado).

​6. Interface Estilizada: Front-end responsivo em modo escuro (Dark Mode) construído com Tailwind CSS, fiel à identidade visual do aplicativo Securitas.

