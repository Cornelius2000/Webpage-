<?php 

//ABRE UMA PAGINA NO NAVEGADOR
// $html = file_get_contents('http://youtube.com');
// echo $html;


require 'simple_html_dom.php';
//PODE COLOCAR DINAMICO PARA FAZER A PESQUISA EM DETERMINADO SITE
$html = file_get_html('https://www.youtube.com/results?search_query=gta+5');

$resultado = $html->find('.yt-lockup');


foreach ($resultado as  $video) {
	echo $video->find('.video-time', 0);	
}

?>