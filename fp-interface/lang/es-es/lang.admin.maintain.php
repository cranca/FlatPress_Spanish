<?php
	
	$lang['admin']['panel']['maintain'] = 'Mantenimiento';

	$lang['admin']['maintain']['default'] = array(
		'head'		=> 'Mantenimiento',
		'descr'		=> 'Venga aquí cuando piense que algo va mal'.
					' tal vez pueda encontrar la solución.
					Sin embargo esto podría no funcionar.',
		'opt0'		=> '&laquo; Volver al menú',
		'opt1'		=> 'Reconstruir Índice',
		'opt2'		=> 'Limpiar el tema y la caché del tema',
		'opt3'		=> 'Restaurar los permisos de los archivos',
		'opt4'		=> 'Mostrar información del PHP',
		'opt5'		=> 'Comprobar actualizaciones',

		'chmod_info'	=> "Los permisos del siguiente archivos <strong>no se puedieron</strong>
					cambiar 777; posiblemente el propietario del archivo no es el mismo que del servidor web. Por lo general puede ignorar este aviso.",
		
	);
	
	$lang['admin']['maintain']['default']['msgs'] = array(
		1		=> 'Operación completada'
	);
	
	$lang['admin']['maintain']['updates'] = array(
		'head'	=> 'Actualizaciones',
		'list'	=> '<ul>
		<li>Usted tiene la versión <big>%s</big> de FlatPress</li>
		<li>La última actualización estable es <big><a href="%s">%s</a></big></li>
		<li>La última actualización no estable es <big><a href="%s">%s</a></big></li>
		</ul>',
		'notice'=>'Aviso:'
		
	);
	
	
	
	$lang['admin']['maintain']['updates']['msgs'] = array(
		1		=> '¡Hay actualizaciones disponibles!',
		2		=> 'FlatPress ya está actualizado',
		-1		=> 'No se pudieron comprobar las actualizaciones'
	);

?>
