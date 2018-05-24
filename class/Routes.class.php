<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 24/05/18
 * Time: 14:05
 */

Class Routes
{
    function __construct()
    {
        parent::__construct();
    }

    static function getSiteHome()
    {
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    # folder assets
    private static function getAssetsFolder()
    {
        return self::getSiteHome() . '/assets/';
    }

    # return folders CSS, IMG and JS
    static function getDefaultCssFolder()
    {
        return self::getAssetsFolder() . 'css/';
    }

    static function getDefaultImgFolder()
    {
        return self::getAssetsFolder() . 'img/';
    }

    static function getDefaultJsFolder()
    {
        return self::getAssetsFolder() . 'js/';
    }
    # /folder assets
}
