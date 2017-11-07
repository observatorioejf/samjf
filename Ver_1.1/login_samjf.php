<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="samoe.png" type="image/png">

    <title>SAMJF - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../../../assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="../../../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="../../../css/owl.carousel.css" type="text/css">

    <!--right slidebar-->
    <link href="../../../css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../../../css/style-responsive.css" rel="stylesheet"/>

    <link href="../../../css/indexObservatorio.css" rel="stylesheet"/>
    <link href="../../../css/fixed_navbar.css" rel="stylesheet"/>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->

    <!--[if IE]>
    <style>* {
        display: none;
    }</style>
    <meta HTTP-EQUIV="REFRESH" content="0; url=erro.php">
    <![endif]-->

</head>

<body class="full-width">

<div class="div-black"></div>

<section class="custom-section">

    <!-- Header -->

    <header class="header white-bg header-frontend" style="margin-left: 1%; margin-right: 1%; margin-top: 20px; min-height: 70px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars"></span>
            </button>

            <!--logo start-->
            <a href="../../../index.php" class="logo" ><img src="../../../img/logoJF.gif" width="55%" height="55px" style="margin-top: -3%; margin-left: 35%"></a>
            <!--logo end-->
            <div class="horizontal-menu navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="" id="inicio"><a href="../../../index.php">Início</a></li>

                    <li id="sobre"><a href="http://www.cjf.jus.br/observatorio2/sobre-2">Sobre</a></li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="http://10.8.30.70/observatorio2/temas/">Temas <b class=" fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li id="estrategia"><a href="http://www.cjf.jus.br/observatorio2/estrategia/">Estratégia</a></li>
                            <li id="governanca"><a href="http://www.cjf.jus.br/observatorio2/governanca/">Governança</a></li>
                            <li id="inovacao"><a href="http://www.cjf.jus.br/observatorio2/inicio">Inovação</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Painéis <b class=" fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li id="paineljf"><a href="../../../index.php">Painel JF</a></li>
                            <li id="painelcjf"><a href="../../../index_visaocjf.php">Painel CJF</a></li>
                            <li id="estudos-e-analises"><a href="http://www.cjf.jus.br/observatorio2/estudos-e-analises/">Estudos e análises</a></li>
                        </ul>
                    </li>

                    <li id="sistemas"><a href="../../../login.php">Sistemas</a></li>

                    <li class="" id="contatos"><a href="http://www.cjf.jus.br/observatorio2/contatos/">Contatos</a></li>
                    <li class="" id="normas"><a href="http://www.cjf.jus.br/observatorio2/normas/">Normas</a></li>
                    <li class="" id="eventos"><a href="http://www.cjf.jus.br/observatorio2/eventos/">Eventos</a></li>

                </ul>
            </div>


            <div class="top-nav ">
                <ul class="nav pull-right top-menu" style="margin-top: 6px;">

                    <li class="dropdown">
                        <a href="../../../login.php" class="dropdown-toggle"><span class="username">Login</span><b class="caret"></b></a>
                    </li>

                </ul>
            </div>

        </div>

    </header>

    <!-- End header -->

    <section id="container">

        <!--main content start-->
        <div class="container">
            <br><br><br><br><br>

      <form class="form-signin" action="controle.php" method="post" style="margin-top: 200px;">
        <h2 class="form-signin-heading">SAMJF</h2>
        <div class="login-wrap">
            <input type="text" name="login" value="" class="form-control" placeholder="Usuario" autofocus>
            <input type="password" name="senha" value="" class="form-control" placeholder="Senha">
            <label class="checkbox">
                
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit" name="enviar" value="login">Entrar</button>


        </div>

          <footer>Versão 1.1</footer>

      </form>

        </div>


        <!--footer start-->
        <footer class="site-footer" style="margin-top: 20%">
            <div class="text-center">
                <font color="ffffff">2015 &copy; Conselho de Justiça Federal - Secretaria de Estratégia e Governança -
                    observatorio@cjf.jus.br</font>
                <a href="#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../../../js/jquery.dcjqaccordion.2.7.js"></script>
    <script type="text/javascript" src="../../../js/hover-dropdown.js"></script>
    <script src="../../../js/jquery.scrollTo.min.js"></script>
    <script src="../../../js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../../../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../../../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../../../js/owl.carousel.js"></script>
    <script src="../../../js/jquery.customSelect.min.js"></script>
    <script src="../../../js/respond.min.js"></script>

    <!--right slidebar-->
    <script src="../../../js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="../../../js/common-scripts2.js"></script>

    <!--script for this page-->
    <script src="../../../js/sparkline-chart.js"></script>
    <script src="../../../js/easy-pie-chart.js"></script>
    <script src="../../../js/count.js"></script>

    <script>
        //Add class active on li
        $("#sistemas").addClass('active');
    </script>

    <script>

        //owl carousel

        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true

            });
        });

        //custom select box

        $(function () {
            $('select.styled').customSelect();
        });

    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-64321489-1', 'auto');
        ga('send', 'pageview');

    </script>
</section>
</body>
</html>
