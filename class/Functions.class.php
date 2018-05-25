<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 25/05/18
 * Time: 19:26
 */

Class Functions
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     */
    static function getCurrentAge()
    {
        $dateOfBirth = new DateTime(Config::DATE_OF_BIRTH);
        $currentDate = new DateTime(date('Y-m-d'));
        $interval = $dateOfBirth->diff($currentDate);
        return $interval->y;
    }
}
