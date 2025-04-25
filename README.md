# Laravel Project

This is a Laravel-based web application. Follow the steps below to set up and run the project locally.

---

## 🚀 Getting Started

###  Clone the Repository


git clone <your-repo-url>
cd <your-project-directory>

### Use Node.js version 20
nvm use 20

### Install Node and PHP dependencies
npm install
composer install

### Generate application key
php artisan key:generate

### Copy the environment file
cp .env.example .env


### make sure update the env file

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

### also migrate the table into your_database

php artisan migrate

### Start the Development Server

php artisan serve
npm run dev

###  Test your app
http://localhost:8000
