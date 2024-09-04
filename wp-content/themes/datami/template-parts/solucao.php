<?php
    $subtitulo_solucao = get_field('sub_titulo_solucao', get_option('page_on_front'));
    $titulo_solucao = get_field('titulo_solucao', get_option('page_on_front'));
    $descricao_solucao = get_field('descricao_solucao', get_option('page_on_front'));
    $url_destino_solucao = get_field('url_destino_solucao', get_option('page_on_front'));
    $imagem_solucao = get_field('imagem_solucao', get_option('page_on_front'));
?>

<div class="home-solucao">
    <div class="container">
        <div class="align-items-center d-flex row">
            <div class="col-lg-5 order-2 order-lg-1">
                <div class="home-solucao-imagem">
                    <img src="<?php echo $imagem_solucao['url']; ?>" alt="<?php echo $titulo_solucao; ?>">
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2 order-1 order-lg-2">
                <div class="home-solucao-conteudo">
                    <h2><?php echo $subtitulo_solucao; ?></h2>
                    <h3><?php echo $titulo_solucao; ?></h3>
                    <?php echo $descricao_solucao; ?>
                    <?php if($url_destino_solucao != ''): ?>
                        <a href="<?php echo $url_destino_solucao['url']; ?>">Saiba Mais »</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>