<?php
    $titulo_especialista = get_field('titulo_especialista', get_option('page_on_front'));
    $descricao_especialista = get_field('descricao_especialista', get_option('page_on_front'));
    $texto_botao_especialista = get_field('texto_botao_especialista', get_option('page_on_front'));
    $url_botao_especialista = get_field('url_botao_especialista', get_option('page_on_front'));
    $imagem_especialista = get_field('imagem_especialista', get_option('page_on_front'));
?>

<div class="especialista">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="especialista-conteudo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
                    <?php if( ! empty($titulo_especialista)): ?>
                        <h2><?php echo $titulo_especialista; ?></h2>
                    <?php endif; ?>
                    <?php if( ! empty($descricao_especialista)): ?>
                        <p><?php echo $descricao_especialista; ?></p>
                    <?php endif; ?>
                    <a href="<?php echo $url_botao_especialista['url']; ?>"><?php echo $texto_botao_especialista; ?></a>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <img class="especialista-imagem" src="<?php echo $imagem_especialista['url']; ?>" alt="<?php echo $titulo_especialista; ?>">
            </div>
        </div>
    </div>
</div>