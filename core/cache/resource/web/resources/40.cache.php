<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 40,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Proceso de Autenticación OpenID',
    'longtitle' => '',
    'description' => '',
    'alias' => 'proceso-de-autenticacion-openid',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 39,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p><strong> </strong></p>
<h2>2.1  Proceso de Autenticación OpenID</h2>
<p>La autenticación por ClaveÚnica implica una serie de interacciones entre su Sitio Web, ClaveÚnica y la persona que se está autentificando. El siguiente diagrama describe el proceso:</p>
<p>  <img style="display: block; margin-left: auto; margin-right: auto;" src="assets/img/ClaveUnica/Flujo.png" alt="" width="800" height="488" /></p>
<p style="text-align: center;">Figura 1: "Flujo de Autentificación de ClaveÚnica"</p>
<p> </p>
<p>El flujo queda especificado de la siguiente manera:</p>
<ol>
<li>La persona ingresa al Sitio Web de servicio de su interés y/o necesidad.</li>
<li>En caso de requerir el Sitio Web de servicio autentificar a la persona redirige a una URL de ClaveÚnica donde se realizara la autenticación.</li>
<li>La persona ingresa a www.claveunica.cl y se le presenta el formulario de autenticación, similar al siguiente:</li>
</ol>
<p> </p>
<p align="center"><img style="display: block; margin-left: auto; margin-right: auto;" src="assets/img/ClaveUnica/claveunica.png" alt="" width="498" height="541" /> Figura 2: "Formulario de Autentificación de Usuario"</p>
<p> </p>
<ol start="4">
<li>Usuario ingresa su RUT y contraseña.</li>
<li>ClaveÚnica valida contra el Registro Civil si el Rut y la clave proporcionados por la persona son correctos.</li>
<li>ClaveÚnica redirige al usuario al Sitio Web del servicio incorporando como parámetros las credenciales con el resultado de la autenticación.</li>
<li>Usuario accede a la web del servicio presentando las credenciales obtenidas.</li>
<li>El Sitio Web del servicio valida que las credenciales OpenID sean correctas y que la identidad del usuario proviene de ClaveÚnica. Si es así, autentica al usuario e inicia su sesión.</li>
</ol>
<p><strong> </strong></p>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 2,
    'createdon' => 1355251581,
    'editedby' => 1,
    'editedon' => 1355256518,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1355256518,
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
    'uri' => 'claveunica/claveunica/proceso-de-autenticacion-openid.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="http://ayuda.chilesinpapeleo.cl/" />
	<title>Ayuda ChileSinPapeleo - Proceso de Autenticación OpenID</title>
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
				<ul><li class="first"><a href="claveunica/introduccion.html" title="Introducción" >Introducción</a></li>
<li class="active"><a href="claveunica/claveunica.html" title="ClaveÚnica" >ClaveÚnica</a><ul><li class="first active current"><a href="claveunica/claveunica/proceso-de-autenticacion-openid.html" title="Proceso de Autenticación OpenID" >Proceso de Autenticación OpenID</a></li>
</ul></li>
<li><a href="claveunica/integracion-de-claveunica-con-su-sitio-web.html" title="Integración de ClaveÚnica con su Sitio Web" >Integración de ClaveÚnica con su Sitio Web</a></li>
<li><a href="claveunica/ejemplos-de-integracion.html" title="Ejemplos de Integración" >Ejemplos de Integración</a></li>
<li class="last"><a href="claveunica/anexos.html" title="Anexos" >Anexos</a></li>
</ul>
				</div>
				</div>
				<div class="span8">
				<ul class="breadcrumb">
  <li><a href="claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li><a href="claveunica/claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li>Proceso de Autenticación OpenID</li>
</ul>
				<p><strong> </strong></p>
<h2>2.1  Proceso de Autenticación OpenID</h2>
<p>La autenticación por ClaveÚnica implica una serie de interacciones entre su Sitio Web, ClaveÚnica y la persona que se está autentificando. El siguiente diagrama describe el proceso:</p>
<p>  <img style="display: block; margin-left: auto; margin-right: auto;" src="assets/img/ClaveUnica/Flujo.png" alt="" width="800" height="488" /></p>
<p style="text-align: center;">Figura 1: "Flujo de Autentificación de ClaveÚnica"</p>
<p> </p>
<p>El flujo queda especificado de la siguiente manera:</p>
<ol>
<li>La persona ingresa al Sitio Web de servicio de su interés y/o necesidad.</li>
<li>En caso de requerir el Sitio Web de servicio autentificar a la persona redirige a una URL de ClaveÚnica donde se realizara la autenticación.</li>
<li>La persona ingresa a www.claveunica.cl y se le presenta el formulario de autenticación, similar al siguiente:</li>
</ol>
<p> </p>
<p align="center"><img style="display: block; margin-left: auto; margin-right: auto;" src="assets/img/ClaveUnica/claveunica.png" alt="" width="498" height="541" /> Figura 2: "Formulario de Autentificación de Usuario"</p>
<p> </p>
<ol start="4">
<li>Usuario ingresa su RUT y contraseña.</li>
<li>ClaveÚnica valida contra el Registro Civil si el Rut y la clave proporcionados por la persona son correctos.</li>
<li>ClaveÚnica redirige al usuario al Sitio Web del servicio incorporando como parámetros las credenciales con el resultado de la autenticación.</li>
<li>Usuario accede a la web del servicio presentando las credenciales obtenidas.</li>
<li>El Sitio Web del servicio valida que las credenciales OpenID sean correctas y que la identidad del usuario proviene de ClaveÚnica. Si es así, autentica al usuario e inicia su sesión.</li>
</ol>
<p><strong> </strong></p>
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
    '[[*pagetitle]]' => 'Proceso de Autenticación OpenID',
    '[[UltimateParent]]' => '36',
    '[[Wayfinder? &startId=`36` &selfClass=`current` ]]' => '<ul><li class="first"><a href="claveunica/introduccion.html" title="Introducción" >Introducción</a></li>
