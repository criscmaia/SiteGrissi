<?php
    $paginaaberta = $_SERVER['REQUEST_URI']; //pega a página aberta e salva
?>

<div id="navcontainer">
    <ul id="navlist">
        <li>|<a href="/home" <?php if ($paginaaberta=='/home.php' ) echo 'id="current"'; ?>> P&aacute;gina Principal</a> |</li>

        <li><a href="/arvore-genealogica.php" <?php if ($paginaaberta=='/arvore-genealogica.php' ) echo 'id="current"'; ?>> &Aacute;rvore Geneal&oacute;gica 2</a> |</li>

        <li><a href="/historia" <?php if ($paginaaberta=='/historia.php' ) echo 'id="current"'; ?>> Hist&oacute;ria</a> |</li>

        <li><a href="/lembrancas" <?php if ($paginaaberta=='/lembrancas.php' ) echo 'id="current"'; ?>> Lembran&ccedil;as</a> |</li>

        <li><a href="/negocios" <?php if ($paginaaberta=='/negocios.php' ) echo 'id="current"'; ?>> Neg&oacute;cios</a> |</li>

        <li><a href="/noticias" <?php if ($paginaaberta=='/noticias.php' ) echo 'id="current"'; ?>> Noticias</a> |</li>

        <li><a href="/fotos" <?php if ($paginaaberta=='/fotos.php' ) echo 'id="current"'; ?>> Fotos</a> |</li>

        <li><a href="/contato" <?php if ($paginaaberta=='/contato.php' ) echo 'id="current"'; ?>> Contato</a> |</li>

    </ul>
</div>
