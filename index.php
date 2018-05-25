<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 24/05/18
 * Time: 12:21
 */

require './lib/autoload.php';

$smarty = new Template();
$smarty->assign('baseUrlCss', Routes::getDefaultCssFolder());
$smarty->assign('baseUrlDoc', Routes::getDefaultDocFolder());
$smarty->assign('baseUrlImg', Routes::getDefaultImgFolder());
$smarty->assign('baseUrlJs', Routes::getDefaultJsFolder());
$smarty->assign('title', Config::SITE_NAME);
$smarty->display('index.tpl');