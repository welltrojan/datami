<?php
    $titulo_juntos = get_field('titulo_juntos', get_option('page_on_front'));
    $texto_botao_juntos = get_field('texto_botao_juntos', get_option('page_on_front'));
    $url_juntos = get_field('url_juntos', get_option('page_on_front'));
    $imagem_de_fundo_juntos = get_field('imagem_de_fundo_juntos', get_option('page_on_front'));
?>

<div class="juntos" style="background-image: url('<?php echo $imagem_de_fundo_juntos['url']; ?>');">
    <span><?php echo $titulo_juntos; ?></span>
    <a href="<?php echo $url_juntos; ?>"><?php echo $texto_botao_juntos; ?></a>
</div>