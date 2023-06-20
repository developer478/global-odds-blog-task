<?php
/**
 * @author           Jam <developer478@gmail.com>
 * @copyright        (c) 2023-2025, Jam. All Rights Reserved.
 * @link             https://codexnova.com
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?=\JamBlog\Engine\Config::SITE_NAME?></title>
        <meta name="author" content="Pierre-Henry Soria" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=ROOT_URL?>public/style.css" />
    </head>
    <body>
        <div class="">
            <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="<?=ROOT_URL?>"><?=\JamBlog\Engine\Config::SITE_NAME?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=ROOT_URL?>">
                        <i class="fa fa-home"></i>
                        Blog
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                        
                        Contact Us
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                        About
                        </a>
                    </li>
                    
                    </ul>
                    <ul class="navbar-nav">
                        <li>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                        <?php if (!empty($_SESSION['is_logged'])): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Dashboard</a>
                                <a class="dropdown-item" href="#">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=ROOT_URL?>?p=admin&amp;a=logout">Logout</a>
                                </div>
                            </li>
                        <?php else: ?>
                            &nbsp;<a href="<?=ROOT_URL?>?p=admin&amp;a=login" class="btn btn-outline-primary my-2 my-sm-0" type="submit">User Login</a>
                        <?php endif ?>
                        </p>
                        
                        
                    </ul>
                </div>
            </nav>