# Introduction To Laravel
1. run `php artisan migrate:fresh`
2. run `php artisan storage:link` to link storage
3. run `composer require intervention/image` to require image helper library
4. set .env values

# Laravel Telscope
1. run `composer require laravel/telescope` to require telescope
2. run `php artisan telesceope:install` to install
3. run `php artisan migrate` to migrate telescope tables

# Sample Mails
use https://mailtrap.io/ for demo/test emails
- to create email template `php artisan make:mail <name> -m <path/view name>`