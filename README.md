<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Created laravel project and created Expense Module
 Created seperate module for expense module and setup .env with db details

Migrated the defualt migrations in the project and separate expense tables

command : php artisan migrate
run the project  php artisan serve

Folder strcucture 
Modules/
└── Expenses/
    ├── rotes/
    │   └── route.php        # Module routes
    ├── Controllers/
    │   └── ExpenseController.php
    ├── Models/
    │   └── Expense.php       # Eloquent model with UUID
    ├── Requests/
    │   ├── StoreExpenseRequest.php
    │   └── UpdateExpenseRequest.php
    ├── Resources/
    │   └── ExpenseResource.php
    ├── Services/
    │   └── ExpenseService.php
    |└── Repositories/
    |    └── ExpenseRepository.php
    |└── Resources/
    |    └── ExpenseResource.php

  ## setup the routes, controllers, services , repositories, and services, resources to craete , list, delete  and update the expenses throught api 

  ## id created as uuid which will generate automatically through model

The API End points and 

## store
http://127.0.0.1:8000/api/expenses

sample form data passedin the api
## Postman notes
Headers:
Accept - application/json
Content-Type - application/json
 Body - form-data

method - POST

   "title": Test Expense 3,
    "amount": 589.00,
    "category": travel,
    "expense_date": 2025-09-28,
    "notes": test,

## List
method - GET
http://127.0.0.1:8000/api/expenses

## update
method - PUT
body - x-www-form-urlencoded 

http://127.0.0.1:8000/api/expenses/id

## Delete
method - DELETE

http://127.0.0.1:8000/api/expenses/id

## Time Spend - 4-5 Hours






