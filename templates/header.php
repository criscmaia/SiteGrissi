<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maia Projects</title>

    <title>Família Grizzo . Grice . Gris . Grissi -
        <?= htmlspecialchars($title) ?>
    </title>

    <link rel="stylesheet" type="text/css" href="index.css" />

    <link rel="alternate" href="http://www.familiagrissi.com.br/" hreflang="pt" />
    <!-- Google Analytics -->
    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-80216670-1', 'auto');
        ga('require', 'linkid');
        ga('send', 'pageview');

    </script>
    <script async src='https://www.google-analytics.com/analytics.js'></script>
    <!-- End Google Analytics -->
</head>

<body>
    <div id="layout">
        <div class="bordacentro">
            <div class="bordaesquerda"></div>
            <div class="bordadireita"></div>
        </div>

        <div id="left"></div>

        <div id="pageheader">
            <div id="tituloleft"></div>
            <div id="titulocenter">
                <div id="titulo">
                    <span>Fam&#237;lia Grizzo . Grice . Gris . Grissi</span>
                </div>
                <div id="subtitulo">
                    <span>Uma fam&#237;lia originalmente italiana</span>
                </div>
            </div>
            <div id="tituloright"></div>
        </div>

        <div id="centralizarmenu">
            <?php
                $paginaaberta = $_SERVER['REQUEST_URI']; //pega a página aberta e salva
            ?>
                <div id="navcontainer">
                    <ul id="navlist">
                        <li>|<a href="/" <?php if ($paginaaberta=='/' ) echo 'id="current"'; ?>> P&aacute;gina Principal</a> |</li>

                        <li><a href="/arvore-genealogica.php" <?php if ($paginaaberta=='/arvore-genealogica.php' ) echo 'id="current"'; ?>> &Aacute;rvore Geneal&oacute;gica</a> |</li>

                        <li><a href="/historia.php" <?php if ($paginaaberta=='/historia.php' ) echo 'id="current"'; ?>> Hist&oacute;ria</a> |</li>

                        <li><a href="/lembrancas.php" <?php if ($paginaaberta=='/lembrancas.php' ) echo 'id="current"'; ?>> Lembran&ccedil;as</a> |</li>

                        <li><a href="/negocios.php" <?php if ($paginaaberta=='/negocios.php' ) echo 'id="current"'; ?>> Neg&oacute;cios</a> |</li>

                        <li><a href="/noticias.php" <?php if ($paginaaberta=='/noticias.php' ) echo 'id="current"'; ?>> Noticias</a> |</li>

                        <li><a href="/fotos.php" <?php if ($paginaaberta=='/fotos.php' ) echo 'id="current"'; ?>> Fotos</a> |</li>

                        <li><a href="/contato.php" <?php if ($paginaaberta=='/contato.php' ) echo 'id="current"'; ?>> Contato</a> |</li>

                    </ul>
                </div>
        </div>
        <div id="intro">
            <!-- Google Ad -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Site Grissi -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7255428607101928" data-ad-slot="8531444426" data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>
            <!-- Google Ad Finish -->

            <h1><?= htmlspecialchars($title) ?></h1>
