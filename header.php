<!-- Theme Option Global Variable -->
<?php global $timerAgency; ?>

<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Basic Page Needs -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="<?php get_template_directory_uri(); ?>/favicon.ico">
        <title><?php bloginfo('name'); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="keywords" content="">
        <meta name="author" content="<?php the_author(); ?>">
        <!-- Mobile Specific Metas -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>

        <!-- Header Section -->
        <header id="top-bar" class="navbar-fixed-top animated-header" style="<?php if(is_user_logged_in()){echo 'top: auto'; }?>">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php echo site_url(); ?>" >
                            <img src="<?php echo $timerAgency['main_logo']['url']; ?>" alt="Logo">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                'depth' => 2,
                                'link_after' => ' <span class="caret"></span>',
                                'walker' => new WP_Bootstrap_Navwalker()
                            ));
                        ?>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>