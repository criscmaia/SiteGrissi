<!-- bot�o de pesquisar! -->
<script type="text/javascript" language="JavaScript" src="find.js"></script>

<?php
// diret�rio das imagens
$diretorio = "./images/arvore/*.jpg";

// array imagens salva o caminho dos arquivos
$imagens=glob($diretorio);
$caminho=$imagens;
$nome=$imagens;

// substitui o diret�rio e a extens�o por | pra ser delimitador
$img_search = array("./images/arvore/",".jpg");
$imagens=str_ireplace($img_search,"|",$imagens);

// deixa o nome puro
$nome_search = array("./images/arvore/",".jpg");
$nome=str_ireplace($nome_search,"",$nome);

// pega todos os dados do arquivo da �rvore
$data=file_get_contents('http://familiagrissi.com/conteudo/arvore.html'); 

//conta quantos valores no array
$i = count($imagens)-1;

do
  {
	//Nome do arquivo vira uppercase
	$imagens[$i] = strtoupper($imagens[$i]); 
	
	// nome da pessoa vira uppercase
	$nome[$i] = strtoupper($nome[$i]); 
	
	//cria uma vari�vel com o que vai substituir
	$replace ='
		<img src="./images/arvore/camera.png" alt="camera" class="icone">
		<a href="#foto" class="tooltip">
		  '.$nome[$i].'
		  <span>
		  <img src="'.("./images/arvore/".rawurlencode($nome[$i]).".jpg").'" alt="'.$nome[$i].'"/>
		  </span>
		</a>';
	
	//substitui procurando pelo array[$i] 
	$data = preg_replace ($imagens[$i], $replace, $data);
	  
	$i--;
  }
while ($i>0);

echo $data;

?>