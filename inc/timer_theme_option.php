<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "timerAgency";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Timer Theme Option', 'TimerAgency' ),
        'page_title'           => __( 'Timer Theme Option', 'TimerAgency' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'TimerAgency' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'TimerAgency' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'TimerAgency' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'TimerAgency' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'TimerAgency' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'TimerAgency' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'TimerAgency' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'TimerAgency' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'TimerAgency' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'TimerAgency' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'TimerAgency' );
    Redux::setHelpSidebar( $opt_name, $content );

    /*
     * <--- END HELP TABS
     */

    /*
     * ---> START SECTIONS
     */

    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
    */

    // Common Fields
    Redux::setSection($opt_name, array(
        'title' => __('Common Option', 'TimerAgency'),
        'id'    => 'common_option',
        'desc'  => __('Common Theme Option', 'TimerAgency'),
        'icon'  => 'el el-opensource'
    ));

        // Logo
        Redux::setSection( $opt_name, array(
            'title'         => __('Logo', 'TimerAgency'),
            'desc'          => __('Change Logo', 'TimerAgency'),
            'id'            => 'logo_img',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'main_logo',
                    'type'      => 'media',
                    'title'     => __('Website Logo', 'TimerAgency'),
                    'desc'      => __('Upload Your Website Logo', 'TimerAgency'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/images/logo.png'
                    )
                ) // Finish Logo
            ) // Finish Logo Fields
        )); // Finish Logo

        // Footer Contact Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Footer Contact Section', 'TimerAgency'),
            'desc'          => __('Footer Contact Section Theme Option', 'TimerAgency'),
            'id'            => 'footer_contact_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'footer_a_contact_on_off',
                    'type'      => 'switch',
                    'title'     => __('Footer Contact Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Footer Area, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Footer Contact On/Off
                
                array(
                    'id'        => 'footer_contact_title',
                    'type'      => 'text',
                    'title'     => __('Footer Contact Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Footer Contact Section Title', 'TimerAgency'),
                    'default'   => 'So What You Think ?'
                ), // Finish Footer Contact Title

                array(
                    'id'        => 'footer_contact_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Footer Contact Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Footer Contact Section Slogan', 'TimerAgency'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.'
                ), // Finish Footer Contact Slogan

                array(
                    'id'        => 'footer_contact_btn',
                    'type'      => 'text',
                    'title'     => __('Footer Contact Section Button', 'TimerAgency'),
                    'desc'      => __('Enter Footer Contact Section Button Label', 'TimerAgency'),
                    'default'   => 'Contact With Me'
                ), // Finish Footer Contact Button

                array(
                    'id'        => 'footer_contact_url',
                    'type'      => 'text',
                    'title'     => __('Contact Page Url', 'TimerAgency'),
                    'desc'      => __('Input Contact Page Url', 'TimerAgency'),
                    'default'   => site_url().'/contact'
                ) // Finish Footer Contact Button Url
            ) // Finish Footer Contact Fields
        )); // Finish Footer Contact Section

        // Footer Copyright & Social Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Footer Copyright & Social Section', 'TimerAgency'),
            'desc'          => __('Footer Copyright & Social Section Theme Option', 'TimerAgency'),
            'id'            => 'footer_copyright_&_social',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'footer_copyright',
                    'type'      => 'editor',
                    'title'     => __('Footer Copyright', 'TimerAgency'),
                    'desc'      => __('Enter Footer Copyright', 'TimerAgency'),
                    'default'   => 'Copyright &copy; <span>2019</span> Design by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a> and Theme Developed by <a href="https://wasekbellah.com">Wasek Bellah</a>.
                    </br>Get More <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">Free Bootstrap Templates.</a>'
                ), // Finish Footer Copyright

                array(
                    'id'        => 'footer_social_menu',
                    'type'      => 'slides',
                    'title'     => __('Footer Social Menu', 'TimerAgency'),
                    'desc'      => __('Add Footer Social Menu. Note: Nothing need to upload anything', 'TimerAgency'),
                    'placeholder' => array(
                        'title' => 'Enter Social Icon Name (ex: facebook), Note: use small case.',
                        'description' => "Don't Input Anything in Here",
                        'url'   => 'Enter Your Social Url'
                    )
                ), // Finish Footer Social Menu
            ) // Footer Copyright & Social Fields
        )); // Footer Copyright & Social Section

        // 404 Page
        Redux::setSection( $opt_name, array(
            'title'         => __('404 Page', 'TimerAgency'),
            'desc'          => __('404 Page Theme Option', 'TimerAgency'),
            'id'            => '404_page',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => '404_page_headline',
                    'type'      => 'text',
                    'title'     => __('404 Page Headline', 'TimerAgency'),
                    'desc'      => __('Enter 404 Page Headline (ex: 404)', 'TimerAgency'),
                    'default'   => '404',
                ), // Finish 404 Page Title
                
                array(
                    'id'        => '404_page_title',
                    'type'      => 'text',
                    'title'     => __('404 Page Title', 'TimerAgency'),
                    'desc'      => __('Enter 404 Page Title', 'TimerAgency'),
                    'default'   => 'Opps! You have some problems',
                ), // Finish 404 Page Title

                array(
                    'id'        => '404_page_slogan',
                    'type'      => 'textarea',
                    'title'     => __('404 Page Slogan', 'TimerAgency'),
                    'desc'      => __('Enter 404 Page Slogan', 'TimerAgency'),
                    'default'   => 'The page you are looking for was moved, removed, renamed or might never existed.',
                ), // Finish 404 Page Slogan

                array(
                    'id'        => '404_page_btn',
                    'type'      => 'text',
                    'title'     => __('404 Page Button', 'TimerAgency'),
                    'desc'      => __('Enter 404 Page Button Label', 'TimerAgency'),
                    'default'   => 'Go Home',
                ), // Finish 404 Page Button

                array(
                    'id'        => '404_page_url',
                    'type'      => 'text',
                    'title'     => __('404 Page Url', 'TimerAgency'),
                    'desc'      => __('Input 404 Page Url.', 'TimerAgency'),
                    'default'   => home_url()
                ) // Finish 404 Page Button Url
            ) // 404 Page Fields
        )); // 404 Page Section
    
    // Template Part Fields
    Redux::setSection($opt_name, array(
        'title' => __('Template Part Option', 'TimerAgency'),
        'id'    => 'temp_part_option',
        'desc'  => __('Template Part Theme Option', 'TimerAgency'),
        'icon'  => 'el el-file-new'
    ));
        // Our Clients Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Our Clients Section', 'TimerAgency'),
            'desc'          => __('Our Clients Section Theme Option', 'TimerAgency'),
            'id'            => 'our_clients',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'our_client_title',
                    'type'      => 'text',
                    'title'     => __('Our Client Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Our Client Section Title', 'TimerAgency'),
                    'default'   => 'Our Happy Clients'
                ), // Finish Feature Offer Title

                array(
                    'id'        => 'our_client_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Our Client Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Our Client Section Slogan', 'TimerAgency'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.'
                ), // Finish Feature Offer Slogan
                
                array(
                    'id'        => 'our_client_post',
                    'type'      => 'slides',
                    'title'     => __('Our Clients', 'TimerAgency'),
                    'desc'      => __('Add Your Clients. Note: Upload Your Client Photo', 'TimerAgency'),
                    'placeholder' => array(
                        'title' => "Don't Input Anything in Here",
                        'description' => "Don't Input Anything in Here",
                        'url'   => "Don't Input Anything in Here"
                    )
                ), // Finish Our Clients
            ) // Our Clients Fields
        )); // Our Clients Section

        // Team Members Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Team Members Section', 'TimerAgency'),
            'desc'          => __('Team Members Section Theme Option', 'TimerAgency'),
            'id'            => 'teamMembers',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'teamMembers_title',
                    'type'      => 'text',
                    'title'     => __('Team Members Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Team Members Section Title', 'TimerAgency'),
                    'default'   => 'Meet The Team'
                ), // Finish Team Members Title

                array(
                    'id'        => 'teamMembers_social',
                    'type'      => 'slides',
                    'title'     => __('Team Members Social', 'TimerAgency'),
                    'desc'      => __('Add Team Members Social. Note: Nothing need to upload anything', 'TimerAgency'),
                    'placeholder' => array(
                        'title' => 'Enter Social Icon Name (ex: facebook), Note: use small case.',
                        'description' => "Don't Input Anything in Here",
                        'url'   => "Don't Input Anything in Here"
                    )
                ), // Finish Team Members Social
            ) // Team Members Fields
        )); // Team Members Section

        // Feature Works Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Feature Works Section', 'TimerAgency'),
            'desc'          => __('Feature Works Section Theme Option', 'TimerAgency'),
            'id'            => 'featureWorks',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'featureWorks_title',
                    'type'      => 'text',
                    'title'     => __('Feature Works Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Feature Works Section Title', 'TimerAgency'),
                    'default'   => 'Some Of Our Features Works'
                ), // Finish Feature Works Title

                array(
                    'id'        => 'featureWorks_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Feature Works Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Feature Works Section Slogan', 'TimerAgency'),
                    'default'   => 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere</br>tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.'
                ), // Finish Feature Works Slogan
            ) // Feature Works Fields
        )); // Feature Works Section

    // Front Page Fields
    Redux::setSection($opt_name, array(
        'title' => __('Front Page Option', 'TimerAgency'),
        'id'    => 'f_page_option',
        'desc'  => __('Front Page Theme Option', 'TimerAgency'),
        'icon'  => 'el el-home'
    ));

        // Header Hero Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Header Hero Section', 'TimerAgency'),
            'desc'          => __('Header Hero Section Theme Option', 'TimerAgency'),
            'id'            => 'header_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'header_hero_bg_img',
                    'type'      => 'media',
                    'title'     => __('Header Hero BG Image', 'TimerAgency'),
                    'desc'      => __('Upload Header Hero Background Image', 'TimerAgency'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/images/header-bg.jpg'
                    )
                ), // Finish Header HEro Background Image

                array(
                    'id'        => 'header_hero_title',
                    'type'      => 'text',
                    'title'     => __('Header Hero Title', 'TimerAgency'),
                    'desc'      => __('Enter Header Hero Title', 'TimerAgency'),
                    'default'   => 'Hi, My name is Wasek & i am a'
                ), // Finish Header Hero Title

                array(
                    'id'        => 'header_hero_slider',
                    'type'      => 'slides',
                    'title'     => __('Header Hero Slider', 'TimerAgency'),
                    'desc'      => __('Add Header Hero Slider. Note: Nothing need to upload anything', 'TimerAgency'),
                    'placeholder' => array(
                        'title' => 'Enter Your Slider',
                        'description' => "Don't Input Anything in Here",
                        'url'   => "Don't Input Anything in Here"
                    )
                ), // Finish Header Hero Slider

                array(
                    'id'        => 'header_hero_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Header Hero Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Header Hero Slogan', 'TimerAgency'),
                    'default'   => "With 10 years experience, I've occupied many roles including digital design director,</br>web designer and developer. This site showcases some of my work."
                ), // Finish Header Hero Slogan

                array(
                    'id'        => 'header_hero_btn',
                    'type'      => 'text',
                    'title'     => __('Header Hero Button', 'TimerAgency'),
                    'desc'      => __('Enter Header Hero Button Label', 'TimerAgency'),
                    'default'   => "View Work"
                ), // Finish Header Hero Button

                array(
                    'id'        => 'header_hero_url',
                    'type'      => 'text',
                    'title'     => __('Header Hero Url', 'TimerAgency'),
                    'desc'      => __('Input Header Hero Url. Note: This link should be an internal link. You have to use an ID link (ex: #works). If you link to the "About Section" then use "#about", If "Latest Work Section" then use "#works", If "Offer Section" then use "#feature".', 'TimerAgency'),
                    'default'   => "#works"
                ), // Finish Header Hero Button Url
            ) // Finish Header Hero Section Fields
        )); // Finish Header Hero Section
        
        // About Me Section
        Redux::setSection( $opt_name, array(
            'title'         => __('About Me Section', 'TimerAgency'),
            'desc'          => __('About Me Section Theme Option', 'TimerAgency'),
            'id'            => 'about_me_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'front_p_about_me_on_off',
                    'type'      => 'switch',
                    'title'     => __('About Me Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Front Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Finish About Me On/Off
                
                array(
                    'id'        => 'about_me_title',
                    'type'      => 'text',
                    'title'     => __('About Me Section Title', 'TimerAgency'),
                    'desc'      => __('Enter About Me Section Title', 'TimerAgency'),
                    'default'   => 'About Me'
                ), // Finish About Me Title

                array(
                    'id'        => 'about_me_content',
                    'type'      => 'editor',
                    'title'     => __('About Me Section Content', 'TimerAgency'),
                    'desc'      => __('Enter About Me Section Content', 'TimerAgency'),
                    'default'   => 'Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University.And scrambled it to make a type specimen book. It has survived not only five centuries</br></br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci voluptatum repudiandae, natus impedit repellat aut officia illum at assumenda iusto reiciendis placeat. Temporibus, vero.'
                ), // Finish About Me Content

                array(
                    'id'        => 'about_me_img',
                    'type'      => 'media',
                    'title'     => __('About Me Section Image', 'TimerAgency'),
                    'desc'      => __('Upload About Me Section Image', 'TimerAgency'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/images/about/about.jpg'
                    )
                ) // Finish About Me Image
            ) // Finish About Me Fields
        )); // Finish About Me Section

        // Latest Work Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Latest Work Section', 'TimerAgency'),
            'desc'          => __('Latest Work Section Theme Option', 'TimerAgency'),
            'id'            => 'latest_work_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'front_p_latest_work_on_off',
                    'type'      => 'switch',
                    'title'     => __('Latest Work Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Front Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Latest Work Me On/Off
                
                array(
                    'id'        => 'latest_work_title',
                    'type'      => 'text',
                    'title'     => __('Latest Work Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Latest Work Section Title', 'TimerAgency'),
                    'default'   => 'Latest Work'
                ), // Finish Latest Work Title

                array(
                    'id'        => 'latest_work_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Latest Work Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Latest Work Section Slogan', 'TimerAgency'),
                    'default'   => 'Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere</br>tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.'
                ) // Finish Latest Work Slogan
            ) // Finish Latest Work Fields
        )); // Finish Latest Work Section

        // Feature Offer Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Feature Offer Section', 'TimerAgency'),
            'desc'          => __('Feature Offer Section Theme Option', 'TimerAgency'),
            'id'            => 'feature_offer_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'front_p_feature_offer_on_off',
                    'type'      => 'switch',
                    'title'     => __('Feature Offer Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Front Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Feature Offer Me On/Off
                
                array(
                    'id'        => 'feature_offer_title',
                    'type'      => 'text',
                    'title'     => __('Feature Offer Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Feature Offer Section Title', 'TimerAgency'),
                    'default'   => 'Offer From Me'
                ), // Finish Feature Offer Title

                array(
                    'id'        => 'feature_offer_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Feature Offer Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Feature Offer Section Slogan', 'TimerAgency'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed,</br>quasi dolores numquam dolor vero ex, tempora commodi repellendus quod laborum.'
                ) // Finish Feature Offer Slogan
            ) // Finish Feature Offer Fields
        )); // Finish Feature Offer Section
    
    // About Page Fields
    Redux::setSection($opt_name, array(
        'title' => __('About Page Option', 'TimerAgency'),
        'id'    => 'about_page_option',
        'desc'  => __('About Page Theme Option', 'TimerAgency'),
        'icon'  => 'el el-info-circle'
    ));

        // About Page Sections
        Redux::setSection( $opt_name, array(
            'title'         => __('About Page Sections', 'TimerAgency'),
            'desc'          => __('About Page Sections Theme Option', 'TimerAgency'),
            'id'            => 'about_page_sections_on_off',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'about_p_company_description_on_off',
                    'type'      => 'switch',
                    'title'     => __('Company Description Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in About Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Company Description Section On/Off

                array(
                    'id'        => 'about_p_company_fearure_on_off',
                    'type'      => 'switch',
                    'title'     => __('Company Fearure Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in About Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Company Fearure Section On/Off

                array(
                    'id'        => 'about_p_team_members_on_off',
                    'type'      => 'switch',
                    'title'     => __('Team Members Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in About Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Team Members Section On/Off

                array(
                    'id'        => 'about_p_clients_on_off',
                    'type'      => 'switch',
                    'title'     => __('Clients Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in About Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Clients Section On/Off
            ) // Finish About Page Sections Fields
        )); // Finish About Page Sections

        // Company Description Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Company Description Section', 'TimerAgency'),
            'desc'          => __('Company Description Section Theme Option', 'TimerAgency'),
            'id'            => 'company_description_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'company_description_img',
                    'type'      => 'media',
                    'title'     => __('Company Description Section Image', 'TimerAgency'),
                    'desc'      => __('Upload Company Description Section Image', 'TimerAgency'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/images/about/about-company.jpg'
                    )
                ), // Finish Company Description Image
                
                array(
                    'id'        => 'company_description_title',
                    'type'      => 'text',
                    'title'     => __('Company Description Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Company Description Section Title', 'TimerAgency'),
                    'default'   => 'Why We Are Different'
                ), // Finish Company Description Title

                array(
                    'id'        => 'company_description_content',
                    'type'      => 'editor',
                    'title'     => __('Company Description Section Content', 'TimerAgency'),
                    'desc'      => __('Enter Company Description Section Content', 'TimerAgency'),
                    'default'   => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br/><br/>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.'
                ) // Finish Company Description Content
            ) // Finish Company Description Fields
        )); // Finish Company Description Section

        // Company Feature Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Company Feature Section', 'TimerAgency'),
            'desc'          => __('Company Feature Section Theme Option', 'TimerAgency'),
            'id'            => 'company_feature_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'company_features',
                    'type'      => 'slides',
                    'title'     => __('Add Company Features', 'TimerAgency'),
                    'desc'      => __('Add Your Company Features. Note: Nothing need to upload anything', 'TimerAgency'),
                    'url'       => true,
                    'placeholder'   => array(
                        'title'   => 'Enter Company Feature Title',
                        'description' => 'Enter Company Feature Description',
                        'url' => 'Enter Data Wow Delay (ex: 300ms)'
                    )
                ) // Finish Company Single Feature
            ) // Finish Company Feature Fields
        )); // Finish Company Feature Section
    
    // Service Page Fields
    Redux::setSection($opt_name, array(
        'title' => __('Service Page Option', 'TimerAgency'),
        'id'    => 'service_page_option',
        'desc'  => __('Service Page Theme Option', 'TimerAgency'),
        'icon'  => 'el el-cog'
    ));

        // Service Page Sections
        Redux::setSection( $opt_name, array(
            'title'         => __('Service Page Sections', 'TimerAgency'),
            'desc'          => __('Service Page Sections Theme Option', 'TimerAgency'),
            'id'            => 'service_page_sections_on_off',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'service_p_service_section_on_off',
                    'type'      => 'switch',
                    'title'     => __('Service Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Service Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Service Section On/Off

                array(
                    'id'        => 'service_p_feature_works_on_off',
                    'type'      => 'switch',
                    'title'     => __('Feature Works Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Service Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Feature Works Section On/Off

                array(
                    'id'        => 'service_p_clients_on_off',
                    'type'      => 'switch',
                    'title'     => __('Clients Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Service Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Clients Section On/Off
            ) // Finish Service Page Sections Fields
        )); // Finish Service Page Sections

        // Services Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Services Section', 'TimerAgency'),
            'desc'          => __('Services Section Theme Option', 'TimerAgency'),
            'id'            => 'services_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'services_section_img',
                    'type'      => 'media',
                    'title'     => __('Services Section Image', 'TimerAgency'),
                    'desc'      => __('Upload Services Section Image', 'TimerAgency'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/images/team.jpg'
                    )
                ), // Finish Services Image
                
                array(
                    'id'        => 'services_section_title',
                    'type'      => 'text',
                    'title'     => __('Services Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Services Section Title', 'TimerAgency'),
                    'default'   => 'What We Love To Do'
                ), // Finish Services Title

                array(
                    'id'        => 'services_section_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Services Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Services Section Slogan', 'TimerAgency'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis porro recusandae non quibusdam iure adipisci.'
                ), // Finish Services Slogan

                array(
                    'id'        => 'services_items',
                    'type'      => 'slides',
                    'title'     => __('Services Items', 'TimerAgency'),
                    'desc'      => __('Add Services Items. Note: Nothing need to upload anything', 'TimerAgency'),
                    'placeholder' => array(
                        'title' => 'Enter Service Title',
                        'description' => 'Enter Service Description',
                        'url' => 'Enter ion ios icon class name (ex: paper). Note: use small case'
                    )
                ) // Finish Services Items
            ) // Finish Services Fields
        )); // Finish Services Section
    
    // Blog Page Fields
    Redux::setSection($opt_name, array(
        'title' => __('Blog Page Option', 'TimerAgency'),
        'id'    => 'blog_page_option',
        'desc'  => __('Blog Page Theme Option', 'TimerAgency'),
        'icon'  => 'el el-book'
    ));

        // Blog Page
        Redux::setSection( $opt_name, array(
            'title'         => __('Blog Page', 'TimerAgency'),
            'desc'          => __('Blog Page Theme Option', 'TimerAgency'),
            'id'            => 'blog_page',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'blog_page_type',
                    'type'      => 'radio',
                    'title'     => __('Blog Page Type', 'TimerAgency'),
                    'desc'      => __('Choose Blog Page Type', 'TimerAgency'),
                    'options'  => array(
                        '1' => 'Full Width', 
                        '2' => 'Left Sidebar', 
                        '3' => 'Right Sidebar'
                    ),
                    'default' => '1'
                ), // Blog Page Type

                array(
                    'id'        => 'blog_page_title',
                    'type'      => 'text',
                    'title'     => __('Blog Page Title', 'TimerAgency'),
                    'desc'      => __('Enter Blog Page Title', 'TimerAgency'),
                    'default'   => 'Blog'
                ) // Finish Blog Page Title
            ) // Finish Blog Page Fields
        )); // Finish Blog Page

        // Blog Post Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Blog Post Section', 'TimerAgency'),
            'desc'          => __('Blog Post Section Theme Option', 'TimerAgency'),
            'id'            => 'blog_post_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'blog_post_read_more_label',
                    'type'      => 'text',
                    'title'     => __('Blog Post Read More Label', 'TimerAgency'),
                    'desc'      => __('Enter Blog Post Read More Label', 'TimerAgency'),
                    'default'   => 'Continue Reading'
                ), // Finish Blog Post Read More Label

                array(
                    'id'        => 'blog_post_prev_pagination',
                    'type'      => 'text',
                    'title'     => __('Blog Post Previous Pagination Label', 'TimerAgency'),
                    'desc'      => __('Enter Blog Post Previous Pagination Label', 'TimerAgency'),
                    'default'   => '&laquo; Prev'
                ), // Finish Blog Post Previous Pagination Label

                array(
                    'id'        => 'blog_post_next_pagination',
                    'type'      => 'text',
                    'title'     => __('Blog Post Next Pagination Label', 'TimerAgency'),
                    'desc'      => __('Enter Blog Post Next Pagination Label', 'TimerAgency'),
                    'default'   => 'Next &raquo;'
                ), // Finish Blog Post Next Pagination Label
            ) // Finish Blog Post Section Fields
        )); // Finish Blog Post Section
    
    // Contact Page Fields
    Redux::setSection($opt_name, array(
        'title' => __('Contact Page Option', 'TimerAgency'),
        'id'    => 'contact_page_option',
        'desc'  => __('Contact Page Theme Option', 'TimerAgency'),
        'icon'  => 'el el-envelope'
    ));

        // Contact Form Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Contact Form Section', 'TimerAgency'),
            'desc'          => __('Contact Form Section Theme Option', 'TimerAgency'),
            'id'            => 'contact_form_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'contact_form_title',
                    'type'      => 'text',
                    'title'     => __('Contact Form Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Contact Form Section Title', 'TimerAgency'),
                    'default'   => 'Contact With Me'
                ), // Finish Contact Form Title

                array(
                    'id'        => 'contact_form_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Contact Form Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Contact Form Section Slogan', 'TimerAgency'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, ea! consectetur adipisicing elit. Dolore, ea!'
                ) // Finish Contact Form Slogan
            ) // Finish Contact Form Fields
        )); // Finish Contact Form Section

        // Map Area Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Map Area Section', 'TimerAgency'),
            'desc'          => __('Map Area Section Theme Option', 'TimerAgency'),
            'id'            => 'map_area_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'contact_p_map_area_on_off',
                    'type'      => 'switch',
                    'title'     => __('Map Area Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Contact Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Map Area On/Off

                array(
                    'id'        => 'map_area_title',
                    'type'      => 'text',
                    'title'     => __('Map Area Section Title', 'TimerAgency'),
                    'desc'      => __('Enter Map Area Section Title', 'TimerAgency'),
                    'default'   => 'Find Us'
                ), // Finish Map Area Title

                array(
                    'id'        => 'map_area_slogan',
                    'type'      => 'textarea',
                    'title'     => __('Map Area Section Slogan', 'TimerAgency'),
                    'desc'      => __('Enter Map Area Section Slogan', 'TimerAgency'),
                    'default'   => 'Si aute quis eu proident o cupidatat ne anim nescius, et est praesentibus, o quorum vidisse expetendis, nostrud eram quibusdam ad nam nostrud ubi.'
                ), // Finish Map Area Slogan

                array(
                    'id'        => 'map_url',
                    'type'      => 'textarea',
                    'title'     => __('Map Url', 'TimerAgency'),
                    'desc'      => __('Enter Map Embeded Url. Note: Input just url', 'TimerAgency'),
                    'default'   => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2773392099252!2d90.36594576854856!3d23.773136415926828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0ae4adf3cb9%3A0x7f2cf443b764e4a4!2sDhaka+Shisu+Mela!5e0!3m2!1sen!2sbd!4v1552741146292'
                ) // Finish Map Url
            ) // Finish Map Area Fields
        )); // Finish Map Area Section

        // Address Details Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Address Details Section', 'TimerAgency'),
            'desc'          => __('Address Details Section Theme Option', 'TimerAgency'),
            'id'            => 'address_details_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'contact_p_address_details_on_off',
                    'type'      => 'switch',
                    'title'     => __('Address Details Section On/Off', 'TimerAgency'),
                    'desc'      => __('If You went to Show This Section in Contact Page, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'TimerAgency'),
                    'default'   => true
                ), // Address Details On/Off

                array(
                    'id'        => 'address_details_items',
                    'type'      => 'slides',
                    'title'     => __('Address Details Items', 'TimerAgency'),
                    'desc'      => __('Add Address Details Items. Note: Nothing need to upload anything', 'TimerAgency'),
                    'placeholder' => array(
                        'title' => 'Enter ion ios icon class name (ex: location). Note: use small case',
                        'description' => 'Enter Address or Contact Information',
                        'url' => "Don't Input Anything in Here"
                    )
                ) // Finish Address Details Items
            ) // Finish Address Details Fields
        )); // Finish Address Details Section