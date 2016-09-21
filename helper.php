<?php
/**
 * FacebookNewsstream
 * 
 * @package    Crixu.FacebookNewsstream
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.txt
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_facebooknewsstream is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
 
class ModFacebookNewsstream
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
      public static function getDisplay($params)
    {
					// Obtain a database connection
	
       return '<div class="fb-page" data-href="https://www.facebook.com/'.$params[1].'" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="'.$params[2].'" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/'.$params[1].'"><a href="https://www.facebook.com/'.$params[1].'">'.$params[0].'</a></blockquote></div></div>';
    }
}