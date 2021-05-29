# Getting started

## Installation

Clone the repository

    git clone git@github.com:karolSrebrny/Info-Prime-Test.git

Switch to the repo folder

    cd {dir}

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Install all the dependencies using npm

    npm install

Build JS and CSS files

    npm run prod

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
