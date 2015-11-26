<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 17,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Seguimiento de Procesos',
    'longtitle' => '',
    'description' => '',
    'alias' => 'seguimiento-de-procesos',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 4,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<h2>2.4.              Seguimiento de Procesos</h2>
<p>A medida que los Modelos de Procesos diseñados para la digitalización de trámites se empiecen a utilizar, serán generados diversos procesos internos dentro de Simple, uno de ellos permitirá realizar el seguimiento de los trámites registrando su etapa actual, el responsable, fecha de asignación, entre otros. Esta opción se encuentra disponible únicamente para usuario con acceso a BackEnd, no para el usuario quien ha generado el trámite.</p>
<p>Para revisar el seguimiento, debe dirigirse hacia el menú de <em>Seguimiento</em> dentro del menú principal de BackEnd con esto ingresará al seguimiento de trámites de Simple.</p>
<p>La siguiente imagen representa la pantalla de trabajo para la realización de seguimientos:</p>
<p> </p>
<p><img src="assets/img/BackEnd/Modelamiento%20de%20Proceso/Diseñador/seguimiento.png" alt="" width="654" height="204" /></p>
<p>Figura 49: "Ventana de Seguimiento de Procesos"</p>
<p> </p>
<p>Como se visualiza en la imagen anterior desplegarán todos los trámites iniciados en Simple sin filtros, indicando su ID, el tipo de Trámite, su estado, la etapa actual en que se encuentra el trámite y finalmente la fecha con la última fecha realizada sobre el trámite. Para revisar el detalle de un trámite en particular deberá hacer clic sobre el botón <em>Seguimiento </em> <em> </em> del costado derecho del trámite a visualizar, con esto se abrirá la ventana de detalle para un seguimiento de Simple, tal como se puede visualizar en la siguiente imagen:</p>
<p> </p>
<p><img src="assets/img/BackEnd/Seguimiento-Procesos/Figura50-SP.png" alt="" width="363" height="330" /></p>
<p>Figura 50: "Seguimiento de Procesos"</p>
<p> </p>
<p>Se puede apreciar en la imagen el despliegue de las tareas del proceso correspondiente a <em>Cupón para Afiliados a CPA </em>cada color de caja representa el estado actual de la tarea, siendo los siguientes:</p>
<ul>
<li>Caja de color <em>Verde</em> <img src="assets/img/BackEnd/Seguimiento-Procesos/verde.png" alt="" width="16" height="16" />: Indica que la tarea del proceso se ha realizado, por lo que el proceso avanzó a la siguiente tarea.</li>
<li>Caja de color <em>Amarillo<img src="assets/img/BackEnd/Seguimiento-Procesos/amarillo.png" alt="" width="17" height="16" /></em> : Indica que la tarea esta seleccionada pero aún no ha sido gestionado su procesamiento, el proceso se encuentra en este estado, a la espera de ser procesado.</li>
<li>Caja de color <em>Azul</em> <img src="assets/img/BackEnd/Seguimiento-Procesos/azul.png" alt="" width="16" height="16" />: Indica una tarea en la cual el flujo del proceso aún no llega a su ejecución, o el flujo del proceso por su lógica interna no pasó por esta tarea.</li>
</ul>
<p> </p>
<p>En el costado derecho del a ventana, podrá visualizar el <em>registro de eventos</em> completo del proceso, el cual le indicará el estado de la tarea, fecha de inicio, fecha de termino, cual fue el usuario asignado, puede ver aún más detalles presionando sobre el link <em>Registrar detalle</em>.</p>
<p> </p>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 3,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1353507830,
    'editedby' => 2,
    'editedon' => 1358284685,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1353507780,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'simple/backend/seguimiento-de-procesos.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="http://ayuda.chilesinpapeleo.cl/" />
	<title>Ayuda ChileSinPapeleo - Seguimiento de Procesos</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="assets/css/theme.css" rel="stylesheet">
    </head>
    <body>
		<div class="container">
			<div class="row">
				<div class="span12">
					<h1><img src="assets/img/logo.png" alt="Ayuda Simple" /></h1>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="span4">
				<div class="well">
				<ul><li class="first"><a href="simple/introduccion.html" title="Introducción" >Introducción</a></li>
<li class="active"><a href="simple/backend/" title="Backend" >Backend</a><ul><li class="first"><a href="simple/backend/ingreso.html" title="Ingreso" >Ingreso</a></li>
<li><a href="simple/backend/configuracion/" title="Configuración" >Configuración</a><ul><li class="first"><a href="simple/backend/configuracion/inicial.html" title="Inicial" >Inicial</a></li>
<li><a href="simple/backend/configuracion/grupos.html" title="Grupos" >Grupos</a></li>
<li class="last"><a href="simple/backend/configuracion/usuarios.html" title="Usuarios" >Usuarios</a></li>
</ul></li>
<li><a href="simple/backend/modelamiento-del-proceso/" title="Modelamiento del Proceso" >Modelamiento del Proceso</a><ul><li class="first"><a href="simple/backend/modelamiento-del-proceso/generacion-de-documentos.html" title="Generación de Documentos" >Generación de Documentos</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/generacion-de-formularios.html" title="Generación de Formularios" >Generación de Formularios</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/diseno-de-formularios.html" title="Diseño de Formularios" >Diseño de Formularios</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/acciones.html" title="Acciones" >Acciones</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/disenador.html" title="Diseñador" >Diseñador</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/reportes.html" title="Reportes" >Reportes</a></li>
<li class="last"><a href="simple/backend/modelamiento-del-proceso/reglas-de-negocio-y-reglas-de-validacion.html" title="Reglas de Negocio y Reglas de Validación" >Reglas de Negocio y Reglas de Validación</a></li>
</ul></li>
<li class="active current"><a href="simple/backend/seguimiento-de-procesos.html" title="Seguimiento de Procesos" >Seguimiento de Procesos</a></li>
<li class="last"><a href="simple/backend/widgets.html" title="Widgets" >Widgets</a></li>
</ul></li>
<li><a href="simple/frontend/" title="Frontend" >Frontend</a><ul><li class="first"><a href="simple/frontend/ingreso/" title="Ingreso" >Ingreso</a><ul><li class="first"><a href="simple/frontend/ingreso/perfil-publico.html" title="Perfil Público" >Perfil Público</a></li>
<li><a href="simple/frontend/ingreso/perfil-registrados.html" title="Perfil Registrados" >Perfil Registrados</a></li>
<li class="last"><a href="simple/frontend/ingreso/perfil-institucional.html" title="Perfil Institucional" >Perfil Institucional</a></li>
</ul></li>
</ul></li>
<li class="last"><a href="simple/video-tutoriales/" title="Video Tutoriales" >Video Tutoriales</a><ul><li class="first"><a href="simple/video-tutoriales/parte-1-introduccion.html" title="Parte 1: Introducción" >Parte 1: Introducción</a></li>
<li><a href="simple/video-tutoriales/parte-2-gestion-de-grupos-y-usuarios.html" title="Parte 2: Gestión de Grupos y Usuarios" >Parte 2: Gestión de Grupos y Usuarios</a></li>
<li><a href="simple/video-tutoriales/parte-3-generacion-del-modelo-de-proceso.html" title="Parte 3: Generación del Modelo de Proceso" >Parte 3: Generación del Modelo de Proceso</a></li>
<li><a href="simple/video-tutoriales/parte-4-generacion-de-documentos-y-certificados.html" title="Parte 4: Generación de Documentos y Certificados" >Parte 4: Generación de Documentos y Certificados</a></li>
<li><a href="simple/video-tutoriales/parte-5-generacion-de-formularios.html" title="Parte 5: Generación de Formularios" >Parte 5: Generación de Formularios</a></li>
<li><a href="simple/video-tutoriales/parte-6-generacion-de-acciones.html" title="Parte 6: Generación de Acciones" >Parte 6: Generación de Acciones</a></li>
<li><a href="simple/video-tutoriales/diagrama-de-procesos.html" title="Parte 7: Diagrama de Procesos" >Parte 7: Diagrama de Procesos</a></li>
<li><a href="simple/video-tutoriales/parte-8-generacion-de-reportes.html" title="Parte 8: Generación de Reportes" >Parte 8: Generación de Reportes</a></li>
<li class="last"><a href="simple/video-tutoriales/parte-9-fin.html" title="Parte 9: Fin" >Parte 9: Fin</a></li>
</ul></li>
</ul>
				</div>
				</div>
				<div class="span8">
				<ul class="breadcrumb">
  <li><a href="simple/">Simple</a> <span class="divider">/</span></li><li><a href="simple/backend/">Backend</a> <span class="divider">/</span></li><li>Seguimiento de Procesos</li>
