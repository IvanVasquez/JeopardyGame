<?php
	session_start();
	if (!isset($_SESSION['per'])) {
        header("Location: ./");
    }
	header("Content-Type: text/html;charset=utf-8");
	$end = true;
	for($i = 0; $i < 5; $i++){
		for($j = 0; $j < 5; $j++){
			if($_SESSION['b'][$i][$j]){
				$end = false;
				break;
			}			
		}
	}
	if($end)
		header("Location: ./GameOver.php");
	
	if(isset($_GET['return'])){
		for($i = 0; $i < 6; $i++){
			$_SESSION['res'][$i] = false;
			header("Location: ./home.php");
		}
	}
	if(isset($_GET['id'])){
		$id = $_GET['id'] -1;
		$cat = $_GET['cat'] - 1;
		if(isset($_GET['r'])){
			$r = $_GET['r'];
			if($r >= 0){
				$suma = ($id + 1) * 100;
				$_SESSION['s'][$r] += + $suma;
				$_SESSION['res'][$r] = true;
				header("Location: ./home.php?r=-1&&id=".($id+1)."&&cat=".($cat+1));
			}
		}
		$_SESSION['b'][$cat][$id] = false;
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
	<script type="text/javascript" src="js/counter.js"></script>
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
		#count{
            color: green;
            font-family: Arial;
            //background-color:#d0e4fe;
            font-size:100px;
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
					<li><a href="./GameOver.php"><i class="icon-exit"></i>Terminar Juego</a></li>
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
						<!-- *************************RESPUESTA************************* -->
						<div class="span10" <?php if(!isset($r)) echo 'style="display:none"';?>>
							<br><br>
							<center><h1>Categoría : <?php echo $_SESSION['categoriasb'][$cat].', <b>'.($id+1) * 100;?></b> Puntos </h1>
								<div style="font-size: 30px;">Pregunta: <?php echo $_SESSION['info'][$cat][$id][0];?></div>
								<br><br><br><br><br>
								<h1><b><?php echo $_SESSION['info'][$cat][$id][1];?></b></h1>
								<form name="next" id="next">
									<input type="hidden" name="id" <?php echo 'value="'.($id+1).'"';?>>
									<input type="hidden" name="cat" <?php echo 'value="'.($cat+1).'"';?>>
									<input type="hidden" id="r" name="r">
								</form>
								<br><br>
								<form>
									<input type="hidden" value="yes" name="return">
									<input type="submit" value="Regresar" style="width:200px; height:50px; font-size: 30px;">
								</form>
								<div class="tile icon" onclick="document.getElementById('r').value = 0;next.submit();" <?php if($_SESSION['per'] < 1 || $_SESSION['res'][0]) echo 'style="display:none;"'?>>
									<div class="tile-content"><img src="images/P1.png" width="150"/></div>
									<div class="brand"><span class="name">Acertó <?php echo $_SESSION['p'][0]?></span></div>
								</div>
								<div class="tile icon" onclick="document.getElementById('r').value = 1;next.submit();" <?php if($_SESSION['per'] < 2 || $_SESSION['res'][1]) echo 'style="display:none;"'?>>
									<div class="tile-content"><img src="images/P2.png" width="150"/></div>
									<div class="brand"><span class="name">Acertó <?php echo $_SESSION['p'][1]?></span></div>
								</div>
								<div class="tile icon" onclick="document.getElementById('r').value = 2;next.submit();" <?php if($_SESSION['per'] < 3 || $_SESSION['res'][2]) echo 'style="display:none;"'?>>
									<div class="tile-content"><img src="images/P3.png" width="150"/></div>
									<div class="brand"><span class="name">Acertó <?php echo $_SESSION['p'][2]?></span></div>
								</div>
								<div class="tile icon" onclick="document.getElementById('r').value = 3;next.submit();" <?php if($_SESSION['per'] < 4 || $_SESSION['res'][3]) echo 'style="display:none;"'?>>
									<div class="tile-content"><img src="images/P4.png" width="150"/></div>
									<div class="brand"><span class="name">Acertó <?php echo $_SESSION['p'][3]?></span></div>
								</div>
								<div class="tile icon" onclick="document.getElementById('r').value = 4;next.submit();" <?php if($_SESSION['per'] < 5 || $_SESSION['res'][4]) echo 'style="display:none;"'?>>
									<div class="tile-content"><img src="images/P5.png" width="150"/></div>
									<div class="brand"><span class="name">Acertó <?php echo $_SESSION['p'][4]?></span></div>
								</div>
								<div class="tile icon" onclick="document.getElementById('r').value = 5;next.submit();" <?php if($_SESSION['per'] < 6 || $_SESSION['res'][5]) echo 'style="display:none;"'?>>
									<div class="tile-content"><img src="images/P6.png" width="150"/></div>
									<div class="brand"><span class="name">Acertó <?php echo $_SESSION['p'][5]?></span></div>
								</div>
							</center>
						</div>
						<!-- *************************PREGUNTA************************* -->
						<div class="span10" <?php if(isset($_GET['r']) || (!isset($id) && !isset($cat))) echo 'style="display:none"';?>>
							<br><br>
							<center><h1>Categoría : <?php echo $_SESSION['categoriasb'][$cat]; ?><br> Pregunta por <?php echo ($id+1) * 100;?> Puntos </h1></center>
							<br><br><br><br><br><br>
							<?php echo '<center><h1><b>'.$_SESSION['info'][$cat][$id][0].'<b></h1></center>';?>
							<br>
							<form>
								<input type="hidden" name="id" <?php echo 'value="'.($id+1).'"';?>>
								<input type="hidden" name="cat" <?php echo 'value="'.($cat+1).'"';?>>
								<input type="hidden" name="r" value="-1">
								<center><input type="submit" value="Ver Respuesta" style="width:400px; height:100px; font-size: 30px;"></center>
							<form>
						</div>
						<div class="span4" <?php if(isset($_GET['r']) || (!isset($id) && !isset($cat))) echo 'style="display:none"';?>>
							<br><br>
							<b><div class="span4"><p id="count" align="center"></p></div></b>
							<span id="dummy" onclick="playSound(this, 'fail.mp3');"></span>
							<br>
						</div>
						<!-- *************************GAME************************* -->
						<div class="span10" <?php if(isset($id) && isset($cat)) echo 'style="display:none"';?>>
							<?php include 'game.php';?>
						</div>
						<div class="span4">
							<br>
							<center><h2>Equipos</h2></center>
							<table>
							<tr><td><h3><b>Equipo</b></h3></td><td><h3><b>Puntaje</b></h3></td></tr>
							<?php if($_SESSION['per'] > 0) echo '<tr><td>'.$_SESSION['p'][0]. '</td><td>'.$_SESSION['s'][0].'</td></tr>';?>						
							<?php if($_SESSION['per'] > 1) echo '<tr><td>'.$_SESSION['p'][1]. '</td><td>'.$_SESSION['s'][1].'</td></tr>';?>	
							<?php if($_SESSION['per'] > 2) echo '<tr><td>'.$_SESSION['p'][2]. '</td><td>'.$_SESSION['s'][2].'</td></tr>';?>	
							<?php if($_SESSION['per'] > 3) echo '<tr><td>'.$_SESSION['p'][3]. '</td><td>'.$_SESSION['s'][3].'</td></tr>';?>	
							<?php if($_SESSION['per'] > 4) echo '<tr><td>'.$_SESSION['p'][4]. '</td><td>'.$_SESSION['s'][4].'</td></tr>';?>	
							<?php if($_SESSION['per'] > 5) echo '<tr><td>'.$_SESSION['p'][5]. '</td><td>'.$_SESSION['s'][5].'</td></tr>';?>	
							</table>
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