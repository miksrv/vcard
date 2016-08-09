<?php
/**
 * S A M P L E    P H P    C O D E
 * 
 * @author     Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @copyright  Copyright (c) 2016, Mikhail
 */

    namespace Models;

        use \Libraries\JSON as JSON;

/**
 * Contacts section model class
 * 
 * @package PHPSample
 * @subpackage Models
 * @category Contacts
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Contacts extends \Core\BaseModel {

    /**
     * CLASS CONSTRUCTOR
     */
    function __construct() {
        $this->delegate(JSON::get_section('contacts'));
    } // function __construct()


    /**
     * Get all the properties of the object JSON-section 'contacts'
     * 
     * @return \Models\Profile
     */
    function get() {
        return $this;
    }
}

/* Location: /php.inc/models/contacts.class.php */