# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

A Symfony 4.2 educational web application (used for a YouTube tutorial series) that demonstrates core Symfony concepts. It uses PHP 7.1+, Doctrine ORM, Twig templates, KnpMenuBundle for navigation, and SwiftMailer.

## Setup

1. Copy `.env.example` to `.env` and set `DATABASE_URL=mysql://user:pass@127.0.0.1:3306/dbname`
2. `composer install`
3. Create the database schema: `php bin/console doctrine:migrations:migrate`

## Common Commands

```bash
# Start dev server
php bin/console server:start

# Run tests
./vendor/bin/phpunit

# Run a single test file
./vendor/bin/phpunit tests/Path/To/TestFile.php

# Clear cache
php bin/console cache:clear

# Generate entity/migration
php bin/console make:entity
php bin/console make:migration
php bin/console doctrine:migrations:migrate

# Debug routes
php bin/console debug:router
```

## Architecture

- **Controllers** (`src/Controller/`) — Annotation-based routing (`@Route`). Extend `AbstractController`.
- **Entities** (`src/Entity/`) and **Repositories** (`src/Repository/`) — Doctrine ORM; migrations in `src/Migrations/`.
- **Templates** (`templates/`) — Twig. `base.html.twig` is the layout; page templates extend it.
- **Navigation** (`src/Menu/MenuBuilder.php`) — KnpMenuBundle. The menu is registered as a service (`app.main_menu`) in `config/services.yaml` and rendered via the `knp_menu_render('main')` Twig helper.
- **Services** — Autowiring and autoconfiguration are enabled. Manually registered services (like `MenuBuilder`) are wired in `config/services.yaml`.
- **Security** — Currently set to anonymous access with an in-memory provider (no real auth implemented yet).

## Key Configuration Files

| File | Purpose |
|------|---------|
| `config/packages/doctrine.yaml` | DB connection and ORM mapping |
| `config/packages/security.yaml` | Firewalls and access control |
| `config/services.yaml` | Manual service wiring (especially KnpMenu) |
| `config/routes/annotations.yaml` | Enables annotation-based routing in `src/Controller/` |
