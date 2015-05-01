# Laravel, AngularJS and Foundation starter kit

This is a starter kit for a Single Page Application featuring the modern Laravel PHP framework and Google’s acclaimed front-end framework AngularJS, featured with Foundation 5.5 for the GUI. Just download and play with it to build something great!

## Features!
The "engine" (Laravel and Angular) are powered from [the repository 'starter-laravel-angular' by Zemke](https://github.com/Zemke/starter-laravel-angular).

- Single Page Application
  - HTML5 mode URLs
  - Optimized Laravel and AngularJS routes
    - You kind of don’t need to care about routes, they work automatically as you add new views. Still allows for flexibility if you plan any special routes.
- Authentication!
  - Flexible, extensible, clean
  - Token-based (![tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth))
  - Persistent local storage
- Larevel Elixir readily configured
  - Versioning of CSS and JS files (cache busting)
  - CSS and JS files will be included automatically
- A whole ready CRUD architecture
- Comes with Bootstrap and AngularJS configured to work together at their best
- And more... have a try!

## Installation
Clone the repository
```
git clone https://github.com/JulienBernard/starter-laravel-angular-foundation
```
Install the requirements
```
composer install --prefer-dist
```
```
npm install
```
Laravel stuff: use `artisan` to create the database (see database/migrations/)
```
php artisan migrate
```
Compile and watch any changes
```
gulp
```
```
gulp watch
```
Create an access at localhost:8080
```
php -S localhost:8080 -t public
```

Edit `.env.example` according to your environment and save as `.env`.

## Requirements

- PHP >= 5.4
- Composer
- Gulp
- NPM
- MySQL

## Notices
For now, Foundation was added with it CSS files. Soon, I will pass on SASS files for more flexibility.

Have fun! Any feedback is welcome: use Issues.

![Laravel](https://cloud.githubusercontent.com/assets/3391981/6683259/2e914726-cc84-11e4-856c-bb26bda733a0.png)
![AngularJS](https://cloud.githubusercontent.com/assets/3391981/6683229/9e0ea694-cc83-11e4-9b2e-59524dafd069.jpg)![Foundation](http://foundation.zurb.com/assets/img/support/goodies/why-the-yeti.svg)
