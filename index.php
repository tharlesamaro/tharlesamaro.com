<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 24/05/18
 * Time: 12:21
 */

require './lib/autoload.php';

$smarty = new Template();
$smarty->assign('backgroundTotal', Functions::getNumberOfFilesImgInTheDirectory(Routes::getDefaultImgBackgroundFolder()));
$smarty->assign('baseUrlCss', Routes::getDefaultCssFolder());
$smarty->assign('baseUrlDoc', Routes::getDefaultDocFolder());
$smarty->assign('baseUrlImg', Routes::getDefaultImgFolder());
$smarty->assign('baseUrlJs', Routes::getDefaultJsFolder());
$smarty->assign('currentAge', Functions::getCurrentAge());
$smarty->assign('currentYear', date('Y'));
$smarty->assign('detailedServices', Config::DETAILED_SERVICES);
$smarty->assign('email', Config::EMAIIL);
$smarty->assign('facebook', Config::FACEBOOK);
$smarty->assign('github', Config::GITHUB);
$smarty->assign('location', Config::LOCATION);
$smarty->assign('name', Config::NAME);
$smarty->assign('nationality', Config::NATIONALITY);
$smarty->assign('services', Config::SERVICES);
$smarty->assign('subtitle', Config::SUBTITLE);
$smarty->assign('telegram', Config::TELEGRAM);
$smarty->assign('title', Config::SITE_NAME);
$smarty->display('index.tpl');