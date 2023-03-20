<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <!-- 合体前 -->
    <header>
        <div class="container">
            <!-- pc表示 -->
            <!-- <ul class="menu">
                <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li>
            </ul> -->   

            <!-- sp>>>🍔 -->
            <!-- 🍔ボタンだよ -->
            <button type="button" class="btn js-btn">
                <span class="btn-line"></span>
            </button>

            <!-- 🍔メニューリスト -->
            <nav id="navi">
                <ul class="menu">
                    <li class="menu-list">Menu01</li>
                    <li class="menu-list">Menu02</li>
                    <li class="menu-list">Menu03</li>
                    <li class="menu-list">Menu04</li>
                </ul>
            </nav>
        </div>
    </header>