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
 * Namespace
 */
namespace TawkTo;


/**
 * Class TawkTo
 *
 * @copyright  quality work | clever.simple.effective
 * @author     Wolfgang Schwaiger
 * @package    Devtools
 */
class BackendTawkTo extends \BackendModule
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_tawkto';


	/**
	 * Generate the module
	 */
	protected function compile()
	{
        return '';
	}
    
    public function loadJS($strContent, $strTemplate)
    {
        /* only activate when settings say so */
        if ($strTemplate == 'be_main' && \Config::get('tawkto_enable'))
        {
            /* load backend theme */
            $objTemplate = new \BackendTemplate($this->strTemplate);
            
            /* insert right before the closing <body> tag */
            $strContent = str_replace('</body>', $objTemplate->parse() . "\n" . '</body>', $strContent);
        }

        return $strContent;
    }
}