</ul>
				<h2>2.4.              Seguimiento de Procesos</h2>
<p>A medida que los Modelos de Procesos diseñados para la digitalización de trámites se empiecen a utilizar, serán generados diversos procesos internos dentro de Simple, uno de ellos permitirá realizar el seguimiento de los trámites registrando su etapa actual, el responsable, fecha de asignación, entre otros. Esta opción se encuentra disponible únicamente para usuario con acceso a BackEnd, no para el usuario quien ha generado el trámite.</p>
<p>Para revisar el seguimiento, debe dirigirse hacia el menú de <em>Seguimiento</em> dentro del menú principal de BackEnd con esto ingresará al seguimiento de trámites de Simple.</p>
<p>La siguiente imagen representa la pantalla de trabajo para la realización de seguimientos:</p>
<p> </p>
<p><img src="assets/img/BackEnd/Modelamiento%20de%20Proceso/Diseñador/seguimiento.png" alt="" width="654" height="204" /></p>
<p>Figura 49: "Ventana de Seguimiento de Procesos"</p>
<p> </p>
<p>Como se visualiza en la imagen anterior desplegarán todos los trámites iniciados en Simple sin filtros, indicando su ID, el tipo de Trámite, su estado, la etapa actual en que se encuentra el trámite y finalmente la fecha con la última fecha realizada sobre el trámite. Para revisar el detalle de un trámite en particular deberá hacer clic sobre el botón <em>Seguimiento </em> <em> </em> del costado derecho del trámite a visualizar, con esto se abrirá la ventana de detalle para un seguimiento de Simple, tal como se puede visualizar en la siguiente imagen:</p>
<p> </p>
<p><img src="assets/img/BackEnd/Seguimiento-Procesos/Figura50-SP.png" alt="" width="363" height="330" /></p>
<p>Figura 50: "Seguimiento de Procesos"</p>
<p> </p>
<p>Se puede apreciar en la imagen el despliegue de las tareas del proceso correspondiente a <em>Cupón para Afiliados a CPA </em>cada color de caja representa el estado actual de la tarea, siendo los siguientes:</p>
<ul>
<li>Caja de color <em>Verde</em> <img src="assets/img/BackEnd/Seguimiento-Procesos/verde.png" alt="" width="16" height="16" />: Indica que la tarea del proceso se ha realizado, por lo que el proceso avanzó a la siguiente tarea.</li>
<li>Caja de color <em>Amarillo<img src="assets/img/BackEnd/Seguimiento-Procesos/amarillo.png" alt="" width="17" height="16" /></em> : Indica que la tarea esta seleccionada pero aún no ha sido gestionado su procesamiento, el proceso se encuentra en este estado, a la espera de ser procesado.</li>
<li>Caja de color <em>Azul</em> <img src="assets/img/BackEnd/Seguimiento-Procesos/azul.png" alt="" width="16" height="16" />: Indica una tarea en la cual el flujo del proceso aún no llega a su ejecución, o el flujo del proceso por su lógica interna no pasó por esta tarea.</li>
</ul>
<p> </p>
<p>En el costado derecho del a ventana, podrá visualizar el <em>registro de eventos</em> completo del proceso, el cual le indicará el estado de la tarea, fecha de inicio, fecha de termino, cual fue el usuario asignado, puede ver aún más detalles presionando sobre el link <em>Registrar detalle</em>.</p>
<p> </p>
				</div>
			</div>
		</div>


    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Seguimiento de Procesos',
    '[[UltimateParent]]' => '2',
    '[[Wayfinder? &startId=`2` &selfClass=`current` ]]' => '<ul><li class="first"><a href="simple/introduccion.html" title="Introducción" >Introducción</a></li>
