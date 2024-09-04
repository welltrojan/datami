<?php

class AdminClass
{
	public function __construct()
	{
		// Theme Support
		// Specific theme support thumbnail for pages and posts
		add_theme_support( 'post-thumbnails' );

		// Menu Support
		add_action('after_setup_theme', array('AdminClass', 'registerMenus'));

        // Disable Yoast Primary
        add_filter( 'wpseo_primary_term_taxonomies', '__return_empty_array' );
        add_filter( 'upload_mimes', array('AdminClass', 'adicionar_tipo_svg') );
	}

    public static function registerMenus()
    {
        register_nav_menus(
            array(
                'principal' => 'Menu Principal',
                'rodape'    => 'Menu Rodapé',
            )
        );
    }

    // Permitir SVG no upload
    public static function adicionar_tipo_svg( $mimes ) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

}

new AdminClass();