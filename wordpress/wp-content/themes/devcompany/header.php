<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <?php echo esc_html(get_bloginfo('name')); ?>
        </a>

        <nav class="main-navigation">
            <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a>
            <a href="<?php echo esc_url(home_url('/about/')); ?>">О компании</a>
            <a href="<?php echo esc_url(home_url('/services/')); ?>">Услуги</a>
            <a href="<?php echo esc_url(home_url('/contacts/')); ?>">Контакты</a>
        </nav>

        <a href="<?php echo esc_url(home_url('/contacts/')); ?>"
           class="header-button">
            Оставить заявку
        </a>

    </div>
</header>