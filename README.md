# Introduction

This is a simple todo application created with Laravel and MySQL database.

# Features

- Users can create todo
- Update todo
- Delete todo
- Mark when when done

# Installation

#### Pre-requisite

XAMPP and nodejs installed is the primary requisition.

#### Next-Steps

To install this app just download or clone the repository  and open a terminal in the same folder directory and run the following  commands one by one:

```
composer install
```

```
cp .env.example .env
```

```
php artisan key:generate
```

```
npm install
```

before running the following command configure the **DB_DATABASE** in .env file

```
php artisan migrate
```

```
php artisan serve
```

```
npm run dev
```



Now enjoy the app. ❤
