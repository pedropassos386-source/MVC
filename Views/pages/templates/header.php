<!DOCTYPE html>
<html lang="Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo self::titulo; ?></title>
    <link href="<?php echo INCLUDE_PATH_FULL ?>style.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
    <div class="center">
        <div class="logo">
            <h2>In The Mind</h2>
        </div><!--logo-->
        <nav class="menu">
            <?php
            foreach ($this->menuItems as $key => $value){
                echo '<a href="'.INCLUDE_PATH.$value.'">'.$value.'</a>';
            }
            ?>
        </nav><!--menu-->
    </div><!--Center-->
</header>
    