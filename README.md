## Laravel - API Authentication (Sanctum)

Designed and developed to save time when starting a new Laravel project that requires developing an authentication API using Sanctum.

## 🚀 Starting

These instructions will allow you to get a copy of the project running on your local machine for testing purposes.

### 📋 Prerequisites

Taking into account that you have already installed the following tools on your machine:

```
Git, Docker and Docker Compose
```

### 🔧 Installation

A series of step-by-step examples that show you what you should do to get a development environment up and running.

Clone the repository using GIT

```sh
https://github.com/EzequielDhonatan/Laravel-API-Authentication-Sanctum
```

Access the project folder

```sh
cd Laravel-API-Authentication-Sanctum
```

Create the .env file
```sh
cp .env.example .env
```

Upload containers
```sh
docker-compose up -d
```

Access the container
```sh
docker-compose exec app bash
```

Install dependencies
```sh
composer install
```

Generate the Laravel key
```sh
php artisan key:generate
```


## ⚙️ See it working
Access: [http://localhost:8091](http://localhost:8091)

### ⌨️ API (Postman)

To test what was developed, simply access the API documentation

* [Documentation](https://www.postman.com/ezequieldhonatan/laravel-api-authentication-sanctum/overview) - API



## 🛠️ Built with

Technologies and tools used

* [Git](https://git-scm.com/doc) - Version control

* [Git Flow](https://www.atlassian.com/br/git/tutorials/comparing-workflows/gitflow-workflow) - Workflow

* [Docker](https://docs.docker.com/) - Virtualization

* [NGINX](https://docs.nginx.com/) - Server

* [MySQL](https://dev.mysql.com/doc/) - Database (RDBMS)

* [Laravel](https://laravel.com/docs/11.x) - Framewor PHP (Laravel 11.x)

* [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum) - Authentication



## ✒️ Author

Developed by

* **Developer** - [Ezequiel Dhonatan](https://github.com/EzequielDhonatan)
* **Company** - [EZEDHO](https://github.com/EZEDHO)
