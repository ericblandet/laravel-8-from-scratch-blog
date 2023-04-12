# Laravel Blog !

This repo is the result of a long [laracast course on Laravel](https://laracasts.com/series/laravel-8-from-scratch).

## Stack

-   Laravel Fullstack
-   Docker sail
-   MySql
-   Mailchimp
-   Tailwind
-   Alpine JS

## Concepts covered

The following concepts have been covered:

-   Routes
-   Controllers
-   Models
-   Eloquent
-   Database
-   Factories and seeding
-   Views (blade, blade components)
-   Validation
-   External API consumption, with services and interfaces
-   Authentication
-   Authorization

## How to setup

clone the repo: `gh repo clone ericblandet/laravel-8-from-scratch-blog`

create the .env file:

-   do not forget to name the db_user `sail` and not `root`
-   set mailchimp variables
-   set an app_key

install the packages: `composer install`

Build and mount the images: `./vendor/bin/sail up --build` (or `sail up --build` if already aliased) and finally then browse to http://localhost !

_Have fun !_
