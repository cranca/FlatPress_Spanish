<?php

	$lang['admin']['widgets']['submenu']['default'] = 'Manejar Widgets';
	$lang['admin']['widgets']['submenu']['raw'] 	= 'Manejar Widgets (Avanzado)';

	/* default action */
	
	$lang['admin']['widgets']['default'] = array(
		'head'		=> 'Manejador de widgets (<em>experimental</em>)',
		
		'descr'		=> 	'Un <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:widgets" title="¿Qué es un widget?">'.
						'widget</a> es un componente dinámico que puede mostrar los datos e interactuar con el usuario.
						Mientras que los <strong>Temas</strong> están destinados al diseño del blog, los Widgets 
						<strong>extienden</strong> la aparencia y las funcionalidades.</p>

						<p>Los widgets pueden ser arrastrados a las zonas especiales de su tema (Depende de cada uno)
						<strong>WidgetSets</strong>. El número y el nombre de los widgets pueden variar dependiendo de el tema que usted elija.</p>

						<p>FlatPress viene con varios widgets: hay widgets para ayudar con el inicio de sesión, a
mostrar un cuadro de búsqueda, etc</p>
						
						<p>Cada Widget está definido con un <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="¿Qué es un plugin?">plugin</a>.',
						
		'availwdgs'	=> 'Widgets disponibles',
		'trashcan'	=> 'Arrastre aquí para eliminar',
		
		'themewdgs' => 'Widgetsets de este tema',
		'themewdgsdescr' => 'El tema que ha seleccionado le permite tener los siguientes widgetsets',
		'oldwdgs'	=> 'Otros widgetsets',
		'oldwdgsdescr' =>'El siguiente widgetsets parece no pertenecer a ninguna de los '.
						'widgetsets mencionados anteriormente. Pueden ser del antiguo tema.',
		
		'submit'	=> 'Guardar Cambios',

	);
	
	$lang['admin']['widgets']['default']['stdsets'] = array(
		'top'		=> 'Barra Superior',
		'bottom'	=> 'Barra Inferior',
		'left'		=> 'Barra de la Izquierda',
		'right'		=> 'Barra de la Derecha',
	);
	
	$lang['admin']['widgets']['default']['msgs'] = array(
		1	=> 'Configuración guardada',
		-1	=> 'Ocurrió un error al intentar guardar la configuración',
	);


	
	/* "raw" panel */	
	
	$lang['admin']['widgets']['raw'] = array(
		'head'		=> 'Administrar Widgets (<em>editor avanzado</em>)',
		'descr'		=> '<p>Este es el editor para usuarios avanzados.</p><p>Un <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="¿Qué es un widget?">'.
						'widget</a> es un elemento visual de un <a class="hint" '.
						'href="http://wiki.flatpress.org/doc:plugins" title="¿Qué es un pluging?">'.
						'plugin</a> que puede ponerse en algunas áreas especiales (los <em>widgetsets</em>) en las páginas de su blog. </p>',
						
		'fset1'		=> 'Editor',
		'fset2'		=> 'Aplicar cambios',
		'submit'	=> 'Aplicar',

	);
	
	
	$lang['admin']['widgets']['raw']['msgs'] = array(
		1	=> 'Configuración guardada',
		-1	=> 'Ocurrió un error al intentar guardar la configuración. Puede deberse a que su archivo contenta errores de sintaxis.',
	);

		

	/* system errors */
		
	$lang['admin']['widgets']['errors'] = array(
		'generic'	=> 'El widget llamado <strong>%s</strong> no está resgitrado, y no se tendrá en cuenta. '.
 				'¿Está el plugin activado en el <a href="admin.php?p=plugin">panel de plugings</a>?'

	);
	
?>