<li class="active"><a href="simple/backend/" title="Backend" >Backend</a><ul><li class="first"><a href="simple/backend/ingreso.html" title="Ingreso" >Ingreso</a></li>
<li><a href="simple/backend/configuracion/" title="Configuración" >Configuración</a><ul><li class="first"><a href="simple/backend/configuracion/inicial.html" title="Inicial" >Inicial</a></li>
<li><a href="simple/backend/configuracion/grupos.html" title="Grupos" >Grupos</a></li>
<li class="last"><a href="simple/backend/configuracion/usuarios.html" title="Usuarios" >Usuarios</a></li>
</ul></li>
<li><a href="simple/backend/modelamiento-del-proceso/" title="Modelamiento del Proceso" >Modelamiento del Proceso</a><ul><li class="first"><a href="simple/backend/modelamiento-del-proceso/generacion-de-documentos.html" title="Generación de Documentos" >Generación de Documentos</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/generacion-de-formularios.html" title="Generación de Formularios" >Generación de Formularios</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/diseno-de-formularios.html" title="Diseño de Formularios" >Diseño de Formularios</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/acciones.html" title="Acciones" >Acciones</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/disenador.html" title="Diseñador" >Diseñador</a></li>
<li><a href="simple/backend/modelamiento-del-proceso/reportes.html" title="Reportes" >Reportes</a></li>
<li class="last"><a href="simple/backend/modelamiento-del-proceso/reglas-de-negocio-y-reglas-de-validacion.html" title="Reglas de Negocio y Reglas de Validación" >Reglas de Negocio y Reglas de Validación</a></li>
</ul></li>
<li class="active current"><a href="simple/backend/seguimiento-de-procesos.html" title="Seguimiento de Procesos" >Seguimiento de Procesos</a></li>
<li class="last"><a href="simple/backend/widgets.html" title="Widgets" >Widgets</a></li>
</ul></li>
<li><a href="simple/frontend/" title="Frontend" >Frontend</a><ul><li class="first"><a href="simple/frontend/ingreso/" title="Ingreso" >Ingreso</a><ul><li class="first"><a href="simple/frontend/ingreso/perfil-publico.html" title="Perfil Público" >Perfil Público</a></li>
<li><a href="simple/frontend/ingreso/perfil-registrados.html" title="Perfil Registrados" >Perfil Registrados</a></li>
<li class="last"><a href="simple/frontend/ingreso/perfil-institucional.html" title="Perfil Institucional" >Perfil Institucional</a></li>
</ul></li>
</ul></li>
<li class="last"><a href="simple/video-tutoriales/" title="Video Tutoriales" >Video Tutoriales</a><ul><li class="first"><a href="simple/video-tutoriales/parte-1-introduccion.html" title="Parte 1: Introducción" >Parte 1: Introducción</a></li>
<li><a href="simple/video-tutoriales/parte-2-gestion-de-grupos-y-usuarios.html" title="Parte 2: Gestión de Grupos y Usuarios" >Parte 2: Gestión de Grupos y Usuarios</a></li>
<li><a href="simple/video-tutoriales/parte-3-generacion-del-modelo-de-proceso.html" title="Parte 3: Generación del Modelo de Proceso" >Parte 3: Generación del Modelo de Proceso</a></li>
<li><a href="simple/video-tutoriales/parte-4-generacion-de-documentos-y-certificados.html" title="Parte 4: Generación de Documentos y Certificados" >Parte 4: Generación de Documentos y Certificados</a></li>
<li><a href="simple/video-tutoriales/parte-5-generacion-de-formularios.html" title="Parte 5: Generación de Formularios" >Parte 5: Generación de Formularios</a></li>
<li><a href="simple/video-tutoriales/parte-6-generacion-de-acciones.html" title="Parte 6: Generación de Acciones" >Parte 6: Generación de Acciones</a></li>
<li><a href="simple/video-tutoriales/diagrama-de-procesos.html" title="Parte 7: Diagrama de Procesos" >Parte 7: Diagrama de Procesos</a></li>
<li><a href="simple/video-tutoriales/parte-8-generacion-de-reportes.html" title="Parte 8: Generación de Reportes" >Parte 8: Generación de Reportes</a></li>
<li class="last"><a href="simple/video-tutoriales/parte-9-fin.html" title="Parte 9: Fin" >Parte 9: Fin</a></li>
</ul></li>
</ul>',
    '[[$breadcrumbLinkCrumbTpl?id=`2`&type=`document`&contentType=`text/html`&pagetitle=`Simple`&longtitle=``&description=``&alias=`simple`&link_attributes=``&published=`1`&pub_date=`0`&unpub_date=`0`&parent=`0`&isfolder=`1`&introtext=``&content=`<p>Bienvenido al manual de Simple.</p>`&richtext=`1`&template=`1`&menuindex=`1`&searchable=`1`&cacheable=`1`&createdby=`1`&createdon=`2012-11-20 20:55:38`&editedby=`1`&editedon=`2012-11-21 14:36:41`&deleted=``&deletedon=`0`&deletedby=`0`&publishedon=`2012-11-20 20:56:00`&publishedby=`1`&menutitle=``&donthit=``&privateweb=``&privatemgr=``&content_dispo=`0`&hidemenu=``&class_key=`modDocument`&context_key=`web`&content_type=`1`&uri=`simple/`&uri_override=`0`&hide_children_in_tree=`0`&show_in_tree=`1`&properties=`0c7ed838f17af2627460195b9ccd936a`&link=`simple/`]]' => '<li><a href="simple/">Simple</a> <span class="divider">/</span></li>',
    '[[$breadcrumbLinkCrumbTpl?id=`4`&type=`document`&contentType=`text/html`&pagetitle=`Backend`&longtitle=``&description=``&alias=`backend`&link_attributes=``&published=`1`&pub_date=`0`&unpub_date=`0`&parent=`2`&isfolder=`1`&introtext=``&content=`<p>El BackEnd de Simple, posee una serie de funcionalidades importantes, destacando la realización del diseño de los procesos para los trámites a digitalizar, el seguimiento y reporte de los procesos. Se debe tener en cuenta que BackEnd no es visible y no lo utilizan los usuarios finales, se requieren de accesos especiales para su ingreso.</p>`&richtext=`1`&template=`1`&menuindex=`1`&searchable=`1`&cacheable=`1`&createdby=`1`&createdon=`2012-11-21 13:28:41`&editedby=`1`&editedon=`2012-11-21 15:18:54`&deleted=``&deletedon=`0`&deletedby=`0`&publishedon=`2012-11-21 13:28:00`&publishedby=`1`&menutitle=``&donthit=``&privateweb=``&privatemgr=``&content_dispo=`0`&hidemenu=``&class_key=`modDocument`&context_key=`web`&content_type=`1`&uri=`simple/backend/`&uri_override=`0`&hide_children_in_tree=`0`&show_in_tree=`1`&properties=`de0c4099474100fe2680b8121d9167f3`&link=`simple/backend/`]]' => '<li><a href="simple/backend/">Backend</a> <span class="divider">/</span></li>',
    '[[$breadcrumbContainerTpl?crumbs=`<li><a href="simple/">Simple</a> <span class="divider">/</span></li><li><a href="simple/backend/">Backend</a> <span class="divider">/</span></li><li>Seguimiento de Procesos</li>`]]' => '<ul class="breadcrumb">
  <li><a href="simple/">Simple</a> <span class="divider">/</span></li><li><a href="simple/backend/">Backend</a> <span class="divider">/</span></li><li>Seguimiento de Procesos</li>
</ul>',
    '[[Breadcrumb? &containerTpl=`breadcrumbContainerTpl` &linkCrumbTpl=`breadcrumbLinkCrumbTpl`]]' => '<ul class="breadcrumb">
  <li><a href="simple/">Simple</a> <span class="divider">/</span></li><li><a href="simple/backend/">Backend</a> <span class="divider">/</span></li><li>Seguimiento de Procesos</li>
