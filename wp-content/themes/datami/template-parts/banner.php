<?php
    $titulo_banner = get_field('titulo_banner');
    $frase_01_banner = get_field('frase_01_banner');
    $frase_02_banner = get_field('frase_02_banner');
    $frase_03_banner = get_field('frase_03_banner');
    $texto_botao_banner = (get_field('texto_botao_banner') == '') ? 'Clique aqui' : get_field('texto_botao_banner');
    $url_botao_banner = get_field('url_botao_banner');
    $imagem_banner = get_field('imagem_banner');
?>

<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php if($titulo_banner != ''): ?>
                    <h2><?php echo $titulo_banner; ?></h2>
                <?php endif; ?>
                <?php if($frase_01_banner != ''): ?>
                    <p class="frase-01"><?php echo $frase_01_banner; ?></p>
                <?php endif; ?>
                <?php if($frase_02_banner != ''): ?>
                    <p class="frase-02"><?php echo $frase_02_banner; ?></p>
                <?php endif; ?>
                <?php if($frase_03_banner != ''): ?>
                    <p class="frase-03"><?php echo $frase_03_banner; ?></p>
                <?php endif; ?>
                <?php if($url_botao_banner != ''): ?>
                    <a class="botao-banner" href="<?php echo $url_botao_banner['url']; ?>"><?php echo $texto_botao_banner; ?> »</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="banner-imagem">
        <img src="<?php echo $imagem_banner['url']; ?>" alt="<?php echo $titulo_banner; ?>">
    </div>
</div>