<?php
    $titulo_como = get_field('titulo_como_funciona', get_option('page_on_front'));
?>

<div class="como-funciona">
    <div class="container">
        <?php if( ! empty($titulo_como)): ?>
            <h2><?php echo $titulo_como; ?></h2>
        <?php endif; ?>
        <?php if(have_rows('itens_como_funciona', get_option('page_on_front'))): ?>
            <div class="row">
                <?php $cont = 1;
                while( have_rows('itens_como_funciona', get_option('page_on_front')) ) : the_row(); ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="como-funciona-item">
                            <span class="contador"><?php echo $cont; ?></span>
                            <h3><?php echo get_sub_field('titulo'); ?></h3>
                            <p><?php echo get_sub_field('descricao'); ?></p>
                        </div>
                    </div>
                    <?php $cont++;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>