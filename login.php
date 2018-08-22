<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="VIEWS/resources/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="VIEWS/resources/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="VIEWS/resources/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="VIEWS/resources/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="VIEWS/resources/CSS/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="VIEWS/resources/CSS/themes/all-themes.css" rel="stylesheet" />
    
	<style type="text/css">
	body{
		background: #00796b;
	}
	.login-card-user{
		width: 100%;
		max-width: 390px;
		position: absolute;
		top: 19%;
		left: 50%;
        margin-left: -210px;
        box-shadow: 0px 0px 5px 1px #f2f7f5;
    }
    .login-card-user:hover{
        box-shadow: 1px -1px 7px 2px #f2f7f5;
    }
	</style>
</head>
<body>
	<div class="card login-card-user">
        <div class="header">
            <h2 class="text-upprcase text-center">
               Sistema de Registro de Invitados
            </h2>
        </div>
        <div class="body">
            <form onsubmit="login(event,this)">
                <label for="name">Email:</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="email" id="name" name="email" class="form-control" placeholder="Usuario" required>
                    </div>
                </div>
                <label for="password">Contraseña:</label>
                <div class="form-group">
                    <div class="form-line">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
                    </div>
                </div>

                <input type="checkbox" id="remember_me" class="filled-in">
                <!-- <label for="remember_me">Remember Me</label> -->
                <br>
                <button type="submit" class="btn btn-primary btn-block m-t-15 waves-effect">Entrar</button>
            </form>
        </div>
    </div>
    <script src="VIEWS/resources/plugins/jquery/jquery.min.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="VIEWS/resources/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="VIEWS/resources/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="VIEWS/resources/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="VIEWS/resources/plugins/raphael/raphael.min.js"></script>
    <script src="VIEWS/resources/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="VIEWS/resources/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="VIEWS/resources/plugins/flot-charts/jquery.flot.js"></script>
    <script src="VIEWS/resources/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="VIEWS/resources/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="VIEWS/resources/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="VIEWS/resources/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="VIEWS/resources/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="VIEWS/resources/JS/admin.js"></script>
    <script src="VIEWS/resources/JS/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="VIEWS/resources/JS/demo.js"></script>
    <script type="text/javascript" src="VIEWS/resources/JS/user.js"></script>
</body>
</html>