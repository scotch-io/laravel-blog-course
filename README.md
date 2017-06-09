# Build a Laravel Blog

We will be building a simple blog application to get to know Laravel 5. 

## Features

- Clean and beautiful design
- Create, edit, and display blog posts
- Create, edit, and display comments
- Create an admin dashboard to manage posts

## Things You'll Learn

- How to setup Laravel
- How to use databases, migrations, and seed with data
- How to create, read, update, and delete (CRUD) in Laravel
- Template and create views for our app

## Installation

- Clone the repo: `git clone git@github.com:scotch-io/laravel-blog-course.git`
- Go into our new directory: `cd laravel-blog-course`
- Install PHP dependencies: `composer install`
- Install npm dependencies: `npm install`
- Setup your server and database connection
- Create `.env` file (copy `.env.example`)
- Create an app key: `php artisan key:generate`
- Migrate and seed: `php artisan migrate:refresh --seed`
- Visit in the browser: <http://localhost:8000>

## A Quick Server + Database Connection

To quickly get this setup without a VM and without a large database system, we can use the [PHP built-in server](http://php.net/manual/en/features.commandline.webserver.php) and file-based [sqlite](https://www.sqlite.org/).

- Create a new database file: `database/database.sqlite`
- Set the proper database connection in `.env`: `DB_CONNECTION=sqlite`
- Migrate and seed: `php artisan migrate:refresh --seed`
- Start a PHP server: `php artisan serve`
- Visit your app in browser at <http://localhost:8000>
