<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
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

## Purpose of this App

This App was developed with the purpose to demonstrate the use of Datatables in Laravel using tha yajra package. For more information about the installation
and use of this package visit the [Yarja Datatables documentation](https://yajrabox.com/docs/laravel-datatables/master)

## Installation
1. Run `git clone https://github.com/darkheart101/Laravel_datatables_demo.git`
2. Run `composer install` (install composer beforehand)
3. From the projects root run `cp .env.example .env`
4. Configure your `.env` file
5. Run `php artisan key:generate`
6. Run `php artisan migrate`
7. Run `php artisan db:seed`

## Demo Explanation
The page has three links. The first link shows a simple table loaded with data with the traditional for loop. The second link still loads everything in memory but using Datatables layout for search and pagination. Finally, we have an ajax request that only loads the page with the requested data and making
the load time much less.


