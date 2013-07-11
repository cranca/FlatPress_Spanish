<?php

	$lang['admin']['config']['default'] = 
	array(
		'head'		=> 'Opciones',
		'descr'		=> 'Personalice y configure FlatPress',
		'submit'		=> 'Guardar Cambios',
		
		'sysfset'		=> 'Información general del sistema',
		'syswarning'	=> '<big>Atención!</big> Esta información es muy importante y necesita ser correcta,
	o su FlatPress probablemente no funcione bien.',
		'blog_root'		=> '<strong>Ruta de FlatPress</strong>. Nota: 
	generalmente no necesita editar esta opcion, pero es muy importante y debe tener cuidado.',
		'www'		=>'<strong>Raíz de su blog</strong>. Dirección de su blog con directorios incluidos <br />
	e.g.: http://www.mydomain.com/flatpress/ (Necesita la barra al final).',
		
		// ------
		
		'gensetts'		=> 'Configuración general',
		'blogtitle'		=> 'Título',
		'blogsubtitle'		=> 'Subtítulo',
		'blogfooter'		=> 'Pie de página',
		'blogauthor'		=> 'Autor',
		'startpage'			=> 'Página inicial',
		'stdstartpage'		=> 'Blog (por defecto)',
		'blogurl'			=> 'Dirección del blog',
		'blogemail'			=> 'Email del administrador',
		'notifications'		=> 'Notificaciones',
		'mailnotify'		=> 'Habilitar notificaciones por email',
		'blogmaxentries'	=> 'Número de entradas por página',
		'langchoice'		=> 'Idioma',

		'intsetts'		=> 'Configuración Internacional',
		'utctime'		=> 'El tiempo <acronym title="Cordinación de tiempo universal">UTC</acronym> es',
		'timeoffset'		=> 'Su tiempo difiere en',
		'hours'			=> 'horas',
		'timeformat'		=> 'Salida de tiempo',
		'dateformat'		=> 'Salida de fecha',
		'dateformatshort'	=> 'Salida de fecha corta',
		'output'		=> 'Salida',
		'charset'		=> 'Codificación de Caracteres',
		'charsettip'	=> 'La codificación <a href="http://wiki.flatpress.org/doc:charsets">recomendada</a> es UTF-8.',
		);
		
	$lang['admin']['config']['default']['msgs'] = 
	array(
		1		=> 'Su configuración se ha guardado correctamente.',
		-1		=> 'Ocurrió un error mientras se intentaba guardar su configuración.',
		
		);
			
	$lang['admin']['config']['default']['error'] = 
	array(
		'www' 		=>	'La ruta de su blog ha de ser válida',
		'title'		=>	'Debe especificar un título',
		'email'		=>	'Debe poner un email válido',
		'maxentries'=>	'Por favor, introduzca un número válido de entradas',
		'timeoffset'=>	'Por favor, introduzca un número válido de horario'.
						'Puede usar comas (e.g. 2h30" => 2.5)',
		'timeformat'=>	'Debe insertar una hora correcta',
		'dateformat'=>	'Debe insertar una fecha correcta',
		'dateformatshort'=>	'Debe insertar una fecha correcta',
		'charset'	=>	'Debe insertar una codificación de carácteres válida',
		'lang'		=>	'El idioma que seleccionó anteriormente, no está disponible'
		);		
			
		
?>
