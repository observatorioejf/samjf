<?php
//include de sessão.
include	("include/validacao.php");
?>
<!-- imprime o login -->
<h1><?php echo $_SESSION['UsuarioID'];  ?></h1>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keyword" content="karlitus.gomes">

    <title>Acompanhamento da Meta 8</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">

      <!--right slidebar-->
      <link href="css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	
	<!-- SCROLL -->
	
	<script src="js/jquery.nicescroll.js" type="text/javascript"></script>	
	<script type = "text/javascript">
	$(document).ready(function() { 
		$("html").niceScroll({cursorwidth: '10px', autohidemode: true, zindex: 999 });
		$("iframe").niceScroll({cursorwidth: '10px', autohidemode: true, zindex: 999 });
		$(".scrollable").niceScroll({cursorwidth: '10px', autohidemode: true, zindex: 999 });
		//$(".codecolorer-container").niceScroll({cursorwidth: '10px', autohidemode: false, zindex: 999 });
	});
	</script>



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
	
   	<!--[if IE]>
	<style>*{display:none;}</style>
	<meta HTTP-EQUIV="REFRESH" content="0; url=erro.html">
	<![endif]-->
	
  </head>

  <body>

  <section id="container" >
    
	  
    
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
			  
			  <div class="row">
                    <div class="col-lg-10">
                      <section class="panel">
                        <div class="panel-body">
			         
			  <h3><b>Acompanhamento da Meta 8</b></h3>
			  
							</div>
                      </section>
                  </div>
				</div>
			  
			  
			  <div class="row">
                    <div class="col-lg-10">
                      <section class="panel">
                        <div class="panel-body">
						
			
						
			  <i class="fa fa-check-square-o fa-2x"></i> <font size="3"><a href="periodicidade_1_m8_2016.php"><b>Crimes contra a Administração</b></a></font><br><br>
			  <i class="fa fa-check-square-o fa-2x"></i> <font size="3"><a href="periodicidade_2_m8_2016.php"><b>Trabalho escravo, exploração sexual e tráfico de pessoas</b></a></font><br><br>
			  <!--<i class="fa fa-check-square-o fa-2x"></i> <font size="3"><a href="samjf_m8_particular.php"><b>Crimes praticados por particular contra a administração em Geral</b></a></font><br><br>
			  <i class="fa fa-check-square-o fa-2x"></i> <font size="3"><a href="samjf_m8_escravo.php"><b>Redução à condição análoga à de escravo</b></a></font><br><br>
			  <i class="fa fa-check-square-o fa-2x"></i> <font size="3"><a href="samjf_m8_exploracao.php"><b>Exploração sexual</b></a></font><br><br>
			  <i class="fa fa-check-square-o fa-2x"></i> <font size="3"><a href="samjf_m8_trafico.php"><b>Tráfico de pessoas</b></a></font><br><br>-->
			 
			  
						</div>
                      </section>
                  </div>
              </div>
			<!-- page end-->
          </section>
      </section>

      
	  
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  
<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64321489-1', 'auto');
  ga('send', 'pageview');

</script>-->

  </body>
</html>
