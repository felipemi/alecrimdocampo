<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Alecrim do Campo</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/jcarousel.responsive.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/jquery-ui.css">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <script src="js/jquery-1.7.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.carousel.min.js"></script>
        <script src="js/jcarousel.responsive.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/tms-0.4.1.js"></script>
        <script language="javascript" type="text/javascript">
            $(document).ready(function() {
                $('.slider')._TMS({
                    show: 0,
                    pauseOnHover: true,
                    prevBu: '.prev',
                    nextBu: '.next',
                    playBu: false,
                    duration: 10000,
                    preset: 'zoomer',
                    pagination: false,
                    pagNums: false,
                    slideshow: 700000,
                    numStatus: false,
                    banners: false,
                    waitBannerAnimation: true,
                    progressBar: false
                })
            });
        </script>
        <script language="javascript" type="text/javascript">
            $(function() {
                $("#accordion").accordion();
            });
        </script>
        <script language="javascript" type="text/javascript">
       $(function() {
       $("#tabs").tabs();
       $("#tabs1").tabs();
       $("#tabs2").tabs();
       });
       </script>
        <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
        <!--[if lt IE 9]>
                    <script type="text/javascript" src="js/html5.js"></script>
            <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
            <![endif]-->
    </head>
    <body>
        <div class="main">
            <header>                   	
                <nav>  
                    <ul class="menu">
                        <li class="current">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="sobre.php">Sobre</a>
                        </li>
                        <li>
                            <a title="Serviços" style="cursor: pointer;">Nossos Serviços</a>
                            <ul class="submenu">
                                <li><a href="chas.php" title="Chás">Chás</a></li>
                                <li><a href="proteinas.php" title="Proteínas">Proteínas</a></li>
                                <li><a href="cereais.php" title="Cereais">Cereais</a></li>
                                <li><a href="encapsulados.php" title="Encapsulados">Encapsulados</a></li>
                            </ul>
                        </li>
                        <li>
                            <li><a href="medicina-natural.php" title="Medicina Natural">Medicina Natural</a></li>
                        </li>
                        <li class="last">
                            <a href="contato.php">Contato</a>
                        </li>
                    </ul>
                </nav>
                <h1><a href="index.php" title="Alecrim do Campo. Página Inicial">Alecrim do Campo</a></h1> 
                <div class="slogan">Produtos Naturais, Chás, Ervas Diversas, <span>Fitoterápicas, Cereais, Encapsulados e Outros</span></div>
            </header>  
            <div id="slide">
                <div class="slider">
                    <ul class="items">
                        <li><img src="images/slide-1.jpg" alt="Slider Alecrim do Campo"/></li>
                        <li><img src="images/slide-2.jpg" alt="Slider Alecrim do Campo" /></li>
                        <li><img src="images/slide-3.jpg" alt="Slider Alecrim do Campo" /></li>
                        <li><img src="images/slide-4.jpg" alt="Slider Alecrim do Campo" /></li>
                    </ul>
                </div>
                <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
            </div>