<?php

	$lang['admin']['static']['submenu'] = array(
		'list'		=> 'Administrar Páginas',
		'write'		=> 'Nueva Página'
	);

	
	/* main panel */
		
	$lang['admin']['static']['list'] = array(
	
		'head'		=> 'Páginas',
		'descr'		=> 'Por favor, seleccione una página para editar o añada una <a href="admin.php?p=static&amp;action=write">nueva página</a>.',
	
		'sel'		=> 'Selecionar', // checkbox
		'date'		=> 'Fecha',
		'name'		=> 'Página',
		'title'		=> 'Título',
		'author'	=> 'Autor',
		
		'action'	=> 'Acción',
		'act_view'	=> 'Vista Previa',
		'act_del'	=> 'Eliminar',
		'act_edit'	=> 'Editar'		
	);
	
	$lang['admin']['static']['list']['msgs'] = array(
		1	=> 'La página fue guardada correctamente',
		-1	=> 'Oucrrió un error al intentar guardar la página',
		2	=> 'La página fue eliminada correctamente',
		-2	=>	 'Ocurrió un error al intentar eliminar la página',
	);

	/* write panel */

	$lang['admin']['static']['write'] = 
	array(
		'head'		=> 'Publicar Página',
		'descr'		=> 'Editar la forma de publicar la página',
		'fieldset1'	=> 'Editar',
		'subject'	=> 'Título (*):',
		'content'	=> 'Contenido (*):',
		'fieldset2'	=> 'Enviar',
		'pagename'	=> 'Nombre de la página (*):',
		'submit'	=> 'Publicar',
		'preview'	=> 'Vista Previa',

		'delfset'	=> 'Eliminar',
		'deletemsg'	=> 'Eliminar la página',
		'del'		=> 'Eliminar',
		'success'	=> 'Su página fue publicada correctamente',
		'otheropts'	=> 'Otras opciones',
	);
	
	$lang['admin']['static']['write']['error'] = array(
		'subject'	=> 'No puede dejar el título en blanco',
		'content'	=> 'No puede dejar el contenido en blanco',
		'id'		=> 'Debe usar una ID válida'
	);
	
	
	/* delete action */	
	$lang['admin']['static']['delete'] = array(
		'head'		=> "Eliminar página", 
		'descr'		=> 'Está a punto de borrar la siguiente página:',
		'preview'	=> 'Vista Previa',
		'confirm'	=> '¿Seguro que desea continuar?',
		'fset'		=> 'Eliminar',
		'ok'		=> 'Si, eliminar la página',
		'cancel'	=> 'No, volver al Panel de Administración',
		'err'		=> 'La página especificada no existe',
	
	);
	
	
		
?>
