<?php
    $sub_titulo_vantagens = get_field('sub-titulo_vantagens', get_option('page_on_front'));
    $titulo_vantagens = get_field('titulo_vantagens', get_option('page_on_front'));
    $descricao_vantagens = get_field('descricao_vantagens', get_option('page_on_front'));
    $texto_botao_vantagens = get_field('texto_botao_vantagens', get_option('page_on_front'));
    $url_botao_vantagens = get_field('url_botao_vantagens', get_option('page_on_front'));
    $imagem_vantagens = get_field('imagem_vantagens', get_option('page_on_front'));
?>

<div class="vantagens">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-6">
            <div class="vantagens-conteudo">
                    <h2><?php echo $sub_titulo_vantagens; ?></h2>
                    <h3><?php echo $titulo_vantagens; ?></h3>
                    <?php echo $descricao_vantagens; ?>
                    <?php if($url_botao_vantagens != ''): ?>
                        <a href="<?php echo $url_botao_vantagens['url']; ?>"><?php echo $texto_botao_vantagens; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="vantagens-imagem">
        <div>
            <img src="<?php echo $imagem_vantagens['url']; ?>" alt="<?php echo $titulo_vantagens; ?>">
        </div>
        <div>
            <?php if(have_rows('itens_vantagens', get_option('page_on_front'))): ?>
                <?php while( have_rows('itens_vantagens', get_option('page_on_front')) ) : the_row(); ?>
                    <div>
                        <img src="<?php echo get_sub_field('icone')['url']; ?>" alt="<?php echo get_sub_field('titulo'); ?>">
                        <span><?php echo get_sub_field('titulo'); ?></span>
                    </div>                    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>