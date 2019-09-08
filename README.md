# symfonyCars
This is a symfony project which we try to explain symfony on a youtube channel [دردشة مبرمجين](https://www.youtube.com/playlist?list=PLeNHHYRfm946d0BvwVF0HRosSjslkn_3Q)

## Requirements
* PHP 7.1.3 or higher.
* [Composer](https://getcomposer.org/)

## Installation

1. clone the project to your machine go to the path you want to install the project in then run this command
     ```
     git clone https://github.com/zayanit/symfonyCars.git
    ```
   
2. create an empty DB
3. copy the file `.env.example` contents and create a new file called `.env`
4. cd to your project and run `composer install`
5. chang this line in `.env` file
```
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name
```
add your DB informations

6. run this command `php bin/console server:start` and then you are ready to go