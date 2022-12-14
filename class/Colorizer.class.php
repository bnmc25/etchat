<?php
/**
 * Class Colorizer, generate colortable and color slder
 *
 * LICENSE: CREATIVE COMMONS PUBLIC LICENSE  "Namensnennung ? Nicht-kommerziell 2.0"
 *
 * @copyright  2009 <SEDesign />
 * @license    http://creativecommons.org/licenses/by-nc/2.0/de/
 * @version    $3.0.6$
 * @link       http://www.sedesign.de/de_produkte_chat-v3.html
 * @since      File available since Alpha 1.0
 */

class Colorizer extends EtChatConfig
{
	/**
	* Constructor
	*
	* @uses LangXml object creation
	* @uses LangXml::getLang() parser method
	* @return void
	*/
	public function __construct (){
	
		// call parent Constructor from class EtChatConfig
		parent::__construct();
		
		// starts session for LangXml Object
		session_start();
		
		// Disable Browser Chache
		header('Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0');
	
		// create new LangXml Object
		$langObj = new LangXml("./");
		$this->lang=$langObj->getLang()->farben_fenster_php[0];
	
		// initialize template
		include_once("./styles/colorizer.tpl.html");
	}
}
