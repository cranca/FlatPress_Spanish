<?php

	$lang = array();

	$lang['main'] = array(
		
		'nextpage'		=> 'Página Siguiente &raquo;',
		'prevpage'		=> '&laquo; Página Anterior',
		'entry'      	=> 'Entrada',
		'static'     	=> 'Página estática',
		'comment'    	=> 'Comentario',
		'preview'    	=> 'Editar/Vista Previa',
		
		'filed_under'	=> 'Archivos antiguos ',	
		
		'add_entry'  	=> 'Añadir entrada',
		'add_comment'  	=> 'Añadir comentario',
		'add_static'  	=> 'Añadir página estática',
		
		'btn_edit'     	=> 'Editar',
		'btn_delete'   	=> 'Eliminar',
		
		'nocomments'	=> 'Añadir comentario',
		'comment'	=> '1 comentario',
		'comments'	=> 'comentarios',
		
	);
	
	$lang['search'] = array(
		
		'head'	=> 'Buscar',
		'fset1'	=> 'Introduzca sus criterios de búsqueda',
		'keywords'	=> 'Frase',
		'onlytitles'	=> 'Solo títulos',
		'fulltext'	=> 'Texto completo',
		
		'fset2'	=> 'Fecha',
		'datedescr'	=> 'Puede enlazar su búsqueda con una fecha específica. Usted puede seleccionar un año y un mes, o una fecha completa.'.
					'Dejar en blanco para buscar en la base de datos.',
		
		'fset3' 	=> 'Buscar en categorías',
		'catdescr'	=> 'No seleccione nada para buscar globalmente',
		
		'fset4'	=> 'Empezar búsqueda',
		'submit'	=> 'Buscar',
		
		'headres'	=> 'Resultados de la búsqueda',
		'descrres'	=> 'La búsqueda de <strong>%s</strong> devolvió los siguientes resultados:',
		'descrnores'=> 'La búsqueda de  <strong>%s</strong> no devolvió resultados.',
		
		'moreopts'	=> 'Más opciones',
		
		
		'searchag'	=> 'Volver a buscar',
		
	);
	
	$lang['search']['error'] = array(
	
		'keywords'	=> 'Debe especificar al menos una palabra clave'
	
	);
	
	
	
	
	
	$lang['entry'] = array();
	$lang['entry']['flags'] = array();
	
	$lang['entry']['flags']['long'] = array(
		'draft' => '<strong>Próximo proyecto</strong>: oculto, esperando publicación',
		//'static' => '<strong>EPágina estática</strong>: normalmente se oculta, para llegar a la entrada introducir ?page=title-of-the-entry en la barra de url (experimental)',
		'commslock' => '<strong>Comentarios cerrados</strong>: comentarios deshabilitados para esta entrada'
	);
	
	$lang['entry']['flags']['short'] = array(
		'draft' => 'Borrador',
		//'static' => 'Estática',
		'commslock' => 'Comentarios cerrados'
	);

	$lang['404error'] = array(
		'subject'	=> 'No encontrado',
		'content'	=> '<p>Lo sentimos, no hemos podido encontrar la página solicitada</p>'
	);
		
	// Login
	$lang['login'] = array(
		
		'head'		=> 'Conectarse',
		'fieldset1'	=> 'Debe introducir un nombre y una contraseña',
		'user'		=> 'Usuario:',
		'pass'		=> 'Contraseña:',
		'fieldset2'	=> 'Conectarse',
		'submit'	=> 'Conectarse',
		'forgot'	=> 'Contraseña olvidada'
	);
		
	$lang['login']['success'] = array(
		'success'	=> 'Ha accedido correctamente.',
		'logout'	=> 'Ha cerrado sesión correctamente.',
		'redirect'	=> 'Va ha ser redirigido en 5 segundos.',
		'opt1'		=> 'Volver al índice',
		'opt2'		=> 'Ir al Panel de Administración',
		'opt3'		=> 'Añadir nueva entrada'
	);
	
	$lang['login']['error'] = array(
		'user'		=> 'Debe introducir un usuario.',
		'pass'		=> 'Debe introducir una contraseña.',
		'match'		=> 'Contraseña incorrecta.'
	);
	
	
	$lang['comments'] = array(
		'head'		=> 'Añadir comentario',
		'descr'		=> 'Rellene el siguiente formulario para añadir un comentario',
		'fieldset1'	=> 'Datos de Usuario',
		'name'		=> 'Nombre (*)',
		'email'		=> 'Email:',
		'www'		=> 'Web:',
		'cookie'	=> 'Recordarme',
		'fieldset2'	=> 'Añada su comentario',
		'comment'	=> 'Comentario (*):',
		'fieldset3'	=> 'Enviar',
		'submit'	=> 'Añadir',
		'reset'		=> 'Resetear',
		'success'	=> 'Su comentario fue añadido correctamente',
		'nocomments'	=> 'No hay comentarios en esta entrada todavía',
		'commslock'	=> 'Los comentarios está desactivados para esta entrada',
	);
	
	$lang['comments']['error'] = array(
		'name'		=> 'Debe introducir un nombre',
		'email'		=> 'Debe introducir un email válido',
		'www'		=> 'Debe introducir una url válida',
		'comment'	=> 'Debe introducir un comentario',
	);
	
	$lang['date']['month'] = array(
		
		'Enero',
		'Febrero',
		'Marzo',
		'Abril',
		'Mayo',
		'Junio',
		'Julio',
		'Agosto',
		'Septtiembre',
		'Octubre',
		'Noviembre',
		'Diciembre'
		
	);

	$lang['date']['month_abbr'] = array(
		
		'Ene',
		'Feb',
		'Mar',
		'Abr',
		'May',
		'Jun',
		'Jul',
		'Ago',
		'Sep',
		'Oct',
		'Nov',
		'Dec'
		
	);

	$lang['date']['weekday'] = array(
		
		'Domingo',
		'Lunes',
		'Martes',
		'Miércoles',
		'Jueves',
		'Viernes',
		'Sábado',
		
	);

	$lang['date']['weekday_abbr'] = array(
		
		'Dom',
		'Lun',
		'Mar',
		'Mié',
		'Jue',
		'Vie',
		'Sáb',
		
	);



?>
