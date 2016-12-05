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
    
    /**
     * Array of template variables
     * @var array 
     */
    private $variables = array();
    
    /**
     * HTTP server statuses codes
     * @var array
     */
    private $http_header_codes = array(
        200 => '200 OK',
        301 => '301 Moved Permanently',
        303 => '303 See Other',
        307 => '307 Temporary Redirect',
        401 => '401 Unauthorized',
        403 => '403 Forbidden',
        404 => '404 Not Found'
    );
    
    /**
     * Template for page 404
     * @var string
     */
    private $page_404_template 	= '';
    
    
    /**
     * CLASS CONSTRUCTOR
     */
    function __construct() {
        $this->page_404_template = VIEWPATH . '404.php';
    } // function __construct()
		
    
    /**
     * Display page using the specified template
     * 
     * @throws \Exception
     * @param string template name
     * @return void
     */
    function display($template) {
        if ( ! $this->_template_exists(VIEWPATH . $template)) {
            throw new \Exception('Template file not exists (' . $template . ')');
        }

        $this->_print_template(VIEWPATH . $template);
    } // function display($template)
		
    
    /**
     * Show template page 404
     * 
     * @return void
     */
    function show_error_404() {
        if ($this->_template_exists($this->page_404_template)) {
            $this->_print_template($this->page_404_template, 404);
        }
        
        exit();
    } // function show_error_404()


    /**
     * Assign a variable to the view
     * 
     * @param string variable
     * @param string value
     * @return void
     */
    function assign($variable, $value) {
        $this->variables[$variable] = $value;
    } // function assign($variable, $value)


    /**
     * Check if template file exists
     *
     * @access private
     * @param string template name
     * @return boolean
     */
    private function _template_exists($template) {
        return (@file_exists($template) && is_file($template));
    } // private function _template_exists($template)

    
    /**
     * Make and show template
     * 
     * @access private
     * @param string template name
     * @param integer http code
     * @return void
     */
    private function _print_template($template, $code = 200) {
        foreach($this->variables as $variable => $value) {
            $$variable = $value;
        }
        
        $this->_set_header_status_code($code);
        
        include_once($template);
    } // private function _print_template($template, $code = 200)
    
    
    /**
     * Set the header status code
     * 
     * @access private
     * @param integer
     * @return void
     */
    private function _set_header_status_code($pnStatusCode) {
        $lstrStatusCode = (@isset($this->http_header_codes[$pnStatusCode])) ? $this->http_header_codes[$pnStatusCode] : '200 OK';
        
        header("HTTP/1.0 " . $lstrStatusCode);
    }
}

/* Location: /php.inc/core/view.class.php */