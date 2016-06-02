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
 * Extend the tl_settings palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{tawkto_legend:hide},tawkto_enable,tawkto_enable_frontend';

/**
 * Add the fields to tl_settings
 */
$GLOBALS['TL_DCA']['tl_settings']['fields']['tawkto_enable'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['tawkto_enable'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['tawkto_enable_frontend'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['tawkto_enable_frontend'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class' => 'w50'),
    'sql'                     => "char(1) NOT NULL default ''"
);
