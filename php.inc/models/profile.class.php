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
 * @category Profile
 * @author Mikhail (Mik™) <miksoft.tm@gmail.com>
 * @version 1.0.0 (7.06.2016)
 */
class Profile extends \Core\BaseModel {

    /**
     * CLASS CONSTRUCTOR
     */
    function __construct() {
        $this->delegate(JSON::get_section('profile'));
        
        $this->full_name = $this->full_name();
    } // function __construct()


    /**
     * Get all the properties of the object JSON-section 'profile'
     * 
     * @return \Models\Profile
     */
    function get() {
        return $this;
    }


    /** 
     * Calculation of age by the date of birth
     * 
     * @return string
     */
    function calculate_age() {
        $from = new \DateTime($this->date_of_birth);
        $to   = new \DateTime('today');
        
        return $from->diff($to)->y;
    } // function calculate_age()


    /**
     * It makes full name of the first and last name
     * 
     * @return string
     */
    function full_name() {
        return $this->last_name . ' ' . $this->first_name;
    } // function full_name()
}

/* Location: /php.inc/models/profile.class.php */