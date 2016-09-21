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

 // No direct access
defined('_JEXEC') or die;

//Include the helper file
require_once dirname(__FILE__) . '/helper.php';


$name = $params->get('name', 'Facebook');
$url = $params->get('url', 'facebook');
$parray = array($name,$url,false);
$hello = ModFacebookNewsstream::getDisplay($parray);
require JModuleHelper::getLayoutPath('mod_fbprofile');
