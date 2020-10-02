# Task management
Simple task management project using Laravel and Tailwind Css

## Installation
First install all the php dependencies
```
composer install
```
Then create the `.env` file. Open a terminal in the project folder and type the
following code depending on your operating system.
- Windows
```
copy .env.example .env
```
- Linux or Mac
```
cp .env.example .env
```

Generate the key for laravel
```
php artisan key:generate
```
Create a database and update the configuration (the name of the database, the username and the password) inside the .env file.
Then migrate the database.
```
php artisan migrate
```

Finally launch the project
```
php artisan serve
```