</ul>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'UltimateParent' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'UltimateParent',
          'description' => 'Return the "ultimate" parent of a resource.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * @name UltimateParent
 * @version 1.3
 * @author Susan Ottwell <sottwell@sottwell.com> March 2006
 * @author Al B <> May 18, 2007
 * @author S. Hamblett <shamblett@cwazy.co.uk>
 * @author Shaun McCormick <shaun@modx.com>
 * @author Jason Coward <modx@modx.com>
 *
 * @param &id The id of the document whose parent you want to find.
 * @param &top The top node for the search.
 * @param &topLevel The top level node for the search (root = level 1)
 *
 * @license Public Domain, use as you like.
 *
 * @example [[UltimateParent? &id=`45` &top=`6`]]
 * Will find the ultimate parent of document 45 if it is a child of document 6;
 * otherwise it will return 45.
 *
 * @example [[UltimateParent? &topLevel=`2`]]
 * Will find the ultimate parent of the current document at a depth of 2 levels
 * in the document hierarchy, with the root level being level 1.
 *
 * This snippet travels up the document tree from a specified document and
 * returns the "ultimate" parent.  Version 2.0 was rewritten to use the new
 * getParentIds function features available only in MODx 0.9.5 or later.
 *
 * Based on the original UltimateParent 1.x snippet by Susan Ottwell
 * <sottwell@sottwell.com>.  The topLevel parameter was introduced by staed and
 * adopted here.
 */
if (!isset($modx)) return \'\';

