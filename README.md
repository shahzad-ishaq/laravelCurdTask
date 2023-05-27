<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
 For Run this Code please Used These Command


First 

git clone https://github.com/shahzad-ishaq/laravelCurdTask.git

Second.

composer install

Third 

php artisan generate key

Fourth

composer require laravel/sanctum
and 
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

five 
php artisan migrate


add Sanctum's middleware to your api middleware group within your application's
Just like 

"'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],"


 npm install

 npm run build

 php artisan optimize

 php artisan serve
 
 you can access the in browser like "http://127.0.0.1:8000/"
