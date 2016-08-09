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
 * Profile section model class
 * 
 * @package PHPSample
 * @subpackage Models
 * @category Interests
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Interests extends \Core\BaseModel {
    
    protected $interests;
    
    /**
     * CLASS CONSTRUCTOR
     */
    function __construct() {
        $this->interests = JSON::get_section('interests');
    } // function __construct()


    /**
     * Get all the properties of the object JSON-section 'interests'
     * 
     * @return \Models\Profile
     */
    function get() {
        return $this->interests;
    }
}

/* Location: /php.inc/models/interests.class.php */