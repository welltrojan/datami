<?php

class WpAdminClass
{
    public function __construct()
	{
        add_action('login_footer', array('WpAdminClass', 'footer'));
    }

	// Customize wp-admin with logo and background-color
	public static function footer() {
		$logo 		= get_bloginfo('template_directory') . '/images/logo.svg';
		$main_color = '#FFF';
		?>
			<style>
				body {
					background-color: <?php echo $main_color; ?>;
				}
				.login h1 a {
					background-image: url('<?php echo $logo; ?>');
					width: 100%;
					height: 150px;
					background-position: center;
					background-size: contain;
				}
			</style>
		<?php 
	}

}

new WpAdminClass();