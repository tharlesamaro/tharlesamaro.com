<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 24/05/18
 * Time: 13:31
 */

Class Template extends SmartyBC
{
    function __construct()
    {
        parent::__construct();
        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile/');
        $this->setCacheDir('view/cache');
    }
}
