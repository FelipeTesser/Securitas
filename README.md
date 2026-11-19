<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

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
​3. Rota Fallback: Tratamento customizado para URLs inexistentes (Route::fallback), redirecionando o usuário de volta ao sistema de forma amigável.
​4. Banco de Dados & Migrations: Estruturação relacional (users e veiculos) utilizando Migrations do Laravel.
​5. Seeders (10 Registros): População automatizada do banco de dados (VeiculoSeeder) com 10 registros de motocicletas e status de segurança variados (Protegido, Alerta, Desbloqueado).
​6. Interface Estilizada: Front-end responsivo em modo escuro (Dark Mode) construído com Tailwind CSS, fiel à identidade visual do aplicativo Securitas.