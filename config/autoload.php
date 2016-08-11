<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   TawkTo
 * @author    Wolfgang Schwaiger
 * @license   LGPLv3
 * @copyright quality work | clever.simple.effective
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'TawkTo',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'TawkTo\BackendTawkTo' => 'system/modules/qwat-tawkto/classes/BackendTawkTo.php',
	'TawkTo\FrontendTawkTo' => 'system/modules/qwat-tawkto/classes/FrontendTawkTo.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_tawkto' => 'system/modules/qwat-tawkto/templates',
	'tawkto_default' => 'system/modules/qwat-tawkto/templates',
));
