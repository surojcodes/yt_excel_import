<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Application

This application is part of my youtube video.

[Click here](https://youtu.be/Mfx6CrRYQcA) to watch the video.

This repo shows you how to validate and import an excel sheet data into laravel 8 database.

**Instruction**

-   Create your database
-   Modify the .env file to add your database name, username and password

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db_name
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_password
    ```

-   Migrate the table using

    ```
    php artisan migrate
    ```

-   Run the server

    ```
    php artisan serve
    ```

-   Visit the address seen in terminal
