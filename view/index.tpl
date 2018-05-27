<!--
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
    <title>{$title}</title>
    <meta content="Sou {$name}. Acadêmico de Sistemas para Internet e iniciante em programação web." name="description">
    <meta content="{$name}" name="author">
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
                <img alt="background" src="{$baseUrlImg}avatar-color.png">
            </div>
            <div class="taglineintro animfadeInUpBig" data-time="900">EU SOU {$name}</div>
            <div id="introSlidertext" class="animfadeInUpBig" data-time="1200">
                {foreach from=$services item=service}
                    <h3>{$service}</h3>
                {/foreach}
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
        {for $foo=1 to {$backgroundTotal}}
            <div class="bgmodern"><img alt="background" src="{$baseUrlImg}background/{$foo}.jpg"></div>
        {/for}
    </div>
    <div class="overlay-main"></div>
</div>
{*background end*}

{*website start*}
<div class="vertex-menu animfadeInRight" data-time="0">
    <a href="{$baseUrlDoc}tharlesamaro.pdf" download="curriculo_tharlesamaro.pdf" class="vertex-menu_tx">DOWNLOAD CV</a>
</div>
<div id="wrappermodern">
    {*Sidebar start*}
    <div id="sidebar-wrappermodern">
        <div class="sidebar-nav">

            <div class="talent animfadeInUpBig" data-time="0">
                <img alt="background" src="{$baseUrlImg}avatar.png">
            </div>
            <h2 class="animfadeInUpBig" data-time="300">{$name}</h2>
            <p class="modern-color animfadeInUpBig" data-time="600">{$subtitle}</p>

            <ul>
                <li class="animfadeInUpBig" data-time="700"><a class="active" id="home-btn">INÍCIO</a></li>
                <li class="animfadeInUpBig" data-time="750"><a id="about-btn">SOBRE</a></li>
                <li class="animfadeInUpBig" data-time="800"><a id="resume-btn">RESUMO</a></li>
                <li class="animfadeInUpBig" data-time="850"><a id="skill-btn">HABILIDADES</a></li>
                <li class="animfadeInUpBig" data-time="900"><a id="porto-btn">PORTFOLIO</a></li>
                <li class="animfadeInUpBig" data-time="950"><a id="contact-btn">CONTATO</a></li>
            </ul>

            {*footer end*}
            <div id="wrapfooter" class="opaci">
                <div id="soc-icon" class="animfadeInUpBig" data-time="1000">
                    <a class="glyph-icon flaticon-github10" href="{$github}" target="_blank"
                       rel="noopener"></a>
                    <a class="glyph-icon flaticon-facebook25" href="{$facebook}"
                       target="_blank" rel="noopener"></a>
                </div>
                <div id="footer" class="animfadeInUpBig" data-time="1100">©all rights
                    reserved. {$name} {$currentYear}</div>
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

                {*home start*}
                <div id="home" class="mainpage current">
                    <div class="contenthome v-align">
                        <div class="col-md-12">
                            <div class="nameslide animfadeInUpBig" data-time="1300">EU SOU {strtoupper({$name})}</div>
                            <div id="homeSlidertext" class="animfadeInUpBig" data-time="1700">
                                {foreach from=$detailedServices item=service}
                                    <h3>{$service}</h3>
                                {/foreach}
                            </div>

                            {*line start*}
                            <div id="subwrap" class="animfadeInUpBig" data-time="2000">
                                <hr class="subscribfield subscribeemail" disabled>
                                <button class="modernbuttonSub button" type="button" disabled>Serviços
                                </button>
                            </div>
                            {*line end*}
                        </div>
                    </div>
                </div>
                {*home end*}

                {*about start*}
                <div id="about" class="commonpage">
                    <div class="overlay-modern"></div>
                    <div class="contentpage">

                        <div class="col-lg-12 spacedown">
                            <h4 class="animfadeInUpBig" data-time="600">Saiba um pouco</h4>
                            <h1 class="animfadeInUpBig" data-time="900">SOBRE MIM</h1>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1200"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/male-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1000">
                                <strong>Nome :</strong><br/> {$name}
                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1300"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/cal-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1200">
                                <strong> Idade :</strong><br/> {$currentAge}
                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1400"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/home-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1300">
                                <strong>Localização :</strong><br/>{$location}
                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1500"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/telegram-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1400">
                                <strong> Telegram :</strong><br/><a href="https://t.me/tharles" target="_blank"
                                                                    rel="noopener"> {$telegram}</a>
                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1600"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/email-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1500">
                                <strong>Email :</strong><br/> {$email}
                            </p>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="modernicon icon animfadeInUpBig" data-time="1700"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/globe-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1600">
                                <strong> Nacionalidade :</strong><br/> {$nationality}
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
                                <img alt="sign" class="imgcontentsvg" src="{$baseUrlImg}sign.svg"/>
                            </p>
                        </div>

                    </div>
                </div>
                {*about end*}

                {*resume start*}
                <div id="resume" class="commonpage">
                    <div class="overlay-modern"></div>
                    <div class="contentpage">

                        <div class="col-lg-12 spacedown">
                            <h4 class="animfadeInUpBig" data-time="600">Experiência Profissional</h4>
                            <h1 class="animfadeInUpBig" data-time="900">RESUMO</h1>
                        </div>

                        <div class="col-md-4">
                            <div class="modernicon icon animfadeInUpBig" data-time="1200"><img alt="background"
                                                                                               src="{$baseUrlImg}icon/mag-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1000">
                                <strong>{strtoupper('1º OFÍCIO DE IMÓVEIS')} <br/>2016 - 2017</strong>
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
                                                                                               src="{$baseUrlImg}icon/cult-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1300">
                                <strong>{strtoupper('NÚCLEO TECNOLOGIA')} <br/> 2014 - 2015</strong>
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
                                                                                               src="{$baseUrlImg}icon/bus-icon.png">
                            </div>
                            <p class="animfadeInUpBig" data-time="1500">
                                <strong>{strtoupper('VIAÇÃO DRAGÃO DO MAR')} <br/>2011 - 2013</strong>
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

                        {*testimoni start*}
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
                            {*testimoni end*}

                        </div>
                    </div>
                    {*resume end*}

                    {*skill start*}
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

                            {*client brands start*}
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
                            {*client brands end*}

                        </div>
                    </div>
                    {*skill end*}

                    {*portofolio start*}
                    <div id="portofolio" class="commonpage">
                        <div class="overlay-modern"></div>
                        <div class="contentpage">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-12 spacedown spaceup">
                                        <h4 class="animfadeInUpBig" data-time="600">Meu Portofolio</h4>
                                        <h1 class="animfadeInUpBig" data-time="900">Projetos by Tharles Amaro</h1>
                                    </div>

                                    {*start gallery*}
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
                                    {*gallery end*}

                                </div>
                            </div>
                            {*gallery end*}
                        </div>
                    </div>
                    {*portofolio end*}

                    {*contact start*}
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
                            </div>{*contact form end*}

                        </div>
                    </div>{*contact end*}


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
        <source src="#" type="audio/mpeg">
    </audio>
    {*sound end*}

</body>
</html>
