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
    <link href='https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css' rel='stylesheet' type='text/css'>


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
    <!-- mobile code -->
    <div class="mobile">
        <div id="mobile-titulo"><span>Família Grizzo . Grice . Gris . Grissi</span></div>
        <div id="mobile-subtitulo"><span>Uma família originalmente italiana</span></div>
        <div id="mobile-centralizarmenu">
            <?php
                $paginaaberta = $_SERVER['REQUEST_URI']; //pega a página aberta e salva
            ?>
                <div id="navcontainer">
                    <ul id="navlist">
                        <li>|<a href="/" <?php if ($paginaaberta=='/' ) echo 'id="current"'; ?>> Página Principal</a> |</li>
                        <li><a href="/arvore-genealogica.php" <?php if ($paginaaberta=='/arvore-genealogica.php' ) echo 'id="current"'; ?>> Árvore Geneal&oacute;gica</a> |</li>
                        <li><a href="/historia.php" <?php if ($paginaaberta=='/historia.php' ) echo 'id="current"'; ?>> Hist&oacute;ria</a> |</li>
                        <li><a href="/lembrancas.php" <?php if ($paginaaberta=='/lembrancas.php' ) echo 'id="current"'; ?>> Lembran&ccedil;as</a> |</li>
                        <li><a href="/fotos.php" <?php if ($paginaaberta=='/fotos.php' ) echo 'id="current"'; ?>> Fotos</a> |</li>
                        <li><a href="/contato.php" <?php if ($paginaaberta=='/contato.php' ) echo 'id="current"'; ?>> Contato</a> |</li>
                    </ul>
                </div>
        </div>

        <div id="intro">
            <!-- Google Ad -->
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7255428607101928" data-ad-slot="8531444426" data-ad-format="auto"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>

            <!-- Google Ad Finish -->
            <h1><?= htmlspecialchars($title) ?></h1>
