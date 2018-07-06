# Sample Vet:  A client and patient portal
This repository provides a small crud interface for managing patients and their owners.
It is constructed using Laravel 5.6 and is styled with Bootstrap.

## Requirements:
PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension

## To install:
1. Run `git clone https://github.com/kaminagi/sample-vet.git` in the directory you wish to use
1. In the root of the project, run `composer install` to pull in dependencies
1. Create an .env file using .env.example as the base
1. Modify this `.env` file to add your mysql database credentials.
1. From the root of the project, run `php artisan migrate` to initialize the database
1. Configure an apache site with the root pointed towards `/var/www/html/public` or `$YOUR_INSTALL_LOCATION/public`

## Miscellaneous Thoughts
I considered implementing this with a series of JSON-returning services and jQuery ajax requests.  Should such an solution be deemed highly preferable, this repository could be modified upon request.