$top = isset($top) && intval($top) ? $top : 0;
$id= isset($id) && intval($id) ? intval($id) : $modx->resource->get(\'id\');
$topLevel= isset($topLevel) && intval($topLevel) ? intval($topLevel) : 0;
if ($id && $id != $top) {
    $pid = $id;
    $pids = $modx->getParentIds($id);
    if (!$topLevel || count($pids) >= $topLevel) {
        while ($parentIds= $modx->getParentIds($id, 1)) {
            $pid = array_pop($parentIds);
            if ($pid == $top) {
                break;
            }
            $id = $pid;
            $parentIds = $modx->getParentIds($id);
            if ($topLevel && count($parentIds) < $topLevel) {
                break;
            }
        }
    }
}
return $id;',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * @name UltimateParent
 * @version 1.3
 * @author Susan Ottwell <sottwell@sottwell.com> March 2006
 * @author Al B <> May 18, 2007
 * @author S. Hamblett <shamblett@cwazy.co.uk>
 * @author Shaun McCormick <shaun@modx.com>
 * @author Jason Coward <modx@modx.com>
 *
 * @param &id The id of the document whose parent you want to find.
 * @param &top The top node for the search.
 * @param &topLevel The top level node for the search (root = level 1)
 *
 * @license Public Domain, use as you like.
 *
 * @example [[UltimateParent? &id=`45` &top=`6`]]
 * Will find the ultimate parent of document 45 if it is a child of document 6;
 * otherwise it will return 45.
 *
 * @example [[UltimateParent? &topLevel=`2`]]
 * Will find the ultimate parent of the current document at a depth of 2 levels
 * in the document hierarchy, with the root level being level 1.
 *
 * This snippet travels up the document tree from a specified document and
 * returns the "ultimate" parent.  Version 2.0 was rewritten to use the new
 * getParentIds function features available only in MODx 0.9.5 or later.
 *
 * Based on the original UltimateParent 1.x snippet by Susan Ottwell
 * <sottwell@sottwell.com>.  The topLevel parameter was introduced by staed and
 * adopted here.
 */
if (!isset($modx)) return \'\';

$top = isset($top) && intval($top) ? $top : 0;
$id= isset($id) && intval($id) ? intval($id) : $modx->resource->get(\'id\');
$topLevel= isset($topLevel) && intval($topLevel) ? intval($topLevel) : 0;
if ($id && $id != $top) {
    $pid = $id;
    $pids = $modx->getParentIds($id);
    if (!$topLevel || count($pids) >= $topLevel) {
        while ($parentIds= $modx->getParentIds($id, 1)) {
            $pid = array_pop($parentIds);
            if ($pid == $top) {
                break;
            }
            $id = $pid;
            $parentIds = $modx->getParentIds($id);
            if ($topLevel && count($parentIds) < $topLevel) {
                break;
            }
        }
    }
}
return $id;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Wayfinder' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Wayfinder',
          'description' => 'Wayfinder for MODx Revolution 2.0.0-beta-5 and later.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'prop_wayfinder.level_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Depth (number of levels) to build the menu from. 0 goes through all levels.',
              'area' => '',
              'area_trans' => '',
            ),
            'includeDocs' => 
            array (
              'name' => 'includeDocs',
              'desc' => 'prop_wayfinder.includeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will limit the output to only the documents specified in this parameter. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'excludeDocs' => 
            array (
              'name' => 'excludeDocs',
              'desc' => 'prop_wayfinder.excludeDocs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Acts as a filter and will remove the documents specified in this parameter from the output. The startId is still required.',
              'area' => '',
              'area_trans' => '',
            ),
            'contexts' => 
            array (
              'name' => 'contexts',
              'desc' => 'prop_wayfinder.contexts_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Specify the contexts for the Resources that will be loaded in this menu. Useful when used with startId at 0 to show all first-level items. Note: This will increase load times a bit, but if you set cacheResults to 1, that will offset the load time.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheResults' => 
            array (
              'name' => 'cacheResults',
              'desc' => 'prop_wayfinder.cacheResults_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Cache the generated menu to the MODX Resource cache. Setting this to 1 will speed up the loading of your menus.',
              'area' => '',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'prop_wayfinder.cacheTime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 3600,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The number of seconds to store the cached menu, if cacheResults is 1. Set to 0 to store indefinitely until cache is manually cleared.',
              'area' => '',
              'area_trans' => '',
            ),
            'ph' => 
            array (
              'name' => 'ph',
              'desc' => 'prop_wayfinder.ph_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'To display send the output of Wayfinder to a placeholder set the ph parameter equal to the name of the desired placeholder. All output including the debugging (if on) will be sent to the placeholder specified.',
              'area' => '',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_wayfinder.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'With the debug parameter set to 1, Wayfinder will output information on how each Resource was processed.',
              'area' => '',
              'area_trans' => '',
            ),
            'ignoreHidden' => 
            array (
              'name' => 'ignoreHidden',
              'desc' => 'prop_wayfinder.ignoreHidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The ignoreHidden parameter allows Wayfinder to ignore the display in menu flag that can be set for each document. With this parameter set to 1, all Resources will be displayed regardless of the Display in Menu flag.',
              'area' => '',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'prop_wayfinder.hideSubMenus_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'The hideSubMenus parameter will remove all non-active submenus from the Wayfinder output if set to 1. This parameter only works if multiple levels are being displayed.',
              'area' => '',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => ' If WebLinks are used in the output, Wayfinder will output the link specified in the WebLink instead of the normal MODx link. To use the standard display of WebLinks (like any other Resource) set this to 0.',
              'area' => '',
              'area_trans' => '',
            ),
            'fullLink' => 
            array (
              'name' => 'fullLink',
              'desc' => 'prop_wayfinder.fullLink_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set to 1, will display the entire, absolute URL in the link. (It is recommended to use scheme instead.)',
              'area' => '',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'prop_wayfinder.scheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.relative',
                  'value' => '',
                  'name' => 'Relative',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.absolute',
                  'value' => 'abs',
                  'name' => 'Absolute',
                ),
                2 => 
                array (
                  'text' => 'prop_wayfinder.full',
                  'value' => 'full',
                  'name' => 'Full',
                ),
              ),
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Determines how URLs are generated for each link. Set to "abs" to show the absolute URL, "full" to show the full URL, and blank to use the relative URL. Defaults to relative.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortOrder' => 
            array (
              'name' => 'sortOrder',
              'desc' => 'prop_wayfinder.sortOrder_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'prop_wayfinder.ascending',
                  'value' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'prop_wayfinder.descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Allows the menu to be sorted in either ascending or descending order.',
              'area' => '',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_wayfinder.sortBy_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menuindex',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Sorts the output by any of the Resource fields on a level by level basis. This means that each submenu will be sorted independently of all other submenus at the same level. Random will sort the output differently every time the page is loaded if the snippet is called uncached.',
              'area' => '',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_wayfinder.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Causes Wayfinder to only process the number of items specified per level.',
              'area' => '',
              'area_trans' => '',
            ),
            'cssTpl' => 
            array (
              'name' => 'cssTpl',
              'desc' => 'prop_wayfinder.cssTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing a link to a style sheet or style information to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'jsTpl' => 
            array (
              'name' => 'jsTpl',
              'desc' => 'prop_wayfinder.jsTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This parameter allows for a chunk containing some Javascript to be inserted into the head section of the generated page.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'prop_wayfinder.rowIdPrefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'If set, Wayfinder will replace the id placeholder with a unique id consisting of the specified prefix plus the Resource id.',
              'area' => '',
              'area_trans' => '',
            ),
            'textOfLinks' => 
            array (
              'name' => 'textOfLinks',
              'desc' => 'prop_wayfinder.textOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'menutitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktext placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'titleOfLinks' => 
            array (
              'name' => 'titleOfLinks',
              'desc' => 'prop_wayfinder.titleOfLinks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'pagetitle',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'This field will be inserted into the linktitle placeholder.',
              'area' => '',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'prop_wayfinder.displayStart_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Show the document as referenced by startId in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'prop_wayfinder.firstClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'first',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the first item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'prop_wayfinder.lastClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'last',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the last item at a given menu level.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'prop_wayfinder.hereClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'active',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the items showing where you are, all the way up the chain.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'prop_wayfinder.parentClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for menu items that are a container and have children.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'prop_wayfinder.rowClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting each output row.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'prop_wayfinder.outerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the outer template.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'prop_wayfinder.innerClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the inner template.',
              'area' => '',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'prop_wayfinder.levelClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class denoting every output row level. The level number will be added to the specified class (level1, level2, level3 etc if you specified "level").',
              'area' => '',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'prop_wayfinder.selfClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for the current item.',
              'area' => '',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'prop_wayfinder.webLinkClass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'CSS class for weblink items.',
              'area' => '',
              'area_trans' => '',
            ),
            'outerTpl' => 
            array (
              'name' => 'outerTpl',
              'desc' => 'prop_wayfinder.outerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the outer most container; if not included, a string including "<ul>[[+wf.wrapper]]</ul>" is assumed.',
              'area' => '',
              'area_trans' => '',
            ),
            'rowTpl' => 
            array (
              'name' => 'rowTpl',
              'desc' => 'prop_wayfinder.rowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the regular row items.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowTpl' => 
            array (
              'name' => 'parentRowTpl',
              'desc' => 'prop_wayfinder.parentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for any Resource that is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'parentRowHereTpl' => 
            array (
              'name' => 'parentRowHereTpl',
              'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is a container and has children. Remember the [wf.wrapper] placeholder to output the children documents.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereTpl' => 
            array (
              'name' => 'hereTpl',
              'desc' => 'prop_wayfinder.hereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerTpl' => 
            array (
              'name' => 'innerTpl',
              'desc' => 'prop_wayfinder.innerTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for each submenu. If no innerTpl is specified the outerTpl is used in its place.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerRowTpl' => 
            array (
              'name' => 'innerRowTpl',
              'desc' => 'prop_wayfinder.innerRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the row items in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'innerHereTpl' => 
            array (
              'name' => 'innerHereTpl',
              'desc' => 'prop_wayfinder.innerHereTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the current Resource if it is in a subfolder.',
              'area' => '',
              'area_trans' => '',
            ),
            'activeParentRowTpl' => 
            array (
              'name' => 'activeParentRowTpl',
              'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for items that are containers, have children and are currently active in the tree.',
              'area' => '',
              'area_trans' => '',
            ),
            'categoryFoldersTpl' => 
            array (
              'name' => 'categoryFoldersTpl',
              'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for category folders. Category folders are determined by setting the template to blank or by setting the link attributes field to rel="category".',
              'area' => '',
              'area_trans' => '',
            ),
            'startItemTpl' => 
            array (
              'name' => 'startItemTpl',
              'desc' => 'prop_wayfinder.startItemTpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Name of the chunk containing the template for the start item, if enabled via the &displayStart parameter. Note: the default template shows the start item but does not link it. If you do not need a link, a class can be applied to the default template using the parameter &firstClass=`className`.',
              'area' => '',
              'area_trans' => '',
            ),
            'permissions' => 
            array (
              'name' => 'permissions',
              'desc' => 'prop_wayfinder.permissions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'list',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Will check for a permission on the Resource. Defaults to "list" - set to blank to skip normal permissions checks.',
              'area' => '',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'prop_wayfinder.hereId_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set, will change the "here" Resource to this ID. Defaults to the currently active Resource.',
              'area' => '',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_wayfinder.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A JSON object for where conditions for all items selected in the menu.',
              'area' => '',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'prop_wayfinder.templates_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. A comma-separated list of Template IDs to restrict selected Resources to.',
              'area' => '',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'prop_wayfinder.previewunpublished_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'wayfinder:properties',
              'desc_trans' => 'Optional. If set to Yes, if you are logged into the mgr and have the view_unpublished permission, it will allow previewing of unpublished resources in your menus in the front-end.',
              'area' => '',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Wayfinder Snippet to build site navigation menus
 *
 * Totally refactored from original DropMenu nav builder to make it easier to
 * create custom navigation by using chunks as output templates. By using
 * templates, many of the paramaters are no longer needed for flexible output
 * including tables, unordered- or ordered-lists (ULs or OLs), definition lists
 * (DLs) or in any other format you desire.
 *
 * @version 2.1.1-beta5
 * @author Garry Nutting (collabpad.com)
 * @author Kyle Jaebker (muddydogpaws.com)
 * @author Ryan Thrash (modx.com)
 * @author Shaun McCormick (modx.com)
 * @author Jason Coward (modx.com)
 *
 * @example [[Wayfinder? &startId=`0`]]
 *
 * @var modX $modx
 * @var array $scriptProperties
 * 
 * @package wayfinder
 */
$wayfinder_base = $modx->getOption(\'wayfinder.core_path\',$scriptProperties,$modx->getOption(\'core_path\').\'components/wayfinder/\');

/* include a custom config file if specified */
if (isset($scriptProperties[\'config\'])) {
    $scriptProperties[\'config\'] = str_replace(\'../\',\'\',$scriptProperties[\'config\']);
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/\'.$scriptProperties[\'config\'].\'.config.php\';
} else {
    $scriptProperties[\'config\'] = $wayfinder_base.\'configs/default.config.php\';
}
if (file_exists($scriptProperties[\'config\'])) {
    include $scriptProperties[\'config\'];
}

/* include wayfinder class */
include_once $wayfinder_base.\'wayfinder.class.php\';
if (!$modx->loadClass(\'Wayfinder\',$wayfinder_base,true,true)) {
    return \'error: Wayfinder class not found\';
}
$wf = new Wayfinder($modx,$scriptProperties);

/* get user class definitions
 * TODO: eventually move these into config parameters */
$wf->_css = array(
    \'first\' => isset($firstClass) ? $firstClass : \'\',
    \'last\' => isset($lastClass) ? $lastClass : \'last\',
    \'here\' => isset($hereClass) ? $hereClass : \'active\',
    \'parent\' => isset($parentClass) ? $parentClass : \'\',
    \'row\' => isset($rowClass) ? $rowClass : \'\',
    \'outer\' => isset($outerClass) ? $outerClass : \'\',
    \'inner\' => isset($innerClass) ? $innerClass : \'\',
    \'level\' => isset($levelClass) ? $levelClass: \'\',
    \'self\' => isset($selfClass) ? $selfClass : \'\',
    \'weblink\' => isset($webLinkClass) ? $webLinkClass : \'\'
);

/* get user templates
 * TODO: eventually move these into config parameters */
$wf->_templates = array(
    \'outerTpl\' => isset($outerTpl) ? $outerTpl : \'\',
    \'rowTpl\' => isset($rowTpl) ? $rowTpl : \'\',
    \'parentRowTpl\' => isset($parentRowTpl) ? $parentRowTpl : \'\',
    \'parentRowHereTpl\' => isset($parentRowHereTpl) ? $parentRowHereTpl : \'\',
    \'hereTpl\' => isset($hereTpl) ? $hereTpl : \'\',
    \'innerTpl\' => isset($innerTpl) ? $innerTpl : \'\',
    \'innerRowTpl\' => isset($innerRowTpl) ? $innerRowTpl : \'\',
    \'innerHereTpl\' => isset($innerHereTpl) ? $innerHereTpl : \'\',
    \'activeParentRowTpl\' => isset($activeParentRowTpl) ? $activeParentRowTpl : \'\',
    \'categoryFoldersTpl\' => isset($categoryFoldersTpl) ? $categoryFoldersTpl : \'\',
    \'startItemTpl\' => isset($startItemTpl) ? $startItemTpl : \'\'
);

/* process Wayfinder */
$output = $wf->run();
if ($wf->_config[\'debug\']) {
    $output .= $wf->renderDebugOutput();
}

/* output results */
if ($wf->_config[\'ph\']) {
    $modx->setPlaceholder($wf->_config[\'ph\'],$output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'Breadcrumb' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'BreadCrumb',
          'description' => 'This snippet will create a breadcrumb navigation for the current resource or a specific resource.',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.3.0 pl
 * 28/08/12
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property resourceId - (int) Resource ID whose breadcrumb is created; [Default value : null].
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Show the home page as a crumb; [Default value : false].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$resourceId           = !empty($resourceId) ? $resourceId : $modx->getOption(\'resourceId\', $scriptProperties, null, true);
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = (!is_null($resourceId) ? $resourceId : (!empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true)));
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, false, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@CODE:<ul id="breadcrumb" itemprop="breadcrumb"><li><a href="[[++site_url]]">[[++site_name]]</a></li>[[+crumbs]]</ul>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@CODE:<li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@CODE:<li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@CODE:<li>...</li>\');

/**
 * Return a chunk processed from chunk name, file path or direct code.
 *
 * @param string $tpl Can be chunk name, file path (@FILE:) or code (@CODE:)
 * @param array $placeholders Array of chunk placeholders
 *
 * @return string Chunk processed
 *
 */
if(!function_exists(\'processTpl\'))
{
	function processTpl($tpl, $placeholders = array())
	{
		global $modx;

		if(preg_match(\'#^(@CODE:)#\', $tpl))
		{
			$chunk = $modx->newObject(\'modChunk\');
			$chunk->setCacheable(false);
			$chunk->setContent(substr($tpl, 6));
		}
		elseif(preg_match(\'#^(@FILE:)#\', $tpl))
		{
			$chunk = $modx->newObject(\'modChunk\');
			$chunk->setCacheable(false);
			$chunk->setContent(file_get_contents(substr($tpl, 6)));
		}
		else
		{
			$chunk = $modx->getObject(\'modChunk\', array(\'name\' => $tpl), true);
			if(!is_object($chunk))
			{
				$chunk = $modx->newObject(\'modChunk\');
				$chunk->setCacheable(false);
				$chunk->setContent(\'\');
			}
		}
		return $chunk->process($placeholders);
	}
}

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if(!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\'))
{
	return \'\';
}

// We get all the crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while($resourceId != $from && $crumbsCount < $maxCrumbs)
{
	$resource = $modx->getObject(\'modResource\', $resourceId);

	// We check the conditions to show crumb
	if(
		(($resourceId == $modx->getOption(\'site_start\') && $showHomeCrumb) || $resourceId != $modx->getOption(\'site_start\'))  // ShowHomeCrumb
		&& (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))										// ShowHidden
		&& (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))									// ShowContainer
		&& ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\')) 									// UnPub
		&& (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)  // ShowCurrent
	)
	{
		// If is LTR direction, we push resource at the beginning of the array
		if($direction == \'ltr\')
		{
		    array_unshift($crumbs, $resource);
		}
		// Else we push it at the end
		else
		{
		    $crumbs[] = $resource;
		}

		$crumbsCount++;
	}
	$resourceId = $resource->get(\'parent\');
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
	// Current crumb tpl ?
	if($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
	{
		$tpl = $currentCrumbTpl;
	}
	// or default crumb tpl ?
	else
	{
		$tpl = $linkCrumbTpl;
	}

	// Placeholders
	$placeholders = $resource->toArray();
	if($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl)
	{
		if(is_numeric($resource->get(\'content\')))
		{
			$link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
		}
		else
		{
			$link = $resource->get(\'content\');
		}
	}
	else
	{
		$link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
	}
	$placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

	// Output
	$output .= processTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if($crumbsCount == $maxCrumbs)
{
	// If is LTR direction, we push the max delimiter at the beginning of the crumbs
	if($direction == \'ltr\')
	{
		$output = processTpl($maxCrumbTpl).$output;
	}
	// Else we push it at the end
	else
	{
		$output .= processTpl($maxCrumbTpl);
	}
}

// We build the breadcrumb output
$output = processTpl($containerTpl, array(
	\'crumbs\' => $output,
));

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'breadcrumb_snippet_from_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the first crumb.',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'breadcrumb_snippet_to_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Resource ID of the last crumb.',
              'area_trans' => '',
            ),
            'maxCrumbs' => 
            array (
              'name' => 'maxCrumbs',
              'desc' => 'breadcrumb_snippet_maxcrumbs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max crumbs shown in breadcrumb',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'breadcrumb_snippet_showhidden_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show hidden resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showContainer' => 
            array (
              'name' => 'showContainer',
              'desc' => 'breadcrumb_snippet_showcontainer_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show container resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showUnPub' => 
            array (
              'name' => 'showUnPub',
              'desc' => 'breadcrumb_snippet_showunpub_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show unpublished resources in breadcrumb.',
              'area_trans' => '',
            ),
            'showCurrentCrumb' => 
            array (
              'name' => 'showCurrentCrumb',
              'desc' => 'breadcrumb_snippet_showcurrentcrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show current resource as a crumb.',
              'area_trans' => '',
            ),
            'showBreadCrumbAtHome' => 
            array (
              'name' => 'showBreadCrumbAtHome',
              'desc' => 'breadcrumb_snippet_showbreadcrumbatHome_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show BreadCrumb on the home page.',
              'area_trans' => '',
            ),
            'showHomeCrumb' => 
            array (
              'name' => 'showHomeCrumb',
              'desc' => 'breadcrumb_snippet_showhomecrumb_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Show the home page as a crumb.',
              'area_trans' => '',
            ),
            'useWebLinkUrl' => 
            array (
              'name' => 'useWebLinkUrl',
              'desc' => 'breadcrumb_snippet_useweblinkurl_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Use the weblink url instead of the url to the weblink.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'breadcrumb_snippet_direction_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => ' Right To Left (rtl)',
                  'name' => ' Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'breadcrumb_snippet_scheme_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'URL Generation Scheme.',
              'area_trans' => '',
            ),
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'breadcrumb_snippet_containertpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@CODE:<ul id="breadcrumb" itemprop="breadcrumb"><li><a href="[[++site_url]]">[[++site_name]]</a></li>[[+crumbs]]</ul>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Container template for BreadCrumb. Can be file (@FILE:), code (@CODE:) or chunk name.',
              'area_trans' => '',
            ),
            'currentCrumbTpl' => 
            array (
              'name' => 'currentCrumbTpl',
              'desc' => 'breadcrumb_snippet_currentcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@CODE:<li>[[+pagetitle]]</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Current crumb template for BreadCrumb. Can be file (@FILE:), code (@CODE:) or chunk name.',
              'area_trans' => '',
            ),
            'linkCrumbTpl' => 
            array (
              'name' => 'linkCrumbTpl',
              'desc' => 'breadcrumb_snippet_linkcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@CODE:<li><a href="[[+link]]">[[+pagetitle]]</a></li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Default crumb template for BreadCrumb. Can be file (@FILE:), code (@CODE:) or chunk name.',
              'area_trans' => '',
            ),
            'maxCrumbTpl' => 
            array (
              'name' => 'maxCrumbTpl',
              'desc' => 'breadcrumb_snippet_maxcrumbtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '@CODE:<li>...</li>',
              'lexicon' => 'breadcrumb:properties',
              'area' => '',
              'desc_trans' => 'Max delimiter crumb template for BreadCrumb. Can be file (@FILE:), code (@CODE:) or chunk name.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * BreadCrumb
 * Copyright 2011 Benjamin Vauchel <contact@omycode.fr>
 *
 * BreadCrumb is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * BreadCrumb is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * BreadCrumb; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package breadcrumb
 * @author Benjamin Vauchel <contact@omycode.fr>
 *
 * @version Version 1.3.0 pl
 * 28/08/12
 *
 * Breadcrumb is a snippet for MODx Revolution, inspired by the Jared\'s BreadCrumbs snippet.
 * It will create a breadcrumb navigation for the current resource or a specific resource.
 *
 * Optional properties:
 *
 * @property resourceId - (int) Resource ID whose breadcrumb is created; [Default value : null].
 * @property from - (int) Resource ID of the first crumb; [Default value : 0].
 * @property to - (int) Resource ID of the last crumb; [Default value : current resource id].
 * @property maxCrumbs - (int) Max crumbs shown in breadcrumb. Max delimiter template can be customize with property maxCrumbTpl ; [Default value : 100].
 * @property showHidden - (bool) Show hidden resources in breadcrumb; [Default value : true].
 * @property showContainer - (bool) Show container resources in breadcrumb; [Default value : true].
 * @property showUnPub - (bool) Show unpublished resources in breadcrumb; [Default value : true].
 * @property showCurrentCrumb - (bool) Show current resource as a crumb; [Default value : true].
 * @property showBreadCrumbAtHome - (bool) Show BreadCrumb on the home page; [Default value : true].
 * @property showHomeCrumb - (bool) Show the home page as a crumb; [Default value : false].
 * @property useWebLinkUrl - (bool) Use the weblink url instead of the url to the weblink; [Default value : true].
 * @property direction - (string) Direction or breadcrumb : Left To Right (ltr) or Right To Left (rtl) for Arabic language for example; [Default value : ltr].
 * @property scheme - (string) URL Generation Scheme; [Default value : -1].
 *
 * Templates :
 *
 * @property containerTpl - (string) Container template for BreadCrumb; [Default value : BreadCrumbContainerTpl].
 * @property currentCrumbTpl - (string) Current crumb template for BreadCrumb; [Default value : BreadCrumbCurrentCrumbTpl].
 * @property linkCrumbTpl - (string) Default crumb template for BreadCrumb; [Default value : BreadCrumbLinkCrumbTpl].
 * @property maxCrumbTpl - (string) Max delimiter crumb template for BreadCrumb; [Default value : BreadCrumbMaxCrumbTpl].
 */

// Script Properties
$resourceId           = !empty($resourceId) ? $resourceId : $modx->getOption(\'resourceId\', $scriptProperties, null, true);
$from                 = !empty($from) ? $from : $modx->getOption(\'from\', $scriptProperties, 0, true, true);
$to                   = $currentResourceId = (!is_null($resourceId) ? $resourceId : (!empty($to) ? $to : $modx->getOption(\'to\', $scriptProperties, $modx->resource->get(\'id\'), true)));
$maxCrumbs            = !empty($maxCrumbs) ? abs(intval($maxCrumbs)) : $modx->getOption(\'maxCrumbs\', $scriptProperties, 100, true);
$showHidden           = isset($showHidden) ? (bool)$showHidden : (bool)$modx->getOption(\'showHidden\', $scriptProperties, true, true);
$showContainer        = isset($showContainer) ? (bool)$showContainer : (bool)$modx->getOption(\'showContainer\', $scriptProperties, true, true);
$showUnPub            = isset($showUnPub) ? (bool)$showUnPub : (bool)$modx->getOption(\'showUnPub\', $scriptProperties, true, true);
$showCurrentCrumb     = isset($showCurrentCrumb) ? (bool)$showCurrentCrumb : (bool)$modx->getOption(\'showCurrentCrumb\', $scriptProperties, true, true);
$showBreadCrumbAtHome = isset($showBreadCrumbAtHome) ? (bool)$showBreadCrumbAtHome : (bool)$modx->getOption(\'showBreadCrumbAtHome\', $scriptProperties, true, true);
$showHomeCrumb        = isset($showHomeCrumb) ? (bool)$showHomeCrumb : (bool)$modx->getOption(\'showHomeCrumb\', $scriptProperties, false, true);
$useWebLinkUrl        = isset($useWebLinkUrl) ? (bool)$useWebLinkUrl : (bool)$modx->getOption(\'useWebLinkUrl\', $scriptProperties, true, true);
$direction            = !empty($direction) ? $direction : $modx->getOption(\'direction\', $scriptProperties, \'ltr\', true);
$scheme               = !empty($scheme) ? $scheme : $modx->getOption(\'scheme\', $scriptProperties, $modx->getOption(\'link_tag_scheme\'), true);
$containerTpl         = !empty($containerTpl) ? $containerTpl : $modx->getOption(\'containerTpl\', $scriptProperties, \'@CODE:<ul id="breadcrumb" itemprop="breadcrumb"><li><a href="[[++site_url]]">[[++site_name]]</a></li>[[+crumbs]]</ul>\');
$currentCrumbTpl      = !empty($currentCrumbTpl) ? $currentCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@CODE:<li>[[+pagetitle]]</li>\');
$linkCrumbTpl         = !empty($linkCrumbTpl) ? $linkCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@CODE:<li><a href="[[+link]]">[[+pagetitle]]</a></li>\');
$maxCrumbTpl          = !empty($maxCrumbTpl) ? $maxCrumbTpl : $modx->getOption(\'currentCrumbTpl\', $scriptProperties, \'@CODE:<li>...</li>\');

/**
 * Return a chunk processed from chunk name, file path or direct code.
 *
 * @param string $tpl Can be chunk name, file path (@FILE:) or code (@CODE:)
 * @param array $placeholders Array of chunk placeholders
 *
 * @return string Chunk processed
 *
 */
if(!function_exists(\'processTpl\'))
{
	function processTpl($tpl, $placeholders = array())
	{
		global $modx;

		if(preg_match(\'#^(@CODE:)#\', $tpl))
		{
			$chunk = $modx->newObject(\'modChunk\');
			$chunk->setCacheable(false);
			$chunk->setContent(substr($tpl, 6));
		}
		elseif(preg_match(\'#^(@FILE:)#\', $tpl))
		{
			$chunk = $modx->newObject(\'modChunk\');
			$chunk->setCacheable(false);
			$chunk->setContent(file_get_contents(substr($tpl, 6)));
		}
		else
		{
			$chunk = $modx->getObject(\'modChunk\', array(\'name\' => $tpl), true);
			if(!is_object($chunk))
			{
				$chunk = $modx->newObject(\'modChunk\');
				$chunk->setCacheable(false);
				$chunk->setContent(\'\');
			}
		}
		return $chunk->process($placeholders);
	}
}

// Output variable
$output = \'\';

// We check if current resource is the homepage and if breadcrumb is shown for the homepage
if(!$showBreadCrumbAtHome && $modx->resource->get(\'id\') == $modx->getOption(\'site_start\'))
{
	return \'\';
}

// We get all the crumbs
$crumbs = array();
$crumbsCount = 0;
$resourceId = $to;
while($resourceId != $from && $crumbsCount < $maxCrumbs)
{
	$resource = $modx->getObject(\'modResource\', $resourceId);

	// We check the conditions to show crumb
	if(
		(($resourceId == $modx->getOption(\'site_start\') && $showHomeCrumb) || $resourceId != $modx->getOption(\'site_start\'))  // ShowHomeCrumb
		&& (($resource->get(\'hidemenu\') && $showHidden) || !$resource->get(\'hidemenu\'))										// ShowHidden
		&& (($resource->get(\'isfolder\') && $showContainer) || !$resource->get(\'isfolder\'))									// ShowContainer
		&& ((!$resource->get(\'published\') && $showUnPub) || $resource->get(\'published\')) 									// UnPub
		&& (($resourceId == $currentResourceId && $showCurrentCrumb) || $resourceId != $currentResourceId)  // ShowCurrent
	)
	{
		// If is LTR direction, we push resource at the beginning of the array
		if($direction == \'ltr\')
		{
		    array_unshift($crumbs, $resource);
		}
		// Else we push it at the end
		else
		{
		    $crumbs[] = $resource;
		}

		$crumbsCount++;
	}
	$resourceId = $resource->get(\'parent\');
}

// We build the output of crumbs
foreach($crumbs as $key => $resource)
{
	// Current crumb tpl ?
	if($showCurrentCrumb && ($resource->get(\'id\') == $currentResourceId))
	{
		$tpl = $currentCrumbTpl;
	}
	// or default crumb tpl ?
	else
	{
		$tpl = $linkCrumbTpl;
	}

	// Placeholders
	$placeholders = $resource->toArray();
	if($resource->get(\'class_key\') == \'modWebLink\' && $useWebLinkUrl)
	{
		if(is_numeric($resource->get(\'content\')))
		{
			$link = $modx->makeUrl($resource->get(\'content\'), \'\', \'\', $scheme);
		}
		else
		{
			$link = $resource->get(\'content\');
		}
	}
	else
	{
		$link = $modx->makeUrl($resource->get(\'id\'), \'\', \'\', $scheme);
	}
	$placeholders = array_merge($resource->toArray(), array(\'link\' => $link));

	// Output
	$output .= processTpl($tpl, $placeholders);
}

// We add the max delimiter to the crumbs output, if the max limit was reached
if($crumbsCount == $maxCrumbs)
{
	// If is LTR direction, we push the max delimiter at the beginning of the crumbs
	if($direction == \'ltr\')
	{
		$output = processTpl($maxCrumbTpl).$output;
	}
	// Else we push it at the end
	else
	{
		$output .= processTpl($maxCrumbTpl);
	}
}

// We build the breadcrumb output
$output = processTpl($containerTpl, array(
	\'crumbs\' => $output,
));

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);