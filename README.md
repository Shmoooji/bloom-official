# Bloom Project

A customer relationship management software. It could help businesses manage customer interactions and improve customer satisfaction. May it be Software, Tool and resources for your businesses. Good for Business that are in the early stages which it could help attract customers and simplify the business process so it could focus on the main thing which is to increase revenue. Hence why it's name is bloom.

#### Modules:

-   Marketing Automation
-   Sales
-   Customer Service
-   Analytics

## Links

-   [Figma Link](https://www.figma.com/file/iQHsG1Hm0eKl4FcKJG1DTT/BLOOM-Wireframes?node-id=3-146)
-   [Trello](https://trello.com/invite/b/2Lt56hdE/ATTI81e30a97c810967d1a4f7a1ee9a91bdd40539293/bloom)

## Installation

How to contribute

1. Make sure you've downloaded Git or github desktop and forked the repository

-   Please invite your groupmates to your forked repository

2. Once you have the project in your local device, open your terminal and type the following in order:

```bash
composer i

npm i
```

### FRONTEND:

Terminal 1 - Launch a local dev server

```bash
npm run hot
```

### BACKEND

If you're role involves touching the database, please use laravel's database features in the database folder. To learn how to use migrations/factories/seeders, watch [here](https://www.youtube.com/watch?v=g-63ClKANsM)

First, make sure u have the database running in the server by setting up the database in phpmyadmin:

1. Turn on Apache and MySQL in XAMPP
2. Go to http://localhost/phpmyadmin
3. Create new database and name it 'bloom'

Second, inside the VScode terminal:
Setup the Env file

```
cp .env.example .env

php artisan key:generate
```

Go to the .env file and change the value of line 14 to 'bloom' - It should look like this `DB_DATABASE=bloom`

If you want to refresh the migration/seeder:

```
php artisan migrate:refresh --seed

```

If errors are encountered, do this next:

```
php artisan migrate:fresh --seed
```

To run the laravel localhost server:

```
php artisan serve

```

## Contributing

### Forking

1. Fork Repo
2. Code
3. Make a pull request
4. Wait for merge

Watch this [video](https://www.youtube.com/watch?v=k5D37W6h56o) to better understand forking

### CREATING A TICKET BRANCH

Steps to create a ticket branch.

1. Merge "main" branch to "{feature}/main" branch to update the "{feature}/main" branch.
   Ex: services/main, events/main
2. Checkout to "{feature}/main" and do

```
git checkout -b {feature}/{ticket no.}
```

### CREATING A PULL REQUEST

Steps to create a pull request.

1. Commit your changes to the "{feature}/{ticket no.}" branch.
2. Go to the "Pull requests" section and click "New pull request"
3. Set the "compare:" field to your ticket branch.
4. Set the "base:" field to the "{feature}/main" branch. Do not leave it in the default main branch.
5. Click "Create pull request".
6. Write down the changes you have applied based on the code you have contributed. Attach supporting image/s whenever necessary.
7. Click "Create pull request"

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
