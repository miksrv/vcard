<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    namespace Controllers;

/**
 * Custom controller class
 * 
 * @package PHPSample
 * @subpackage Controllers
 * @category Portfolio
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Portfolio {

    /**
     * Link to the parent object (global object 'this')
     * @var object 
     */
    private $parent;


    /**
     * CLASS CONSTRUCTOR
     */
    function __construct($parent) {    
        $this->parent = $parent;
    } // function __construct($parent)


    /**
     * This method creates the main page CV
     * 
     * @return void
     */
    function make() {
        $this->create_lang_menu();

        $this->load_language();
        
        $this->load_portfolio();
        
        $this->parent->view->assign('url', \Core\Router::get_uri());
    } // function make()


    protected function create_lang_menu() {
        $this->parent->view->assign('lang_menu', $this->parent->create_lang_menu());
    } // protected function create_lang_menu()


    protected function load_language() {
        $section = new \Models\Language();

        $this->parent->view->assign('language', $section->get());
    } // protected function load_language()


    /**
     * Load Profile section of the JSON object in the template
     */
    protected function load_portfolio() {
        $section = new \Models\Portfolio();
        $section->sort();

        $this->parent->view->assign('portfolio', $section->get());
    } // protected function load_portfolio()
}

/* Location: /php.inc/controllers/portfolio.class.php */