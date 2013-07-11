<?php
	$lang['plugin']['akismet']['errors'] = array (
		-1	=> 'No se ha establecio una Api Key. Introduza su clave Api en el pluging. Registrese en <a href="http://wordpress.com">Wordpress.com</a> para obtener una'
	);
	
	$lang['admin']['plugin']['submenu']['akismet'] = 'Configuración de Akismet';
	
	$lang['admin']['plugin']['akismet'] = array(
		'head'		=> 'Configuración de Akismet',
		'description'=>'Par muchas personas, <a href="http://akismet.com/">Akismet</a> reduce considerablemente '
					 .'o incluso puede eliminar completamente los comentarios de spam en su sitio.'
					 .'Si usted no tiene una cuenta de wordpress puede obtenerla en '.
					 '<a href="http://wordpress.com/api-keys/">WordPress.com</a>.',
		'apikey'	=> 'WordPress.com API Key',
		'whatis'	=> '(<a href="http://faq.wordpress.com/2005/10/19/api-key/">¿Qué es esto?</a>)',
		'submit'	=> 'Guardar API key'
	);
	$lang['admin']['plugin']['akismet']['msgs'] = array(
		1		=> 'API key fue guardada satisfactoriamente',
		-1		=> 'API key no pudo ser guardado'
	);
	
?>