<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= htmlspecialchars($title) ?> - Família Grizzo . Grice . Gris . Grissi</title>

    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="normalize.css" />

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
    <?php
        $paginaaberta = $_SERVER['REQUEST_URI']; //pega a página aberta e salva
    ?>
        <div class="container">
            <header>
                <h1>Família Grizzo . Grice . Gris . Grissi</h1>
                <h2>Uma família originalmente italiana</h2>
            </header>

            <nav>
                |<a href="/" <?php if ($paginaaberta=='/' ) echo 'id="current"'; ?>> Página Principal</a> |
                <a href="/arvore-genealogica.php" <?php if ($paginaaberta=='/arvore-genealogica.php' ) echo 'id="current"'; ?>> Árvore Genealógica</a> |
                <a href="/historia.php" <?php if ($paginaaberta=='/historia.php' ) echo 'id="current"'; ?>> História</a> |
                <a href="/lembrancas.php" <?php if ($paginaaberta=='/lembrancas.php' ) echo 'id="current"'; ?>> Lembranças</a> |
                <a href="/fotos.php" <?php if ($paginaaberta=='/fotos.php' ) echo 'id="current"'; ?>> Fotos</a> |
                <a href="/contato.php" <?php if ($paginaaberta=='/contato.php' ) echo 'id="current"'; ?>> Contato</a> |
            </nav>

            <main>
                <!-- Google Ad -->
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7255428607101928" data-ad-slot="8531444426" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});

                </script>

                <!-- Google Ad Finish -->

                <h1><?= htmlspecialchars($title) ?></h1>
