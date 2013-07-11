<?php
	$lang['plugin']['prettyurls']['errors'] = array (
		-2	=> 'No se pudo encontrar o crear un archivo <code>. Htaccess </ code> en la raíz '.
				' PrettyURLs podría no funcionar correctamente, consulte el panel de configuración.'
	);
	
	$lang['admin']['plugin']['submenu']['prettyurls'] = 'PrettyURLs Configuración';
	$lang['admin']['plugin']['prettyurls'] = array(
		'head'		=> 'PrettyURLs Configuración',
		'htaccess'	=> '.htaccess',
		'description'=>'Este editor de primas le permiten editar tus '.
						'<code><a class="hint" href="http://wiki.flatpress.org/doc:plugins:prettyurls#htaccess">.htaccess</a></code>.',
		'cantsave'	=> 'Usted no puede modificar este archivo, ya que no se puede <strong>escribir</strong>en el. Usted puede subir un archivo de escritura y luego subirlo <a class="hint" href="http://wiki.flatpress.org/doc:plugins:prettyurls#manual_upload">como se describe aquí</a>',
		'mode'		=> 'Modo',
		'auto'		=> 'Automático',
			'autodescr'	=> 'tratar de configurarme la mejor configuración',
		'pathinfo'	=> 'Información de la raíz',
			'pathinfodescr' => 'e.g. /index.php/2011/01/01/hello-world/',
		'httpget'	=> 'Obtener HTTP',
			'httpgetdescr'=> 'e.g. /?u=/2011/01/01/hello-world/',
		'pretty'	=> 'Bastante',
			'prettydescr'=> 'e.g. /2011/01/01/hello-world/',

		'saveopt' 	=> 'Guardar configuración',

		'submit'	=> 'Guardar .htaccess'
	);
	$lang['admin']['plugin']['prettyurls']['msgs'] = array(
		1		=> '.htaccess guardada correctamente',
		-1		=> '.htaccess no pudo ser guardada (¿tiene permisos de escritura sobre <code>'. BLOG_ROOT .'</code>)?',

		2		=> 'Opciones guardadas correctamente',
		-2		=> 'Ocurrió un error al intentar guardar la configuración',
	);
	
?>
