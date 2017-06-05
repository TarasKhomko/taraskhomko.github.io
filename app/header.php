<?php
require'include/database.php';
require'include/functions.php';


 ?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!--  <script src="/public/js/salvattore.min.js"></script>-->
    <title>Bootstrap Template</title>

    <!-- <link href="public/css/style.css" rel="stylesheet"> Bootstrap -->
    
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <link href="public/css/font-awesome.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                    <span class="sr-only">Открыть навигацию</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/blog/index.php" ><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="collapse navbar-collapse" id="responsive-menu">
                <ul class="nav navbar-nav">
                    <?php $categories = get_categories(); ?>
                    <?php if  ( count($categories)  === 0 ): ?>
                      <li>  <a href="#">add Point</a></li>
                    <?php else: ?>
                        <?php  foreach ($categories as $category): ?>

                            <li><a href="/category.php?id=<?=$category["id"]?>"> <?=$category["title"]?> </a></li>

                        <?php endforeach; ?>
                    <?php endif; ?>

                </ul>
                <div class="collapse navbar-collapse pull-right" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li> <a href="https://www.facebook.com/taras.khomko" > <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> </a></li>
                        <li> <a href="https://vk.com/taraskhomko" > <i class="fa fa-vk fa-2x" aria-hidden="true"></i></a></li>
                        <li> <a href="https://www.linkedin.com/in/taraskhomko/" > <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i> </a></li>
                        <li> <a href="https://www.instagram.com/taraskhomko/" > <i class="fa fa-instagram fa-2x" aria-hidden="true"></i> </a></li>
                        <li> <a href="https://twitter.com/TarasKhomko" > <i class="fa fa-twitter fa-2x" aria-hidden="true"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
