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

    <!-- Inicio Google Analytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-19897080-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <!-- Fim Google Analytics -->
</head>

<body>
    <?php include_once("analyticstracking.php") ?>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=197754590296881";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>

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
            <div class="fb-like" data-href="http://familiagrissi.com.br/" data-send="true" data-width="450" data-show-faces="true" data-font="verdana" data-action="recommend"></div>

            <h1><?= htmlspecialchars($title) ?></h1>
