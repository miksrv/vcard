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
 * @category Resume
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Resume {

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

        $this->load_profile();
        $this->load_skills();
        $this->load_interests();
        $this->load_contacts();
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

    protected function load_profile() {
        $section = new \Models\Profile();
        
        $section->age = $section->calculate_age();
        $section->age = \Libraries\Lang::to_normal_alt($section->age, $this->parent->current_language);

        $this->parent->view->assign('profile', $section->get());
    } // protected function load_profile()

    protected function load_skills() {
        $section = new \Models\Skills();

        $this->parent->view->assign('skills', $section->get());
    } // protected function load_skills()

    protected function load_interests() {
        $section = new \Models\Interests();

        $this->parent->view->assign('interests', $section->get());
    } // protected function load_interests()

    protected function load_contacts() {
        $section = new \Models\Contacts();

        $this->parent->view->assign('contacts', $section->get());
    } // protected function load_contacts()
}

/* Location: /php.inc/controllers/resume.class.php */