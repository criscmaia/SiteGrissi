<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang='pt'>
<head>
	<meta charset=iso-8859-1 />
    <title>Fam&#237;lia Grizzo . Grice . Gris . Grissi</title>
    
    <!-- Modernizr (http://www.modernizr.com/) is an open source, MIT-licensed JavaScript library that detects support for many HTML5 & CSS3 features. -->
    <script type="text/javascript" src="modernizr.2.js"></script> 
    <!-- <html class="no-js"> -->

    <link rel="stylesheet" type="text/css" href="index.css" />

	<!-- Inicio Google Analytics -->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-19897080-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
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
            <p align="center">&copy; <a href="mailto:criscmaia@gmail.com?Subject=Fam&#237;lia Grizzo%20.%20Grice%20.%20Gris%20.%20Grissi">Cristiano Maia</a> - 2012</p>
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