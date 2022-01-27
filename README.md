# Dashboard Laravel Admin Ample - v1 with CRUD generator
---

![header](https://github.com/Spyder-code/laravel-admin-ample/blob/main/ndashboard-ample.png)
laravel admin ample adalah template dashboard admin terintegrasi dengan laravel x8 yang simpel dan classic yang dapat digunakan untuk dasbor admin dan panel admin. Template ini dapat dikustomisasi dengan sempurna sesuai kebutuhan.
- Laravel 8
- Bootstrap 4

[Ample Bootstrap Admin Lite](https://www.wrappixel.com/templates/bootstrap-5-ampleadmin/) - Original dashboard template

## Fitur

Fitur dalam Dashboard Laravel Admin Ample:
- Login
- Register
- Visitor viewer
- Management profile
- CRUD generator

## Cara install

Clone the repository

    git clone https://github.com/Spyder-code/laravel-admin-ample.git

Switch to the repo folder

    cd laravel-admin-ample

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://127.0.0.1:8000/

**TL;DR command list**

    git clone https://github.com/Spyder-code/laravel-admin-ample.git
    cd laravel-admin-ample
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Database seeding

**Menambahkan user untuk login pada aplikasi**

Run the database seeder and you're done

    php artisan db:seed

***Note*** : Setelah melakukan seeding, dapat langsung login tanpa registrasi dengan data sebagai berikut:

Email
        
    admin@yahoo.com
        
Password

    admin123
