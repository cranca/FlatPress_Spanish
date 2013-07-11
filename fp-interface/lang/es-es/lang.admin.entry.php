<?php


	$lang['admin']['entry']['submenu'] = 
	array (
		'write'		=> 'Nueva entrada',
		'list'		=> 'Administrar entradas',
		'cats'		=> 'Administrar categorías'
	);


	/* default action */
	
	$lang['admin']['entry']['list'] = 
	array(
		'head'		=> 'Administrar entradas',
		'descr'		=> '<a class="button" href="admin.php?p=entry&amp;action=write">Nueva entrada</a>'.
					   '<a class="button" href="admin.php?p=entry&amp;action=cats">Editar categorías</a>',
		'filter'	=> 'Filtros: ',
		'nofilter'	=> 'Mostrar todas',
		'filterbtn'	=> 'Habilitar filtro',
		'sel'		=> 'Seleccionar', // checkbox
		'date'		=> 'Fecha',
		'title'		=> 'Titulo',
		'author'	=> 'Autor',
		'comms'		=> 'Comentarios', // comments
		'action'	=> 'Acciones',
		'act_del'	=> 'Eliminar',
		'act_view'	=> 'Mostrar',
		'act_edit'	=> 'Editar'
	);
	
	/* write action */
	$lang['admin']['entry']['write'] = 
	array(
		'head'		=> 'Nueva entrada',
		'descr'		=> 'Editar la forma de escribir la entrada',
		'uploader'	=> 'Archivos',
		'fieldset1'	=> 'Editar',
		'subject'	=> 'Título (*):',
		'content'	=> 'Contenido (*):',
		'fieldset2'	=> 'Enviar',
		'submit'	=> 'Publicar',
		'preview'	=> 'Vista previa',
		'savecontinue'	=> 'Guardar &amp; Continuar',
		'archive'	=> 'Archivo',
		'nocategories'	=> 'No hay categorías. <a href="admin.php?p=entry&amp;action=cats">Crea una '. 
					'categoría</a>. '.
					'<a href="#save">Guarda</a> tu entrada primero.',
		'saveopts'	=> 'Guardar opciones',
		'success'	=> 'Tu entrada fue publicada correctamente',
		'otheropts'	=> 'Otras opciones',
		'commmsg'	=> 'Administrar comentarios',
		'delmsg'	=> 'Eliminar esta entrada',
		//'back'		=> 'Volver descartando los cambios',
	);
	

	$lang['admin']['entry']['list']['msgs'] = array(
		1	=> 'La entrada fue guardada correctamente',
		-1	=> 'Ocurrió un error al intentar guardar la entrada',
		2	=> 'Entrada eliminada correctamente',
		-2	=> 'Error al intentar eliminar la entrada',
	);

	
	$lang['admin']['entry']['write']['error'] = array(
		'subject'	=> 'No puede dejar el título en blanco',
		'content'	=> 'No puede dejar el contenido en blanco',
	);
	
	$lang['admin']['entry']['write']['msgs'] = array(
		1	=> 'La entrada fue guardada correctamente',
		-1	=> 'Ocurrió un error: su entrada no pudo ser guardada correctamente',
		-2	=> 'Ocurrió un error: su entrada no pudo ser guardada; el índice está corrompido',
		-3	=> 'Ocurrió un error: su entrada no pudo ser guardada en el borrador',
		-4	=> 'Ocurrió un error: su entrada no pudo ser guardada como borrador; el índice está corrompido',
		'draft'=> 'Estás editando un <strong>borrador</strong>'
	);

	
	/* comments */
	
	$lang['admin']['entry']['commentlist'] = 
	array(
		'head'		=> "Comentarios de la entrada ", 
		'descr'		=> 'Selecciona un comentario para eliminar',
		'sel'		=> 'Seleccionar',
		'content'	=> 'Contenido',
		'date'		=> 'Fecha',
		'author'	=> 'Autor',
		'email'		=> 'Email',
		'ip'		=> 'IP',
		'actions'	=> 'Aciones',
		'act_edit'	=> 'Editar',
		'act_del'	=> 'Eliminar',
		'act_del_confirm' => '¿De verdad desea eliminar este comentario?',
		'nocomments'	=> 'Esta entrada no tiene comentario',
		
	
	);

	$lang['admin']['entry']['commentlist']['msgs'] =
	array(
		1	=> 'Comentario eliminado correctamente',
		-1	=> 'Ocurrió un error al intentar eliminar el comentario',
		
	);

	$lang['admin']['entry']['commedit'] = 
	array(
		'head'		=> "Editar comentarios de la entrada", 
		'content'	=> 'Contenido',
		'date'		=> 'Fecha',
		'author'	=> 'Autor',
		'www'		=> 'Sitio web',
		'email'		=> 'Email',
		'ip'		=> 'IP',
		'loggedin'	=> 'Usuario registrado',
		'submit'	=> 'Guardar'
		
	
	);

	$lang['admin']['entry']['commedit']['msgs'] =
	array(
		1	=> 'El comentario fue editado',
		-1	=> 'Ocurrió un error al intentar editar el comentario',
	);
	
	/* delete action */
	
	$lang['admin']['entry']['delete'] = 
	array(
		'head'		=> 'Eliminar entrada', 
		'descr'		=> '¿Seguro que desea borrar la siguiente entrada?',
		'preview'	=> 'Vista previa',
		'confirm'	=> '¿Está seguro de que desea continuar?',
		'fset'		=> 'Eliminar',
		'ok'		=> 'Si, eliminar la entrada',
		'cancel'	=> 'No, volver atrás',
		'err'		=> 'La entrada especificada no existe',
	
	);
	
	/* category mgmt */
	
	$lang['admin']['entry']['cats'] =
	array(
		'head'		=> 'Editar categorías',
		'descr'		=> '<p>Use el siguiente formulario para añadir o eliminar categorías/p><p>Cada categoría a de estár formada por "Nombre categoría: <em>numero_id</em>". Usar guiones para crear jerarquías.</p>
		
	<p>Ejemplo:</p>
	<pre>
General :1
Neticias :2
--Anonimas :3
--Eventos :4
----Misceláneas :5
Technología :6
	</pre>',
		'clear'		=> 'Eliminar todas la categorías',
	
		'fset1'		=> 'Editor',
		'fset2'		=> 'Aplicar cambios',
		'submit'	=> 'Guardar'
	);
	
	$lang['admin']['entry']['cats']['msgs'] = array(
		
		1	=> 'Categoría guardada',
		-1	=> 'Ocurrió un error al intentar guardar las categorías',
		2	=> 'Categorías eliminadas',
		-2	=> 'Ocurrió un error al intentar borrar las categorías',
		-3 	=> 'Las "ID" de las categorías han de ser números positivos (0 no está aceptado)'

	);
	
	
		
?>
