<?php
	session_start();
	$res = array($_SESSION['s'][0], $_SESSION['s'][1], $_SESSION['s'][2], $_SESSION['s'][3], $_SESSION['s'][4], $_SESSION['s'][5]);
	rsort($res);
	for($j = 0; $j < 5; $j++){
		$_SESSION['res'][$j] = false;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="license" content="Licensed under MIT License" />
    <title>Jeopardy UTCH</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">	
	<link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/assets/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="js/assets/moment.js"></script>
    <script type="text/javascript" src="js/assets/moment_langs.js"></script>
    <script type="text/javascript" src="js/modern/dropdown.js"></script>
    <script type="text/javascript" src="js/modern/accordion.js"></script>
    <script type="text/javascript" src="js/modern/buttonset.js"></script>
    <script type="text/javascript" src="js/modern/carousel.js"></script>
    <script type="text/javascript" src="js/modern/input-control.js"></script>
    <script type="text/javascript" src="js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="js/modern/rating.js"></script>
    <script type="text/javascript" src="js/modern/slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="js/modern/tile-drag.js"></script>
    <script type="text/javascript" src="js/modern/calendar.js"></script>
	<style>
		img.image{
			bottom: 5px; 
			right: 5px; 
			position: fixed; 
			height: 20%; 
			filter:alpha(opacity=40); 
			opacity:.4; 
			z-index: -100;
		}
	</style>	
</head>
<body class="metrouicss" style="z-index: 100;">
	<div class="page" style="z-index: 1;">
		<div class="nav-bar bg-color-darken">
			<div class="nav-bar-inner padding10">			
				<span class="pull-menu"></span>			
				<a href="./index.php">
					<span class="element brand"><img class="place-left" src="./images/favicon.png" style="height: 20px">Jeopardy UTCH</span>
				</a>
				<div class="divider"></div>
				<ul class="menu" style="display: none;">
					<li><a href="./home.php"><i class="icon-home"></i>Inicio</a></li>
					<li><a href="./close.php"><i class="icon-exit"></i>Terminar Juego</a></li>
				</ul>
			</div>
		</div>
	</div>
	<img class="image" src="./images/logo.png">
	
	<div class="page secondary">
		<div class="page-region">
            <div class="page-region-content">
                <div class="grid">
					<br>
                    <div class="row">
						<div class="span12" <?php if(isset($id) && isset($cat)) echo 'style="display:none"';?>>
							<center>
								<h1>Juego Terminado</h1><br>
								<table>
									<tr><td><h2><b>Lugar</b></h2><td><h2><b>Equipo</b></h2></td><td><h2><b>Score</b></h2></td></tr>
								<?php 
									for($i = 0; $i < $_SESSION['per']; $i++){
										echo '<tr>';
										echo '<td><h2>'.($i+1).'</h2></td>';
										$id = 0;
										for($j = 0; $j < 6; $j++){
											if($_SESSION['s'][$j] == $res[$i] && !$_SESSION['res'][$j]){
												$_SESSION['res'][$j] = true;
												$id = $j;
												break;
											}											
										}
										echo '<td><h2>'.$_SESSION['p'][$id].'</h2></td>';
										echo '<td><h2>'.$res[$i].'</h2></td>';
										echo '</tr>';
									}
								?>
								</table>
								<form action="close.php">
									<input type="submit" value="Terminar Partida" style="width:300px; height:75px; font-size: 30px;">
								</form>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <script type="text/javascript" LANGUAGE="JavaScript">
        $(".metro").metro();
		function handleEnter (field, event) {
			var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
			if (keyCode == 13) {
				var i;
				for (i = 0; i < field.form.elements.length; i++)
					if (field == field.form.elements[i])
						break;
				i = (i + 1) % field.form.elements.length;
				field.form.elements[i].focus();
				return false;
			} 
			else
			return true;
		}
    </script>
</body>
</html>