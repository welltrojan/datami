<div class="contato-form">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-6">
                <a href="<?php bloginfo('url'); ?>" class="logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
                <h2>Entre em contato conosco!</h2>
                <p>Agende uma chamada com nossos representantes:</p>
                <?php echo do_shortcode('[contact-form-7 id="1a449f1" title="Contato"]'); ?>
            </div>
            <div class="col-lg-6 d-none d-lg-flex">
                <img class="contato-imagem" src="<?php bloginfo('template_directory'); ?>/images/executivo.png" alt="Contato">
            </div>
        </div>
    </div>
</div>