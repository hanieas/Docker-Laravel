# Install and Set Up Laravel with Docker Compose


## Why use Docker for Development

- [x] Consistent development environment for the entire team.
- [x] You don't need to install a bunch of language environments on your system.
- [x] You can use different versions of the same programming language.
- [x] Deployment is easy

## How to Install and Run the Project

1. ```git clone git@github.com:hanieas/Docker-Laravel.git```
2. ```cd src```
3. ```composer install```
4. ```docker-compose build```
5. ```docker compose up -d```
6. You can see the project on ```127.0.0.1:8080```
7. You can get phpMyAdmin on ```127.0.0.1:3400```

## How to run Laravel Commands with Docker Compose

1. ```cd src```
2. ```docker-compose exec app php artisan {your command}``` 

## Medium

https://medium.com/@hanieasemi/setting-up-a-laravel-local-environment-with-docker-7541ae170daf

## YouTube 


