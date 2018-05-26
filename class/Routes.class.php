<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 24/05/18
 * Time: 14:05
 */

Class Routes
{
    #private static $page404 = '';

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

    static function getDefaultDocFolder()
    {
        return self::getAssetsFolder() . 'doc/';
    }

    static function getDefaultImgBackgroundFolder()
    {
        return './assets/img/background/';
    }

    #static function getPage404()
    #{
        #if (isset($_GET['page'])) :
            #header('Location: ' . Routes::getSiteHome() . $page404);
            #die();
        #endif;
    #}
}
