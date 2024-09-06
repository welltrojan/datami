<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    
    <?php wp_head(); ?>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
    <!-- Custom JS -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js"></script>

</head>
<body <?php body_class(); ?>>

<?php if( ! wp_is_mobile()): ?>
    <header id="header-desktop">
        <div class="container d-flex align-items-center">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <?php wp_nav_menu( array( 'theme_location' => 'principal' ) ); ?>
        </div>
    </header>
<?php else: ?>
    <header id="header-mobile">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <button id="toggle-menu">
                <img src="<?php bloginfo('template_directory'); ?>/images/menu.svg" alt="Toggle Menu">
            </button>
        </div>
    </header>
    <div id="overlay-mobile">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo-white.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <button id="untoggle-menu">
                <img src="<?php bloginfo('template_directory'); ?>/images/menu-close.svg" alt="Untoggle Menu">
            </button>
        </div>
        <div class="container">
            <p class="descricao-menu"><?php echo get_field('descricao_menu_mobile', 'options'); ?></p>
            <p class="endereco"><?php echo get_field('endereco', 'options'); ?></p>
            <p class="telefone"><strong><?php echo get_field('telefone', 'options'); ?></strong></p>
        </div>
        <div class="container">
            <?php wp_nav_menu( array( 'theme_location' => 'principal' ) ); ?>
        </div>
    </div>
<?php endif; ?>