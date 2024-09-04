<?php
    $titulo_segmento = get_field('titulo_segmentos', get_option('page_on_front'));
    $imagem_segmento = get_field('imagem_segmentos', get_option('page_on_front'));
?>

<div class="segmentos">
    <div class="container">
        <?php if( ! empty($titulo_segmento)): ?>
            <h2><?php echo $titulo_segmento; ?></h2>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-9 offset-lg-1">
                <div class="row">
                    <?php if(have_rows('itens_segmentos', get_option('page_on_front'))): ?>
                        <?php while( have_rows('itens_segmentos', get_option('page_on_front')) ) : the_row(); ?>
                            <div class="col-6 col-lg-4">
                                <a href="<?php echo get_sub_field('url')['url']; ?>" class="segmento-item">
                                    <img src="<?php echo get_sub_field('icone')['url']; ?>" alt="<?php echo get_sub_field('titulo'); ?>">
                                    <span><?php echo get_sub_field('titulo'); ?></span>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if( ! empty($imagem_segmento)): ?>
        <div class="segmentos-imagem">
            <img src="<?php echo $imagem_segmento['url']; ?>" alt="<?php echo $titulo_segmento; ?>">
        </div>
    <?php endif; ?>
</div>