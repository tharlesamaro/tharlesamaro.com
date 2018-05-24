<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta content="" name="description">
    <meta content="Tharles Amaro" name="author">
    <meta content="tharles" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    {*Bootstrap CSS*}
    <link href="{$baseUrlCss}bootstrap.min.css" rel="stylesheet">
    {*flaticon CSS*}
    <link href="{$baseUrlCss}flaticon.css" rel="stylesheet">
    {*Modern CSS*}
    <link href="{$baseUrlCss}animated-modern.css" rel="stylesheet">
    <link href="{$baseUrlCss}modern-style.css" rel="stylesheet">
    <link href="{$baseUrlCss}queries-modern.css" media="all" rel="stylesheet" type="text/css">
    {*font CSS*}
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"
          type="text/css">
    {*Plugin JS*}
    <script src="{$baseUrlJs}pluginsmodern.js" type="text/javascript"></script>
    {*Modern JS*}
    <script src="{$baseUrlJs}modern.js" type="text/javascript"></script>

</head>

<body>

{*preloader start*}
<div class="preloader">
    <div class="mainloader"></div>
</div>
{*preloader end*}

{*content start*}
<div id="boxintro">

    {*frame1 start*}
    <div id="frame1" data-frame="6000">
        <div class="opening">
            <div class="triangle-botright animfadeInRight" data-time="300"></div>
            <div class="triangle-topleft animfadeInLeft" data-time="0"></div>
        </div>
        <div class="contentintro">
            {*intro element*}
            {*line intro*}
            <div class="lineintro animrollIn" data-time="400">
                <div class="innerintro"></div>
            </div>
            {*line intro end*}

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
        {*intro element end*}

    </div>
    {*end frame1*}

</div>
{*intro end*}


{*background start*}
<div id="webbackground">
    <div id="homeSlider">
        <div class="bgmodern"><img alt="background" src="#"></div>
        <div class="bgmodern"><img alt="background" src="#"></div>
    </div>
    <div class="overlay-main"></div>
</div>
{*background end*}

{*website start*}
<div class="vertex-menu animfadeInRight" data-time="0"><a class="vertex-menu_tx">DOWNLOAD CV</a></div>
<div id="wrappermodern">
    {*Sidebar start*}
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

            {*footer end*}
            <div id="wrapfooter" class="opaci">
                <div id="soc-icon" class="animfadeInUpBig" data-time="1000">
                    <a class="glyph-icon flaticon-github10" href="https://github.com/tharlesamaro"></a>
                    <a class="glyph-icon flaticon-facebook25" href="#"></a>
                    <a class="glyph-icon flaticon-twitter16" href="#"></a>
                </div>
                <div id="footer" class="animfadeInUpBig" data-time="1100">©all rights reserved. tharles amaro 2018</div>
            </div>
            {*footer end*}
        </div>
        <div class="holdsidebar"></div>
    </div>
    {*sidebar end*}

    {*navigation mobile start*}
    <div class="anim-nav" id="nav-icon">
        <div class="menu-line"></div>
        <div class="menu-line1"></div>
        <div class="menu-line2"></div>
    </div>
    {*navigation mobile end*}
    <div class="seperator"></div>

    {*Page Content start*}
    <div id="page-content-wrappermodern">{*wrappermodern start*}
        <div class="container-fluid">{*container start*}
            <div class="row">{*row start*}
                {php}
                    Routes::getPage();
                {/php}
            </div>{*row end*}
        </div>{*container end*}
    </div>{*wrappermodern end*}
    {*page content end*}
</div>
{*end website*}

{*sound start*}
<div class="equalizer animfadeIn" data-time="0">
    <span class="equal-line equal-line-1 intro"></span>
    <span class="equal-line equal-line-2 intro"></span>
    <span class="equal-line equal-line-3 intro"></span>
    <span class="equal-line equal-line-4 intro"></span>
</div>
<audio id="playerintro" loop>
    <source src="soundintro/musicintro.mp3" type="audio/mpeg">
</audio>
{*sound end*}

</body>
</html>
