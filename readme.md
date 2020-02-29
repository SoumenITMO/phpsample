### Setup Instruction

- First clone the project
- run composer update
- copy .env.example to .env file
- edit .env file and change database connection
- create database testapi

### Migration 

- php artisan migrate
- php artisan seed:db --class=login
- php artisan seed:db --class=registration

### Go to this following URL 

http://localhost:[PORT]/apis/index.php/home
