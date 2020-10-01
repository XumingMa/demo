
[![Build Status](https://travis-ci.com/XumingMa/demo.svg?branch=master)](https://travis-ci.com/XumingMa/demo)

# About the demo

This is a order page demo which is developed by Laravel 8 and Bootstrap 4

## Features

- [x] Validate forms, frontend and backend.
- [x] The Scheduled Date should simply validate the content is actually a date *upon
submission*
- [x] Input fields preceded by a label *with a red asterisks are required*, everything else is
mandatory
- [x] Newly submitted orders should instantly **appear in the "Existing Orders"** section below,and be added to the map, in state "Pending"
- [x] Cancelling the order form should reset all of its fields.
- [x] The table of Existing Orders has 4 columns: **First Name**, **Last Name**, **Date** (corresponding to Scheduled Date from the Order form), **Status**
- [x] Statuses can be changed from: Pending, Assigned, On Route, Done, Cancelled
- [x] Removing an order is permanent, need confirmation firs
    > **NOTE:** Confirmed, and provided a soft delete feature.
- [x] *Upon page reload, all of the existing orders are still present*
- [x] Build Api structure

## TODO List

- [ ] Use Api Auth middleware
- [ ] Enhance Api Authorization to OAuth2.0 (Support Client call)
- [ ] If for business, Order status can use state machine (Workflow) construct.
- [ ] Completely separate Frontend and Backend
- [ ] Use Angular for construct entire Front end.
- [ ] Introduce Event Queue Handling (Horizon, redis, ...)
- [ ] ...

## How to deploy locally?

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
