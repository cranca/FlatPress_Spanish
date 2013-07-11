<?php

$lang['plugin']['qspam'] = array(
	'error' => 'ERROR: El comentario cotiene términos prohibidos'
);

$lang['admin']['plugin']['submenu']['qspam'] = 'Filtro rápido de spam';
$lang['admin']['plugin']['qspam'] = array(
	'head' => 'QuickSpam Configuración',
	'desc1' => 'No se permitirán comentarios que contengan estas palabras (escribir una por línea) :',
	'desc2' => '<strong>Atención:</strong> Un comentario será rechazado, aun cuando una palabra es parte de otro. 
	
	(e.g. "rayo" será eliminada la siguiente palabra "b<em>pararrallos</em>")',
	'options' => 'Otras opciones',
	'desc3' => 'Contar las palabras prohibidas',
	'desc3pre' => 'Los comentarios de bloque que contenga más de ',
	'desc3post' => ' palabra(s) prohibidas(s).',
	'submit' => 'Configuración guardada',
	'msgs' => array(
		1 => 'Palabras prohibidas guardadas correctamente.',
		-1 => 'Palabras prohibidas no pudieron ser guardadas correctamente.'
	)
);

?>
