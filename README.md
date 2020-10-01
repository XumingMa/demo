
[![Build Status](https://travis-ci.com/XumingMa/demo.svg?branch=master)](https://travis-ci.com/XumingMa/demo)

# About the demo

This is a order page demo which is developed by Laravel 8 and Bootstrap 4

## How to deploy?

```sh
git clone git@github.com:XumingMa/demo.git

cd ./demo

composer install

cp .env.example .env

#change env database connection information
#you need to create a database in mysql.

#DB_CONNECTION=mysql
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=cigotest
#DB_USERNAME=cigouser
#DB_PASSWORD=cigopass

php artisan key:generate

php artisan migrate

php artisan serve

php artisan test

#Open localhost:8000
```

[Quickly vist online demo](http://cigo.mars.pub)
