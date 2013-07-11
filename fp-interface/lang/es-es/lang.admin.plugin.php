<?php

	$lang['admin']['plugin']['submenu'] = array (
		'default'		=> 'Manejar Plugings'
	);
	
	/* main plugin panel */

	$lang['admin']['plugin']['default'] = array(
	
		'head'		=> 'Manejar Plugings',
		'enable'	=> 'Habilitar',
		'disable'	=> 'Deshabilitar',
		'descr'		=> 'A <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="¿Qué es un  pluging?">'.
						'Plugin</a> es un componente para expander las capacidades de flatpress</p>'.
						'<p>Puede instalar un pluging subiendolo al directorio <code>fp-plugins/</code> '.
						'de su servidor.</p>'.
						'<p>Este panel está para habilitar o deshabilitar plugings.',
		'name'		=> 'Nombre',
		'description'=>'Descripción',
		'author'	=> 'Autor',
		'version'	=> 'Versión',
		'action'	=> 'Acción',
	);
	
	$lang['admin']['plugin']['default']['msgs'] = array(
		1	=> 'Configuración guardada',
		-1	=> 'Ocurrió un error y su configuración no fue guardada, puede deberse a un error de sintaxis',
	);
	
	/* system errors */
	
	$lang['admin']['plugin']['errors'] = array(
		'head'		=> 'Se encontraron los siguientes errores en los plugings:',
		'notfound'	=> 'No se encontró el pluging. Skipped.',
		'generic'	=> 'Error numero %d',
	);
	
?>
