<?php
/**
 * Template Name: Solução
 */
get_header(); 

$sub_titulo_intro = get_field('sub-titulo_intro');
$titulo_intro = get_field('titulo_intro');
$descricao_intro = get_field('descricao_intro');
$imagem_intro = get_field('imagem_intro'); ?>

<div class="solucao-page">
    <div class="intro">
        <div class="container">
            <h1 class="d-none"><?php the_title(); ?></h1>
            <div class="row">
                <div class="order-2 order-lg-1 col-lg-5">
                    <div class="intro-imagem">
                        <img src="<?php echo $imagem_intro['url']; ?>" alt="<?php echo $titulo_intro; ?>">
                    </div>
                </div>
                <div class="align-items-start col-lg-2 d-lg-flex d-none justify-content-center order-lg-2">
                    <img class="efeito-intro" src="<?php bloginfo('template_directory'); ?>/images/solucao-effect-1.svg" alt="Efeito">
                </div>
                <div class="order-1 order-lg-3 col-lg-5">
                    <div class="intro-conteudo">
                        <h3><?php echo $sub_titulo_intro; ?></h3>
                        <h2><?php echo $titulo_intro; ?></h2>
                        <?php echo $descricao_intro; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $titulo_olho = get_field('titulo_olho');
        $descricao_olho = get_field('descricao_olho');
        $itens_olho = get_field('itens_olho');
        $imagem_de_fundo_olho = get_field('imagem_de_fundo_olho');
    ?>
    <div class="de-olho">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="de-olho-conteudo">
                        <h2><?php echo $titulo_olho; ?></h2>
                        <p><?php echo $descricao_olho; ?></p>
                        <?php if(have_rows('itens_olho')): ?>
                            <ul>
                                <?php while( have_rows('itens_olho') ) : the_row(); ?>
                                    <li><?php echo get_sub_field('descricao'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="de-olho-imagem" style="background-image: url('<?php echo $imagem_de_fundo_olho['url']; ?>'); "></div>
    </div>

    <?php
        get_template_part('template-parts/segmentos');
        get_template_part('template-parts/juntos');

        $titulo_investimento = get_field('titulo_investimento');
        $descricao_investimento = get_field('descricao_investimento');
        $imagem_investimento = get_field('imagem_investimento');
    ?>

    <div class="investimento" style="background-image: url('<?php echo $imagem_investimento['url']; ?>');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="investimento-imagem d-none d-lg-flex">
                        <img src="<?php echo $imagem_investimento['url']; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="investimento-conteudo">
                        <h2><?php echo $titulo_investimento; ?></h2>
                        <p><?php echo $descricao_investimento; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        get_template_part('template-parts/como-funciona');
        get_template_part('template-parts/vantagens');
        get_template_part('template-parts/contato');
    ?>

</div>

<?php get_footer(); ?>