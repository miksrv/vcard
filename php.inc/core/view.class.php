<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    namespace Core;
	
/**
 * THE VIEW CLASS
 * 
 * @package PHPSample
 * @subpackage Core
 * @category View
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
    
class View {
    
    private $variables = array();


    private $iaVariables 			= array();
		private $iaStatusCodes			= array(
			200	=> '200 OK',
			301 => '301 Moved Permanently',
			303 => '303 See Other',
			307 => '307 Temporary Redirect',
			401 => '401 Unauthorized',
			403 => '403 Forbidden',
			404 => '404 Not Found'
		);
		private $istrNotFoundTemplate 	= '';
		
		/* CONSTRUCTOR */
		
		public function __construct()
		{
			//$this->istrNotFoundTemplate = VIEW_INCLUDE_PATH . '404.php';
		}
		
		/* PUBLIC METHODS */
		
		/**
		 * Show template by template name
		 *
		 * @param string $pstrTemplate
		 */
		public function showTemplate($pstrTemplate)
		{
			if(!$this->templateExists(VIEWPATH . $pstrTemplate))
			{
				$this->showPageNotFound();
			}
			
			$this->renderTemplate(VIEWPATH . $pstrTemplate);
		}
		
		/**
		 * Show template page not found
		 */
		public function show_error_404()
		{			
			if($this->templateExists($this->istrNotFoundTemplate))
			{
				$this->renderTemplate($this->istrNotFoundTemplate, 404);
			}
			
			exit();
		}
		
		/**
		 * Assign a variable to the View
		 * 
		 * @param string $pstrVariable
		 * @param mixed $pmValue
		 */
		public function assign($pstrVariable, $pmValue)
		{
			$this->iaVariables[$pstrVariable] = $pmValue;
		}
		
		/* PRIVATE METHODS */
		
		/**
		 * Check if template file exists
		 *
		 * @param string $pstrTemplate
		 */
		private function templateExists($pstrTemplate)
		{
			return (@file_exists($pstrTemplate) && is_file($pstrTemplate));
		}
		
		/**
		 * Render template
		 * Create assignments and include template 
		 *
		 * @param string $pstrTemplate
		 * @param int $pnStatusCode
		 */
		private function renderTemplate($pstrTemplate, $pnStatusCode = 200)
		{
			foreach($this->iaVariables as $lstrVariable => $lmValue)
			{
				$$lstrVariable = $lmValue; 
			}
				
			$this->setStatusCodeHeader($pnStatusCode);
			
			@include_once($pstrTemplate);
		}
		
		/**
		 * Set Status code Header
		 *
		 * @param int $pnStatusCode
		 */
		private function setStatusCodeHeader($pnStatusCode)
		{
			$lstrStatusCode = (@isset($this->iaStatusCodes[$pnStatusCode])) ? $this->iaStatusCodes[$pnStatusCode] : '200 OK';
			
			header("HTTP/1.0 " . $lstrStatusCode);
		}
	}