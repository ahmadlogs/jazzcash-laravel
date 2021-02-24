Instructions for creating Jazzcash Payment Gateway in Laravel

1.
Create Laravel Project
composer create-project --prefer-dist laravel/laravel jazzcash-laravel "5.8.*"

2.
Browse to Laravel Project Directory
cd jazzcash-laravel

3. Start Server
php artisan serve

4.
Create database
jazzcash_laravel_db

5.
configure database open the below mention file for configration
.env

6.
Create migrations
Copy folder "my_migration" to database\migrations

php artisan make:migration create_order_table
php artisan make:migration create_product_table

7.
Run Migrations
php artisan migrate --path=/database/migrations/my_mygrations8

8. 
create seeder
php artisan make:seeder ProductTableSeeder

copy folder "Seed" to database\seeds

9.
run seeder
php artisan db:seed --class=ProductTableSeeder

10.
copy folder "images" to
storage\app\public

11. 
link your storage folder to assets
php artisan storage:link

12.
copy folder "style.css" to
public

13.
copy views folder to 
resources/views

14.
Create controllers

php artisan make:controller IndexController
php artisan make:controller CheckoutController

15.
copy folder "Controllers" to
app\Http\Controllers

16.
copy routes from "web.php" to
routes/web.php

17.
set timezone
config/app.php

18.
add the following code

    protected $except = [
        '/paymentStatus'
    ];
	
to
app\Http\Middleware\VerifyCsrfToken.php
