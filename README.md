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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Aula 001

Ver arquivo "Instação composer.txt" na pasta "AulaComposer"

## Aula 002

Model - App/Models (MVC)
Controller - App/Http/Controllers
View - resources/views
Migrations - database/migrations [Ver documentação versão 11](https://laravel.com/docs/11.x/migrations)

Após clonar um projeto no GIT
1. composer install (cria a /vendor)
2. npm install (cria a /node_modules)

Model - App/Models
Controller - App/Http/Controllers
View - resources/views
Migrations - database/migrations
Rotas/Endpoints - routes/web.php

Task (Tarefas - título / feita?)

1. no terminal: php artisan make:model -m Task <!-- para informações sobre o comando: php artisan make --help -->
(Model e a migration de Task)
2. Editar o migration <!-- em database/migrations conforme citado acima -->
3. no terminal: php artisan migrate <!-- para atualizar o BD -->
(Editar controller)
4. Editar o Model ($fillable)
5. no terminal: php artisan make:controller -r TaskController
(Controller com as func index, create, store, show, edit, update, destroy)
6. Ajustar a func() create (view = task.create)
7. resources/views - criar a pasta task > create.blade.php
8. Ajustar o form no create.blade.php
9. Ajustar routes/web.php e adicionar o Route::get('tarefa/cadastro')
render no lugar do VSCode

=========================================================================

30/04

1. Ajustar o create.blade.php para adicionar a tag x-app-layout
2. no terminal> npm run dev <!-- para atualizar o front enqto programa -->
3. Ajustar o create.blade para ter o form e route('task.store')
4. Ajustar o routes/web.php para adicionar o Route::post
5. Ajustar o TaskController para ter a func() store

=========================================================================

07/05

1. Ajustar o Controller index() para devolver as Tasks (Task::all())
2. Criar a view  task/index.blade.php
3. Ajustar o routes/web.php para ter a rota task.index
4. Corrigir a rota de redirect do Controller na store()
5. Ajustar o Controller destroy para fazer $task->delete
6. Ajustar o index para adicionar o form com DELETE
7. Ajustar o routes/web.php para ter a rota task.destroy
8. Ajustar o Controller edit para trazer a task
9. Ajustar routes/web.php para ter a rota task.edit
10. Criar a view task/edit.blade.php
11. Ajustar o Controller update
12. Ajustar o routes/web.php para ter a rota task.update
13. Ajustar o index.blade para ter o link task.edit

=========================================================================

14/05

1. Ajustar a migration create_task_table para adicionar o user_id (foreignIdFor)
2. Executar o php artisan migrate:fresh para recriar o BD
3. Alterar o model Task para ter a func() user
4. Alterar o model User para ter a func()  task
5. Ajustar o Controller Task index() - devolver só as tasks do user logado
6. Corrigir no Model Task o fillable - user_id
7. Ajustar o Controller Task store() - adicionar o user_id
8. Corrigir no Controller Task edit, update, destroy - garantir que o user_id está correto

=========================================================================

28/05

1. 