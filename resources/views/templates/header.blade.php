<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Simple Blog</title>
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>">
</head>
<body>
    <header id="blog-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo url('/'); ?>">Test Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo url('/category/tech'); ?>">Technology</a>
                        </li>
                    
                    </ul>

                </div>                
            </div>

        </nav>
    </header>