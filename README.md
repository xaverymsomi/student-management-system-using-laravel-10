laravel 10 and mysql
manage your students through this application  with responsive design and support for your school 

Make sure you have environment setup properly.

You will need PHP8.1, composer and Node.js.

1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure database credentials
3. Navigate to the project's root directory using terminal
4. Run `composer install`
5. Set the encryption key by executing `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate --seed`
7. Start local server by executing `php artisan serve`


remember to configure your database credential
