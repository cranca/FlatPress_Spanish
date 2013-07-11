<?php

	$lang['admin']['plugin']['submenu'] = array (
		'default'		=> 'Administrar Plugins'
	);
	
	/* main plugin panel */

	$lang['admin']['plugin']['default'] = array(
	
		'head'		=> 'Administrar Plugins',
		'enable'	=> 'Habilitar',
		'disable'	=> 'Deshabilitar',
		'descr'		=> 'Un <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="¿Qué es un  plugin?">'.
						'plugin</a> es un componente para extender las capacidades de FlatPress</p>'.
						'<p>Puede instalar un plugin subiéndolo al directorio <code>fp-plugins/</code> '.
						'de su servidor.</p>'.
						'<p>En este panel puede habilitar o deshabilitar plugins.',
		'name'		=> 'Nombre',
		'description'=>'Descripción',
		'author'	=> 'Autor',
		'version'	=> 'Versión',
		'action'	=> 'Acción',
	);
	
	$lang['admin']['plugin']['default']['msgs'] = array(
		1	=> 'Guardar Configuración',
		-1	=> 'Ocurrió un error y su configuración no fue guardada, puede deberse a un error de sintaxis, a las políticas del actual gobierno o a una intervención alienígena. Quien sabe &ellipsis;',
	);
	
	/* system errors */
	
	$lang['admin']['plugin']['errors'] = array(
		'head'		=> 'Se encontraron los siguientes errores en los plugins:',
		'notfound'	=> 'No se encontró el plugin. Omitido.',
		'generic'	=> 'Error numero %d',
	);
	
?>
