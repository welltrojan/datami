<?php
/**
 * Template Name: Vantagens
 */
get_header(); 

$titulo_vantagens = get_field('titulo_vantagens');
$imagem_lateral_vantagens = get_field('imagem_lateral_vantagens');
?>

<div class="vantagens-interna">
    <div class="vantagens-lista">
        <div class="container">
            <div class="row">
                <div class="offset-lg-4 col-lg-7">
                    <h1 class="d-none"><?php the_title(); ?></h1>
                    <h2><?php echo $titulo_vantagens; ?></h2>
                    <?php if(have_rows('itens_vantagens')): ?>
                        <?php while( have_rows('itens_vantagens') ) : the_row(); ?>
                            <div class="vantagem-item">
                                <div>
                                    <div class="icone">
                                        <img src="<?php echo get_sub_field('icone')['url']; ?>" alt="<?php echo get_sub_field('titulo'); ?>">
                                    </div>
                                    <h3><?php echo get_sub_field('titulo'); ?></h3>
                                </div>
                                <div>
                                    <?php echo get_sub_field('descricao'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="vantagem-imagem-lateral d-none d-lg-flex" style="background-image: url('<?php echo $imagem_lateral_vantagens['url']; ?>');"></div>
    </div>
    <div class="retorno">
        <div class="container">
            <div class="row">
                <div class="offset-lg-2 col-lg-8">
                    <div class="row justify-content-center">
                        <h2><?php echo get_field('titulo_retorno'); ?></h2>
                        <?php while( have_rows('itens_retorno') ) : the_row(); ?>
                            <div class="col-4 col-lg-3">
                                <div class="retorno-item">
                                    <img src="<?php echo get_sub_field('icone')['url']; ?>" alt="<?php echo get_sub_field('titulo'); ?>">
                                    <span><?php echo get_sub_field('titulo'); ?></span>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pontos" style="background-image: url('<?php echo get_field('imagem_de_fundo_pontos')['url']; ?>');">
        <div class="container">
            <h2><?php echo get_field('titulo_pontos'); ?></h2>
            <div class="row">
                <?php while( have_rows('itens_pontos') ) : the_row(); ?>
                    <div class="col-lg-4">
                        <div class="ponto-item">
                            <h3><?php echo get_sub_field('titulo'); ?></h3>
                            <p><?php echo get_sub_field('descricao'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php get_template_part('template-parts/contato'); ?>
</div>

<?php get_footer(); ?>