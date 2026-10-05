### Repository Facts

Root: c:\laragon\www\laravel13withVUEjs
Branch: main
HEAD: a4a4615
Remote: https://github.com/akeefazzzmy/laravel13withVUEjs.git

## Top-Level Structure

- .github/
- app/
- bootstrap/
- config/
- database/
- public/
- resources/
- routes/
- storage/
- tests/
- vendor/
- .editorconfig
- .env
- .env.example
- .gitattributes
- .gitignore
- .npmrc
- CLAUDE.md
- artisan
- composer.json
- composer.lock
- laravel13withVUEjs
- package-lock.json
- package.json
- phpstan.neon
- phpunit.xml
- pint.json
- pnpm-workspace.yaml
- tsconfig.json
- vite.config.ts

## package.json

```json
"scripts": {
  "build": "vp build"
  "build:ssr": "vp build && vp build --ssr"
  "dev": "vp dev"
  "check": "vp check"
  "check:fix": "vp check --fix"
  "types:check": "vue-tsc --noEmit"
}
"dependencies": 12 (@inertiajs/vite, @inertiajs/vue3, @tailwindcss/vite, @vitejs/plugin-vue, clsx, concurrently, laravel-vite-plugin, tailwind-merge, tailwindcss, typescript, vite, vue)
"devDependencies": 4 (@laravel/vite-plugin-wayfinder, @types/node, vite-plus, vue-tsc)
```

### LLM Summary

# Repository Understanding — laravel13withVUEjs

**Root:** `c:\laragon\www\laravel13withVUEjs` · branch `main` · HEAD `a4a4615`  
**Note:** The provided facts describe a Laravel + Inertia + Vue app; no Azure DevOps work-item-specific code or docs are listed.

## Where things live
- Top-level: `.github/`, `app/`, `bootstrap/`, `config/`, `database/`, `public/`, `resources/`, `routes/`, `storage/`, `tests/`, `vendor/`
- Root config/tooling: `.editorconfig`, `.env`, `.env.example`, `.gitattributes`, `.gitignore`, `.npmrc`, `artisan`, `composer.json`, `composer.lock`, `package.json`, `package-lock.json`, `phpstan.neon`, `phpunit.xml`, `pint.json`, `pnpm-workspace.yaml`, `tsconfig.json`, `vite.config.ts`
- Documentation: `CLAUDE.md` is the only root doc in the listing. No `README.md`, `AGENTS.md`, or `docs/` appears at root.

## Read first
1. `composer.json` — PHP deps/scripts (scripts not provided).
2. `package.json` — frontend scripts/deps: Inertia, Vue 3, Vite, Tailwind, TypeScript.
3. `vite.config.ts` — Vite/Laravel/Inertia build wiring.
4. `routes/` — HTTP/console entry points.
5. `app/` — Laravel application logic.
6. `resources/` — Vue/Inertia frontend.
7. `phpunit.xml`, `phpstan.neon`, `pint.json`, `tsconfig.json` — test/static-analysis/format/type config.

## Architecture
Laravel + Inertia + Vue 3. Laravel handles backend routing, controllers, models, migrations, and config. Inertia (`@inertiajs/vue3`, `@inertiajs/vite`) bridges Laravel responses to Vue pages. Vite (`laravel-vite-plugin`, `@laravel/vite-plugin-wayfinder`) builds frontend assets. TypeScript is configured via `tsconfig.json` and `vue-tsc`. No separate API layer is visible in the provided facts.

## Key modules/directories
- `app/`: Laravel app code (controllers, models, middleware, providers — not enumerated).
- `bootstrap/`: framework bootstrap.
- `config/`: Laravel config files.
- `database/`: migrations, seeders, factories.
- `public/`: web root/assets.
- `resources/`: Vue/Inertia frontend (SFCs, pages, CSS).
- `routes/`: route definitions.
- `storage/`: logs, cache, compiled views.
- `tests/`: PHP tests.
- `vendor/`: Composer dependencies.
- `.github/`: CI workflows (contents not shown).

## Conventions
- Backend follows standard Laravel structure: MVC, migrations, factories, seeders, PHPUnit.
- Frontend uses Vue 3 + Inertia + TypeScript.
- PHP formatting: Pint (`pint.json`).
- PHP static analysis: PHPStan (`phpstan.neon`).
- Frontend checks: `vp check` / `vp check --fix`; types: `vue-tsc --noEmit`.
- No custom error-handling layer is visible in the provided listing; Laravel defaults are implied by `bootstrap/` and `app/`.

## Build / Test / Lint
Frontend (from `package.json`):
- Dev: `npm run dev` → `vp dev`
- Build: `npm run build` → `vp build`
- SSR build: `npm run build:ssr