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
 * @category Skills
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Skills extends \Core\BaseModel {
    
    protected $skills;
    
    /**
     * CLASS CONSTRUCTOR
     */
    function __construct() {
        $this->skills = JSON::get_section('skills');
    } // function __construct()


    /**
     * Get all the properties of the object JSON-section 'skills'
     * 
     * @return \Models\Profile
     */
    function get() {
        return $this->skills;
    }
}

/* Location: /php.inc/models/skills.class.php */