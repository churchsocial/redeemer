<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/css/all.css?v=<?=wp_get_theme()->get('Version')?>" />
    <script src="<?php bloginfo('template_url') ?>/js/respond.js"></script>
    <?php wp_head() ?>
</head>

<body>

<div id="header-texture"></div>

<div id="container">

    <a href="/" id="logo">
        <div class="helper"></div>
        <?php if (get_theme_mod('header_logo')): ?>
            <img src="<?=get_theme_mod('header_logo')?>" alt="<?php bloginfo('blogname')?>">
        <?php else: ?>
            <div class="text">
                <?php bloginfo('blogname')?>
            </div>
        <?php endif ?>
    </a>

    <?php if (get_theme_mod('service_times')): ?>
        <div id="sunday_services"><strong>Worship with us:</strong> <?=get_theme_mod('service_times')?></div>
    <?php endif ?>

    <ul id="header-menu">
        <li class="show_menu"><a href="#">Menu</a></li>
        <?php if (get_theme_mod('facebook')): ?>
            <li class="facebook">
                <a class="icon icon-facebook" href="<?=get_theme_mod('facebook')?>"></a>
            </li>
        <?php endif ?>
        <?php if (get_theme_mod('twitter')): ?>
            <li class="twitter">
                <a class="icon icon-twitter" href="<?=get_theme_mod('twitter')?>"></a>
            </li>
        <?php endif ?>
        <?php if (get_theme_mod('member_login')): ?>
            <li class="login">
                <a href="<?=get_theme_mod('member_login')?>">Member Login</a>
            </li>
        <?php endif ?>
    </ul>

    <div id="menu">
        <?=get_main_menu(2)?>
    </div>

    <div id="content">
        <div id="banner">
            <?php if (has_post_thumbnail($post->ID)): ?>
                <?=get_the_post_thumbnail($post->ID, is_front_page() ? 'banner_large' : 'banner_small') ?>
            <?php endif ?>
        </div>
        <div id="wysiwyg">