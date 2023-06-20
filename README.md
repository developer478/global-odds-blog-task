# Global Odds Assignment Task

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

## Description

This *PHP Blog POST* has an MVC pattern, uses Traits, Namespace, Singleton pattern, PDO and the new PHP Password Hashing feature (PHP 8.0).

### Requirements & Task 
Create a simple web application with the following functionality:
1. Allow users to create new posts with a title and body.
2. Display a list of all posts on the homepage, sorted by newest first.
3. Allow users to click on a post to view its details, including its comments.
4. Allow users to leave comments on posts.
5. Implement search functionality so that users can search for posts based on
keywords in the title or body.
6. Allow users to edit and delete their posts.
7. Implement pagination on the homepage so that only a certain number of posts are
displayed per page.

## System Requirment:
- PHP 8.0 or Higher
- PHP Extension mbstring
- MySQL/MariaDB 5** or higher.
- HTML, CSS, BootStrap 4.0

## Features
- User Login and Logout
- Blog
-- Create Post
-- Update Post
-- Delete Post
-- All Post Listing
-- Post Detail and Comments
-- Add Commeent

# Installation Guide

### Docker Setup 

Install Docker Engine on Mac, Window and Linux, please follow this [Link](https://docs.docker.com/engine/install/)

### Setup Docker Configuration

Copy & paste file .env.example in the root of docker-engine direcotry
Run the following command to run the docker services
``` 
$~ docker-compose up -d nginx mysql phpmyadmin workspace
```

### Web App URL
```
http://localhost:8000/
```

### PHPMyAdmin

```
Link http://localhost:8081
Host: mysql
Username: root
Password: root
```

### MySQL
```
DB_CONNECTION=mysql
DB_HOST=local
DB_PORT=3306 or 3307
DB_DATABASE=default
DB_USERNAME=root
DB_PASSWORD=root
```

For Installing phpunit package bash into the workspace
```
$~ docker-compose exec workspace bash
$~ composer require --dev phpunit/phpunit
```
### Run PHPUnit Test
```
vendor/bin/phpunit Tests/PostTest.php
```

### Installation Note:
- Please note that you need PHP 8.0 or higher to execute the script
- Please create a database name/user and exucute "db.sql" first
- To change the MySQL connection information, please edit /Engine/Config.php
- Admin login (email/password) is: admin@gmaill.com / pwd123


- Please note that you need PHP 8.0 or higher to execute the script
- Please create a database name/user and exucute "db.sql" first
- To change the MySQL connection information, please edit /Engine/Config.php
- Admin login (email/password) is: test@test.com / pwd123