<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 24/05/18
 * Time: 14:05
 */

Class Routes
{
    public static $page;
    private static $page404 = 'controller/404.php';

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

    # url friendly
    static function getPage()
    {
        if (isset($_GET['page'])) :
            $page1 = $_GET['page'];
            self::$page = explode('/', $page1);
            $page1 = 'controller/' . self::$page[0] . '.php';
            return (file_exists($page1)) ? include $page1 : include self::$page404;
        endif;
        header('Location: ' . Routes::getSiteHome() . '/inicio');
        die();
    }
}
