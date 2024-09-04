<?php
/**
 * Template Name: Sobre
 */
get_header();

$titulo_intro = get_field('titulo_intro');
$descricao_intro = get_field('descricao_intro');
$imagem_intro = get_field('imagem_intro');
$iframe_video = get_field('iframe_video');
$texto_botao_video = get_field('texto_botao_video');
$url_botao_video = get_field('url_botao_video');
?>

<div class="template-sobre">
    <div class="especialista">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="especialista-conteudo">
                        <?php if( ! empty($titulo_intro)): ?>
                            <h2><?php echo $titulo_intro; ?></h2>
                        <?php endif; ?>
                        <?php if( ! empty($descricao_intro)): ?>
                            <?php echo $descricao_intro; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <img class="especialista-imagem" src="<?php echo $imagem_intro['url']; ?>" alt="<?php echo $titulo_intro; ?>">
                </div>
            </div>
        </div>
    </div>
    <?php if( ! empty('$iframe_video')): ?>
        <div class="sobre-iframe">
            <div class="container">
                <?php echo $iframe_video; ?>
                <a href="<?php echo $url_botao_video['url']; ?>"><?php echo $texto_botao_video; ?></a>
            </div>
        </div>
    <?php endif; ?>
    <?php 
        get_template_part('template-parts/solucao');
        get_template_part('template-parts/segmentos');
    ?>
</div>

<?php get_footer(); ?>