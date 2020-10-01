# About the demo

This is a order page demo which is developed by Laravel 8 and Bootstrap 4

## How to deploy?

```sh
git clone git@github.com:XumingMa/demo.git

cd ./demo

composer install

cp .env.example .env

#change env database connection information

php artisan key:generate

php artisan migrate

php artisan test

php artisan serve

#Open localhost:8000
```
[Quickly vist online demo](http://cigo.mars.pub)

