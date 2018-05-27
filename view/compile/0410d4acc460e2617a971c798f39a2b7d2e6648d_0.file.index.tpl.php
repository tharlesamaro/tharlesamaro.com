<?php
/* Smarty version 3.1.32, created on 2018-05-27 18:25:39
  from '/var/www/html/tharlesamaro.com/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0b2253e823b7_67087909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0410d4acc460e2617a971c798f39a2b7d2e6648d' => 
    array (
      0 => '/var/www/html/tharlesamaro.com/view/index.tpl',
      1 => 1527456337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0b2253e823b7_67087909 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
___________.__                 .__                     _____
\__    ___/|  |__ _____ _______|  |   ____   ______   /  _  \   _____ _____ _______  ____
  |    |   |  |  \\__  \\_  __ \  | _/ __ \ /  ___/  /  /_\  \ /     \\__  \\_  __ \/  _ \
  |    |   |   Y  \/ __ \|  | \/  |_\  ___/ \___ \  /    |    \  Y Y  \/ __ \|  | \(  <_> )
  |____|   |___|  (____  /__|  |____/\___  >____  > \____|__  /__|_|  (____  /__|   \____/
                \/     \/                \/     \/          \/      \/     \/

            ###################################################################
            ###                                                             ###
            ###            NÃO PERCA TEMPO COPIANDO ESSE SITE.              ###
            ###         O CÓDIGO FONTE ESTÁ DISPONÍVEL NO GITHUB.           ###
            ###                                                             ###
            ###  GITHUB: https://github.com/tharlesamaro/tharlesamaro.com   ###
            ###                                                             ###
            ###################################################################

-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta content="Sou <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
. Acadêmico de Sistemas para Internet e iniciante em programação web." name="description">
    <meta content="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="author">
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
                <img alt="background" src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
avatar-color.png">
            </div>
            <div class="taglineintro animfadeInUpBig" data-time="900">EU SOU <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</div>
            <div id="introSlidertext" class="animfadeInUpBig" data-time="1200">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
                    <h3><?php echo $_smarty_tpl->tpl_vars['service']->value;?>
</h3>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        
    </div>
    
</div>

<div id="webbackground">
    <div id="homeSlider">
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['backgroundTotal']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_prefixVariable1+1 - (1) : 1-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
            <div class="bgmodern"><img alt="background" src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
background/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
.jpg"></div>
        <?php }
}
?>
    </div>
    <div class="overlay-main"></div>
</div>

<div class="vertex-menu animfadeInRight" data-time="0">
    <a href="<?php echo $_smarty_tpl->tpl_vars['baseUrlDoc']->value;?>
tharlesamaro.pdf" download="curriculo_tharlesamaro.pdf" class="vertex-menu_tx">DOWNLOAD CV</a>
</div>
<div id="wrappermodern">
        <div id="sidebar-wrappermodern">
        <div class="sidebar-nav">

            <div class="talent animfadeInUpBig" data-time="0">
                <img alt="background" src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
avatar.png">
            </div>
            <h2 class="animfadeInUpBig" data-time="300"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>
            <p class="modern-color animfadeInUpBig" data-time="600"><?php echo $_smarty_tpl->tpl_vars['subtitle']->value;?>
</p>

            <ul>
                <li class="animfadeInUpBig" data-time="700"><a class="active" id="home-btn">INÍCIO</a></li>
                <li class="animfadeInUpBig" data-time="750"><a id="about-btn">SOBRE</a></li>
                <li class="animfadeInUpBig" data-time="800"><a id="resume-btn">RESUMO</a></li>
                <li class="animfadeInUpBig" data-time="850"><a id="skill-btn">HABILIDADES</a></li>
                <li class="animfadeInUpBig" data-time="900"><a id="porto-btn">PORTFOLIO</a></li>
                <li class="animfadeInUpBig" data-time="950"><a id="contact-btn">CONTATO</a></li>
            </ul>

                        <div id="wrapfooter" class="opaci">
                <div id="soc-icon" class="animfadeInUpBig" data-time="1000">
                    <a class="glyph-icon flaticon-github10" href="<?php echo $_smarty_tpl->tpl_vars['github']->value;?>
" target="_blank"
                       rel="noopener"></a>
                    <a class="glyph-icon flaticon-facebook25" href="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
"
                       target="_blank" rel="noopener"></a>
                </div>
                <div id="footer" class="animfadeInUpBig" data-time="1100">©all rights
                    reserved. <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['currentYear']->value;?>
</div>
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

        <div id="page-content-wrappermodern">        <div class="container-fluid">            <div class="row">
                                <div id="home" class="mainpage current">
                    <div class="contenthome v-align">
                        <div class="col-md-12">
                            <div class="nameslide animfadeInUpBig" data-time="1300">EU SOU <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable2 = ob_get_clean();
echo strtoupper($_prefixVariable2);?>
</div>
                            <div id="homeSlidertext" class="animfadeInUpBig" data-time="1700">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detailedServices']->value, 'service');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
?>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['service']->value;?>
</h3>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>

                                                        <div id="subwrap" class="animfadeInUpBig" data-time="2000">
                                <hr class="subscribfield subscribeemail" disabled>
                                <button class="modernbuttonSub button" type="button" disabled>Serviços
                                </button>
                            </div>
                                                    </div>
                    </div>
                </div>
                
                                <div id="about" class="commonpage">
                    <div class="overlay-modern"></div>
                    <div class="contentpage">

                        <div class="col-lg-12 spacedown">
                            <h4 class="animfadeInUpBig" data-time="600">Saiba um pouco</h4>
                            <h1 class="animfadeInUpBig" data-time="900">SOBRE MIM</h1>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1200"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/male-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1000">
                                <strong>Nome :</strong><br/> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1300"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/cal-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1200">
                                <strong> Idade :</strong><br/> <?php echo $_smarty_tpl->tpl_vars['currentAge']->value;?>

                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1400"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/home-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1300">
                                <strong>Localização :</strong><br/><?php echo $_smarty_tpl->tpl_vars['location']->value;?>

                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1500"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/telegram-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1400">
                                <strong> Telegram :</strong><br/><a href="https://t.me/tharles" target="_blank"
                                                                    rel="noopener"> <?php echo $_smarty_tpl->tpl_vars['telegram']->value;?>
</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1600"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/email-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1500">
                                <strong>Email :</strong><br/> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1700"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/globe-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1600">
                                <strong> Nacionalidade :</strong><br/> <?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>

                            </p>
                        </div>

                        <div class="col-lg-12 col-xs-12 spaceup spacedown">
                            <p class="animfadeInUpBig" data-time="1900">
                                Sou acadêmico de Sistemas para Internet na Faculdade Integrada da Grande Fortaleza(FGF).
                                Atualmente estou a procura de uma oportunidade para iniciar minha carreira como
                                desenvolvedor. Embora não tenha muita experiência, venho estudando e tenho muita boa
                                vontade em aprender. Sou muito motivado para encarar novos desafios e aprender novas
                                tecnologias.
                                <br/><br/>
                                <img alt="sign" class="imgcontentsvg" src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
sign.svg"/>
                            </p>
                        </div>

                    </div>
                </div>
                
                                <div id="resume" class="commonpage">
                    <div class="overlay-modern"></div>
                    <div class="contentpage">

                        <div class="col-lg-12 spacedown">
                            <h4 class="animfadeInUpBig" data-time="600">Experiência Profissional</h4>
                            <h1 class="animfadeInUpBig" data-time="900">RESUMO</h1>
                        </div>

                        <div class="col-md-4">
                            <div class="modernicon icon animfadeInUpBig" data-time="1200"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/mag-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1000">
                                <strong><?php echo strtoupper('1º OFÍCIO DE IMÓVEIS');?>
 <br/>2016 - 2017</strong>
                            </p>
                        </div>

                        <div class="modern-timeline-centered col-md-7 animfadeInUpBig" data-time="1300">
                            <div class="modern-timeline-entry">
                                <div class="modern-timeline-entry-inner">
                                    <div class="modern-timeline-icon"></div>
                                    <div class="modern-timeline-label animfadeInUpBig" data-time="1300">
                                        <h5 class="animfadeInUpBig" data-time="1300">Estagiário</h5>
                                        <p class="animfadeInUpBig" data-time="1400">Configuração e instalação de
                                            Hardware | Configuração e instalação de Software | GLPI | Manutenção a
                                            microcomputadores | OCSNG | Servidores Linux | Sistemas operacionais</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="modernicon icon animfadeInUpBig" data-time="1400"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/cult-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1300">
                                <strong><?php echo strtoupper('NÚCLEO TECNOLOGIA');?>
 <br/> 2014 - 2015</strong>
                            </p>
                        </div>

                        <div class="modern-timeline-centered col-md-7 animfadeInUpBig" data-time="1500">
                            <div class="modern-timeline-entry">
                                <div class="modern-timeline-entry-inner">
                                    <div class="modern-timeline-icon"></div>
                                    <div class="modern-timeline-label animfadeInUpBig" data-time="1500">
                                        <h5 class="animfadeInUpBig" data-time="1500">Suporte Técnico</h5>
                                        <p class="animfadeInUpBig" data-time="1500">Bácula | Firewall | GLPI |
                                            Manutenção
                                            preventiva | Manutenção corretiva | OCSNG | Proxy | Redes de computadores |
                                            Servidores Linux | Windows Server 2008 | Zentyal Server</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="modernicon icon animfadeInUpBig" data-time="1600"><img alt="background"
                                                                                               src="<?php echo $_smarty_tpl->tpl_vars['baseUrlImg']->value;?>
icon/bus-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1500">
                                <strong><?php echo strtoupper('VIAÇÃO DRAGÃO DO MAR');?>
 <br/>2011 - 2013</strong>
                            </p>
                        </div>

                        <div class="modern-timeline-centered col-md-7 animfadeInUpBig" data-time="1600">
                            <div class="modern-timeline-entry">
                                <div class="modern-timeline-entry-inner">
                                    <div class="modern-timeline-icon"></div>
                                    <div class="modern-timeline-label animfadeInUpBig" data-time="1700">
                                        <h5 class="animfadeInUpBig" data-time="1700">Auxiliar de Informática</h5>
                                        <p class="animfadeInUpBig" data-time="1800">Auxilio nas atividades
                                            administrativas do setor de informática | Instalação
                                            e configuração de Hardware e Software | Manutenção preventiva e corretiva a
                                            microcomputadores | Redes de computadores | Suporte a impressoras</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div id="owl-testimonial" class="owl-carousel animfadeInUpBig spacedown" data-time="2000">
                            <div class="item col-md-12">
                                <blockquote>
                                    <h3>Cláudio Henrique</h3>
                                    <p>Passamos a contactar o referido Tharles para a manutenção dos computadores em
                                        nossa empresa e tudo foi feito com grande êxito.
                                        Supriu nossas necessidades. Obrigado mais uma vez.</p>
                                    <small>Auxiliar de Escritório na <cite title="Source Title">Carvalho & Queiroz
                                            Advogados Associados</cite></small>
                                </blockquote>
                            </div>
                            
                        </div>
                    </div>
                    
                                        <div id="skill" class="commonpage">
                        <div class="overlay-modern"></div>
                        <div class="contentpage">

                            <div class="col-lg-12 spacedown">
                                <h4 class="animfadeInUpBig" data-time="600">Iam Good at</h4>
                                <h1 class="animfadeInUpBig" data-time="900">MY SKILL</h1>
                            </div>

                            <div class="col-md-6 spacedown">
                                <p class="animfadeInUpBig" data-time="1200">My Professional Strengths</p><br/>
                                <p class="animfadeInUpBig" data-time="1400"><strong>"The strength of a man's virtue
                                        should
                                        not be <br/>measured by his special exertions, <br/>but by his habitual
                                        acts"</strong></p><br/>
                                <p class="animfadeInUpBig" data-time="1600">My Professional Strengths Lorem ipsum dolor
                                    sit
                                    amet, consectetur adipisicing elit. Debitis velit error culpa unde, esse quam quasi,
                                    necessitatibus voluptatem possimus, repellendus.<br/><br/>

                                    The other virtues practice in succession by Franklin were silence, order,
                                    resolution,
                                    frugality, industry, sincerity, Justice, moderation, cleanliness, tranquility,
                                    chastity
                                    and humility. For the summary order he followed a little scheme of employing his
                                    time
                                    each day. From five to seven each morning he spent in bodily personal attention,
                                    saying
                                    a short prayer, thinking over the day’s business and resolutions, studying and
                                    eating
                                    breakfast. From eight till twelve he worked at his trade.<br/><br/>From twelve to
                                    one he
                                    read or overlooked his accounts and dined.
                                    From two to five he worked at his trade. The rest of the evening until 10 he spent
                                    in
                                    music, or diversion of some sort. </p>
                            </div>

                            <div class="col-md-6 spaceup">
                                <div class="content-skill">
                                    <div class="col-skill">
                                        <ul id="listskill">
                                            <li><span class="expand photograhy"><em
                                                            class="perc">97%</em></span><em><strong>Industrial</strong></em>
                                            </li>
                                            <li><span class="expand photoshop"><em
                                                            class="perc">70%</em></span><em><strong>Photoshop</strong></em>
                                            </li>
                                            <li><span class="expand potrait"><em
                                                            class="perc">85%</em></span><em><strong>Potraits</strong></em>
                                            </li>
                                            <li><span class="expand editorial"><em
                                                            class="perc">78%</em></span><em><strong>Editorial</strong></em>
                                            </li>
                                            <li><span class="expand frontend"><em
                                                            class="perc">85%</em></span><em><strong>FrontEnd</strong></em>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                                                        <div id="owl-modern" class="owl-carousel animfadeInUpBig spacedown" data-time="2000">
                                <div class="item"><img alt="background" src="img/ourclients/1.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/2.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/3.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/4.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/5.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/6.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/7.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/8.png"></div>
                                <div class="item"><img alt="background" src="img/ourclients/9.png"></div>
                            </div>
                            
                        </div>
                    </div>
                    
                                        <div id="portofolio" class="commonpage">
                        <div class="overlay-modern"></div>
                        <div class="contentpage">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-12 spacedown spaceup">
                                        <h4 class="animfadeInUpBig" data-time="600">Meu Portofolio</h4>
                                        <h1 class="animfadeInUpBig" data-time="900">Projetos by Tharles Amaro</h1>
                                    </div>

                                                                        <div class="no-gutter animfadeInUpBig" data-time="1500" id="projects-wrap">

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img1.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img1.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img2.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img2.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img3.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img3.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img4.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img4.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img5.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img5.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img6.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img6.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img1.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img1.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img2.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img2.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img3.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img3.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img4.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img4.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img5.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img5.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="projects big-img">
                                                <a href="img/projects/big/img6.jpg">
                                                    <div class="hovereffect">
                                                        <img alt="imageportofolio" class="img-responsive"
                                                             src="img/projects/img6.jpg">
                                                        <div class="overlay"><h3>more detail</h3></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>
                            </div>
                                                    </div>
                    </div>
                    
                                        <div id="contact" class="commonpage">
                        <div class="overlay-modern"></div>
                        <div class="contentpage">

                            <div class="col-md-5 col-xs-12 spacedown">
                                <h2 class="animfadeInUpBig" data-time="300">LOCALIZAÇÃO</h2>
                                <p class="animfadeInUpBig" data-time="600">Fortaleza, CE</p>
                            </div>

                            <div class="col-md-3 col-xs-12 spacedown">
                                <h2 class="animfadeInUpBig" data-time="900">TELEGRAM</h2>
                                <p class="animfadeInUpBig" data-time="1200">@tharles</p>
                            </div>

                            <div class="col-md-4 col-xs-12 spacedown">
                                <h2 class="animfadeInUpBig" data-time="1500">EMAIL</h2>
                                <p class="animfadeInUpBig" data-time="1800">contato@tharlesamaro.com</p>
                            </div>

                            <!-- contact form -->
                            <div class="col-md-12 col-xs-12 spaceup">
                                <div class="form-group contact animfadeInUpBig" data-time="2200">
                                    <form action="#" class="row" id="form1" method=
                                    "post" name="form1">
                                        <input id="name" name="name" placeholder="your name" type="text"> <input
                                                id="email"
                                                name="email"
                                                placeholder="your e-mail"
                                                type="text">
                                        <div class="error" id="error_email">Please check your email</div>
                                        <textarea cols="50" id="message" name=
                                        "message" placeholder="your enquiry" rows=
                                                  "4"></textarea>
                                        <div class="error" id="error_message">Please check your message</div>
                                        <div class="success" id="mail_success">Thank you. Your message has been sent.
                                        </div>
                                        <div class="error" id="mail_failed">Error, email not sent</div>
                                        <a class="modernbutton button spaceup animfadeInUpBig" data-time="2000"
                                           id="send">ENVIAR</a>
                                        <a class="modernbutton button spaceup animfadeInUpBig" data-time="2300">DOWNLOAD
                                            MY
                                            CV</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>            </div>        </div>            </div>
    
        <div class="equalizer animfadeIn" data-time="0">
        <span class="equal-line equal-line-1 intro"></span>
        <span class="equal-line equal-line-2 intro"></span>
        <span class="equal-line equal-line-3 intro"></span>
        <span class="equal-line equal-line-4 intro"></span>
    </div>
    <audio id="playerintro" loop>
        <source src="#" type="audio/mpeg">
    </audio>
    
</body>
</html>
<?php }
}
