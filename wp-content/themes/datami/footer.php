<footer>
    <div class="container">
        <div class="info-rodape">
            <a href="<?php bloginfo('url'); ?>" class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <p class="descricao-menu"><?php echo get_field('descricao_menu_mobile', 'options'); ?></p>
            <p class="endereco"><?php echo get_field('endereco', 'options'); ?></p>
            <p class="telefone"><strong><?php echo get_field('telefone', 'options'); ?></strong></p>
        </div>
    </div>
    <div class="container">
        <?php wp_nav_menu( array( 'theme_location' => 'rodape' ) ); ?>
        <button id="subir">Voltar ao Topo <img src="<?php bloginfo('template_directory'); ?>/images/subir.svg" alt="Voltar ao topo"></button>
        <p class="developed">Desenvolvido por Diagrammer Design - <?php echo date('Y'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>