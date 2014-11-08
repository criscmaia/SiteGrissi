<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang='pt'>
<head>
	<meta charset=iso-8859-1 />
    <title>Fam&#237;lia Grizzo . Grice . Gris . Grissi</title>
    
    <!-- Modernizr (http://www.modernizr.com/) is an open source, MIT-licensed JavaScript library that detects support for many HTML5 & CSS3 features. -->
    <script type="text/javascript" src="modernizr2.8.3.js"></script> 
    <!-- <html class="no-js"> -->

    <link rel="stylesheet" type="text/css" href="index.css" />

	<!-- Inicio Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-19897080-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- Fim Google Analytics -->
</head> 

<body>
<?php include_once("analyticstracking.php") ?>
<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=197754590296881";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <div id="layout">
        <div class="bordacentro">
            <div class="bordaesquerda"></div>
            <div class="bordadireita"></div>
        </div>

        <div id="left"></div>

        <div id="pageheader">
            <?php include("header.php"); ?>
        </div>

        <div id="centralizarmenu">
            <?php include("menu.php"); ?>
        </div>

        <div id="intro">
				<div class="fb-like" data-href="http://familiagrissi.com.br/" data-send="true" data-width="450" data-show-faces="true" data-font="verdana" data-action="recommend"></div>
		        <?php
		            $link = "home";

		            if ($_GET["link"] != "") {
		                $link = $_GET["link"];
		            }

		            include "conteudo/". $link. ".php";
		        ?>
        </div>

        <div id="rodape" class="legenda">
            <p align="center">&copy; <a href="mailto:criscmaia@gmail.com?Subject=Fam&#237;lia Grizzo%20.%20Grice%20.%20Gris%20.%20Grissi">Cristiano Maia</a> - 2015</p>
        </div>
        
        <div id="esquinaleft"></div>
        <div id="esquinaright"></div>

        <div id="right"></div>

        <div class="bordacentro">
            <div class="bordaesquerda"></div>
            <div class="bordadireita"></div>
        </div>
    </div>
</body>
</html>