<?php namespace Views;
	
	session_start();


	$template = new template();

	class template{

		public function __construct(){
			ob_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Registro vendimia</title>
        <!-- Favicon-->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="<?=URL?>/VIEWS/resources/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="<?=URL?>/VIEWS/resources/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="<?=URL?>/VIEWS/resources/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="<?=URL?>/VIEWS/resources/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="<?=URL?>/VIEWS/resources/CSS/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="<?=URL?>/VIEWS/resources/CSS/themes/all-themes.css" rel="stylesheet" />
    </head>
    
    <body class="theme-teal">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Cargando espere...</p>
            </div>
        </div>
         <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
       
        <!-- #Top Bar -->
        <?php   

                include 'menu.php';
          
           
         ?>

		
    

	<?php
	}
	public function __destruct(){
	?>

    <!---MATERIAL LIBRARY-->
    <!-- Jquery Core Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/raphael/raphael.min.js"></script>
    <script src="<?=URL?>/VIEWS/resources/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="<?=URL?>/VIEWS/resources/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/flot-charts/jquery.flot.js"></script>
    <script src="<?=URL?>/VIEWS/resources/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="<?=URL?>/VIEWS/resources/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="<?=URL?>/VIEWS/resources/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="<?=URL?>/VIEWS/resources/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=URL?>/VIEWS/resources/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?=URL?>/VIEWS/resources/JS/admin.js"></script>
    <script src="<?=URL?>/VIEWS/resources/JS/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="<?=URL?>/VIEWS/resources/JS/demo.js"></script>
		
</div>
</body>
</html>

<?php	ob_end_flush();
		}
	}



?>