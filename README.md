# ppe-dvtinh99

install 
````
composer require ppe/dvtinh
````
Change file passport.php on
vendor/laravel/passport/config/passport.php
for move passport's table to core database

````
'storage' => [
        'database' => [
            'connection' => env('DB_CORE_CONNECTION', 'ppe_core'),
        ],
    ],
````
