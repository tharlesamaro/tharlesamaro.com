<?php
/* Smarty version 3.1.32, created on 2018-05-24 20:41:42
  from '/var/www/html/tharlesamaro.com/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b074db67d59a8_89279651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0410d4acc460e2617a971c798f39a2b7d2e6648d' => 
    array (
      0 => '/var/www/html/tharlesamaro.com/view/index.tpl',
      1 => 1527204778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b074db67d59a8_89279651 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta content="" name="description">
    <meta content="Tharles Amaro" name="author">
    <meta content="tharles" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrlCss']->value;?>
bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrlCss']->value;?>
flaticon.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrlCss']->value;?>
animated-modern.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrlCss']->value;?>
modern-style.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrlCss']->value;?>
queries-modern.css" media="all" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"
          type="text/css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrlJs']->value;?>
pluginsmodern.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseUrlJs']->value;?>
modern.js" type="text/javascript"><?php echo '</script'; ?>
>

</head>

<body>

<div class="preloader">
    <div class="mainloader"></div>
</div>

<div id="boxintro">

        <div id="frame1" data-frame="6000">
        <div class="opening">
            <div class="triangle-botright animfadeInRight" data-time="300"></div>
            <div class="triangle-topleft animfadeInLeft" data-time="0"></div>
        </div>
        <div class="contentintro">
                                    <div class="lineintro animrollIn" data-time="400">
                <div class="innerintro"></div>
            </div>
            
            <div class="talentintro animfadeInUpBig" data-time="600">
                <img alt="background" src="#">
            </div>
            <div class="taglineintro animfadeInUpBig" data-time="900">EU SOU THARLES AMARO</div>
            <div id="introSlidertext" class="animfadeInUpBig" data-time="1200">
                <h3>SUPORTE TÉCNICO</h3>
                <h3>DESENVOLVIMENTO WEB</h3>
                <h3>TECNOLOGIA DA INFORMAÇÃO</h3>
            </div>
        </div>
        
    </div>
    
</div>


<div id="webbackground">
    <div id="homeSlider">
        <div class="bgmodern"><img alt="background" src="#"></div>
        <div class="bgmodern"><img alt="background" src="#"></div>
    </div>
    <div class="overlay-main"></div>
</div>

<div class="vertex-menu animfadeInRight" data-time="0"><a class="vertex-menu_tx">DOWNLOAD CV</a></div>
<div id="wrappermodern">
        <div id="sidebar-wrappermodern">
        <div class="sidebar-nav">

            <div class="talent animfadeInUpBig" data-time="0">
                <img alt="background" src="#">
            </div>
            <h2 class="animfadeInUpBig" data-time="300">THARLES AMARO</h2>
            <p class="modern-color animfadeInUpBig" data-time="600">SISTEMAS PARA INTERNET</p>

            <ul>
                <li class="animfadeInUpBig" data-time="700"><a class="active" id="home-btn">INÍCIO</a></li>
                <li class="animfadeInUpBig" data-time="750"><a id="about-btn">SOBRE</a></li>
                <li class="animfadeInUpBig" data-time="800"><a id="resume-btn">RESUMO</a></li>
                <li class="animfadeInUpBig" data-time="850"><a id="skill-btn">HABILIDADES</a></li>
                <li class="animfadeInUpBig" data-time="900"><a id="porto-btn">PORTOFOLIO</a></li>
                <li class="animfadeInUpBig" data-time="950"><a id="contact-btn">CONTATO</a></li>
            </ul>

                        <div id="wrapfooter" class="opaci">
                <div id="soc-icon" class="animfadeInUpBig" data-time="1000">
                    <a class="glyph-icon flaticon-github10" href="https://github.com/tharlesamaro"></a>
                    <a class="glyph-icon flaticon-facebook25" href="#"></a>
                    <a class="glyph-icon flaticon-twitter16" href="#"></a>
                </div>
                <div id="footer" class="animfadeInUpBig" data-time="1100">©all rights reserved. tharles amaro 2018</div>
            </div>
                    </div>
        <div class="holdsidebar"></div>
    </div>
    
        <div class="anim-nav" id="nav-icon">
        <div class="menu-line"></div>
        <div class="menu-line1"></div>
        <div class="menu-line2"></div>
    </div>
        <div class="seperator"></div>

        <div id="page-content-wrappermodern">        <div class="container-fluid">            <div class="row">                <?php 
                    Routes::getPage();
                ?>
            </div>        </div>    </div>    </div>

<div class="equalizer animfadeIn" data-time="0">
    <span class="equal-line equal-line-1 intro"></span>
    <span class="equal-line equal-line-2 intro"></span>
    <span class="equal-line equal-line-3 intro"></span>
    <span class="equal-line equal-line-4 intro"></span>
</div>
<audio id="playerintro" loop>
    <source src="soundintro/musicintro.mp3" type="audio/mpeg">
</audio>

</body>
</html>
<?php }
}
