<?php
	
	$lang['admin']['widgets']['submenu']['blockparser'] = 'BlockParser Widgets';
	
	$lang['admin']['widgets']['blockparser'] = array(
		'head'		=> 'BlockParser Widgets',
		'description'	=> 'BlockParser plugin sirve para crear su widget mediante una página estática. 
							Puede seleccionar una o más páginas de la lista para crear un widget o puede 
							<a href="?p=static&amp;action=write">crear una nueva página</a>.</p>',

		'id'		=> 'Página Estática',
		'title'		=> 'Título',
		'action'	=> 'Acción',
		'enable'	=> 'Habilitado',
		'disable'	=> 'Deshabilitado',
		'edit'		=> 'Editar',
		
	);
	$lang['admin']['widgets']['blockparser']['msgs'] = array(
		1		=> 'Su nuevo widget está disponible. !Añádalo en su blog mediante el <a href="?p=widgets">panel principal!</a>',
		-1		=> 'No se pudo crear su widget',
		2		=> 'Ha desactivado un widget: no se olvide de quitar todas las referencias en el <a href="?p=widgets">panel principal</a>!',
		-2		=> 'No se pudo desactivar el widget'
	);
	
?>