<li class="active"><a href="claveunica/claveunica.html" title="ClaveÚnica" >ClaveÚnica</a><ul><li class="first active current"><a href="claveunica/claveunica/proceso-de-autenticacion-openid.html" title="Proceso de Autenticación OpenID" >Proceso de Autenticación OpenID</a></li>
</ul></li>
<li><a href="claveunica/integracion-de-claveunica-con-su-sitio-web.html" title="Integración de ClaveÚnica con su Sitio Web" >Integración de ClaveÚnica con su Sitio Web</a></li>
<li><a href="claveunica/ejemplos-de-integracion.html" title="Ejemplos de Integración" >Ejemplos de Integración</a></li>
<li class="last"><a href="claveunica/anexos.html" title="Anexos" >Anexos</a></li>
</ul>',
    '[[$breadcrumbLinkCrumbTpl?id=`36`&type=`document`&contentType=`text/html`&pagetitle=`ClaveÚnica`&longtitle=``&description=``&alias=`claveunica`&link_attributes=``&published=`1`&pub_date=`0`&unpub_date=`0`&parent=`0`&isfolder=``&introtext=``&content=`<p>Bienvenido al manual de ClaveÚnica</p>`&richtext=`1`&template=`1`&menuindex=`2`&searchable=`1`&cacheable=`1`&createdby=`2`&createdon=`2012-12-11 18:40:08`&editedby=`1`&editedon=`2012-12-11 20:01:26`&deleted=``&deletedon=`0`&deletedby=`0`&publishedon=`2012-12-11 19:47:00`&publishedby=`2`&menutitle=``&donthit=``&privateweb=``&privatemgr=``&content_dispo=`0`&hidemenu=``&class_key=`modDocument`&context_key=`web`&content_type=`1`&uri=`claveunica.html`&uri_override=`0`&hide_children_in_tree=`0`&show_in_tree=`1`&properties=`c101f69d01b2b20d43cfc1601e302ae4`&link=`claveunica.html`]]' => '<li><a href="claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li>',
    '[[$breadcrumbLinkCrumbTpl?id=`39`&type=`document`&contentType=`text/html`&pagetitle=`ClaveÚnica`&longtitle=``&description=``&alias=`claveunica`&link_attributes=``&published=`1`&pub_date=`0`&unpub_date=`0`&parent=`36`&isfolder=``&introtext=``&content=`<p><strong> </strong></p>
<h1>2         ClaveÚnica</h1>
<p>ClaveÚnica se encuentra basado en OpenId con soporte para el protocolo OpenId 2.0, posee una serie de librerías libres en diversos lenguajes de programación para facilitar la integración con su Sitio Web. Este mismo protocolo de autentificación en la actualidad es utilizada en  grandes compañías como Google, Yahoo, MSN en entre otras.</p>
<p>ClaveÚnica soporta el protocolo OpenID 2.0, protocolo utilizado al generar una petición de un Sitio Web externo hacia ClaveÚnica para autenticar a una persona. ClaveÚnica verifica la autenticidad del chileno a través de sus contraseñas obtenidas en el Servicio de Registro Civil e Identificación. Luego, devuelve al sitio externo un identificador único con que el sitio puede reconocer a la persona. El identificador es consistente, permitiéndole al Sitio Web reconocer a la persona a lo largo de múltiples sesiones.</p>
<p>ClaveÚnica soporta la extension OpenID Attribute Exchange 1.0. Esta extensión le permite a desarrolladores acceder, con el permiso de la persona, a su información personal, en la actualidad sólo soporta el rut, pero se espera que más adelante existan más campos disponibles por ejemplo nombre, apellidos, etc.</p>
<p>Para mayor información de OpenID, puede leer los siguientes links (ambos en inglés):</p>
<ul>
<li>OpenID: <em>http://openid.net/specs/openid-authentication-2_0.html</em></li>
<li>OpenID attribute Exchange: <em>http://openid.net/specs/openid-attribute-exchange-1_0.html</em></li>
</ul>
<p> </p>`&richtext=`1`&template=`1`&menuindex=`2`&searchable=`1`&cacheable=`1`&createdby=`2`&createdon=`2012-12-11 18:44:53`&editedby=`1`&editedon=`2012-12-11 20:08:31`&deleted=``&deletedon=`0`&deletedby=`0`&publishedon=`2012-12-11 20:08:31`&publishedby=`1`&menutitle=``&donthit=``&privateweb=``&privatemgr=``&content_dispo=`0`&hidemenu=``&class_key=`modDocument`&context_key=`web`&content_type=`1`&uri=`claveunica/claveunica.html`&uri_override=`0`&hide_children_in_tree=`0`&show_in_tree=`1`&properties=`5f272e61caf1bd79493eaeac8243e1ce`&link=`claveunica/claveunica.html`]]' => '<li><a href="claveunica/claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li>',
    '[[$breadcrumbContainerTpl?crumbs=`<li><a href="claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li><a href="claveunica/claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li>Proceso de Autenticación OpenID</li>`]]' => '<ul class="breadcrumb">
  <li><a href="claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li><a href="claveunica/claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li>Proceso de Autenticación OpenID</li>
</ul>',
    '[[Breadcrumb? &containerTpl=`breadcrumbContainerTpl` &linkCrumbTpl=`breadcrumbLinkCrumbTpl`]]' => '<ul class="breadcrumb">
  <li><a href="claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li><a href="claveunica/claveunica.html">ClaveÚnica</a> <span class="divider">/</span></li><li>Proceso de Autenticación OpenID</li>
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