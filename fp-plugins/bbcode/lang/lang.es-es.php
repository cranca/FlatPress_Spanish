<?php

$lang['admin']['plugin']['submenu']['bbcode'] = 'BBCode';
$lang['admin']['plugin']['bbcode'] = array(
	'head' => 'Configuración BBCode',
	'desc1' => 'Este plugin usa <a href="http://www.phpbb.com/'.
		'phpBB/faq.php?mode=bbcode">BBCode</a> y esto ofrece '.
		'aintegración automática con lightbox (si es que este está habilitado).',
	
	'options' => 'Opciones',

	'editing'	=> 'Edición',
	'allow_html'=> 'HTML en linea',
	'allow_html_long' => 'Se permite el uso de HTML junto con el BBCode',
	'toolbar' => 'Barra de herramientas',
	'toolbar_long' => 'Habilitado la barra de herramientas',

	'other'	=>	'Otras opciones',
	'comments' => 'Comentarios',
	'comments_long' => 'Se permite BBCode en los comentarios',
	'urlmaxlen' => 'Longitud máxima de la url',
	'urlmaxlen_long_pre' => 'Acortar más la url ',
	'urlmaxlen_long_post'=>' caracteres.',
	'submit' => 'Guardar Configuración',
	'msgs' => array(
		1 => 'La configuración del BBCode fue guardada correctamente.',
		-1 => 'La configuración del BBCode no pudo ser guaradad correctamente.'
	),

	'editor' => array(
		'formatting'     => 'Formato',
		'textarea'       => 'Área de Texto: ',
		'expand'         => 'Expandir',
		'expandtitle'    => 'Ampliar altura del área de texto',
		'reduce'         => 'Reducir',
		'reducetitle'    => 'Reducir altura del área de texto',
		// note: accesskeys are not internationalized...
		// btw. why not :-D
		'bold'           => 'B',
		'boldtitle'      => 'Negrita',
		'italic'         => 'I',
		'italictitle'    => 'Cursiva',
		'underline'      => 'U',
		'underlinetitle' => 'Subrayado',
		'quote'          => 'Cita',
		'quotetitle'     => 'Cita',
		'code'           => 'Código',
		'codetitle'      => 'Código',
		'help'           => 'Ayuda BBCode',
		// currently not used
		'status'         => 'Barra de estado',
		'statusbar'      => 'En modo normal. Pulse &lt;Esc&gt; para cambiar el modo de edición.'
	)
);

?>
