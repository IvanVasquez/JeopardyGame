 <?php
	session_start();
    if (isset($_SESSION['per'])) {
        header("Location: home.php");
    }
	header("Content-Type: text/html;charset=utf-8");
	if(isset($_POST['per']))
		$per = $_POST['per'];
	if(isset($_POST['opc']))
		$opc = $_POST['opc'];
	if(isset($_POST['p1']))
		$p[0] = $_POST['p1'];
	if(isset($_POST['p2']))
		$p[1] = $_POST['p2'];
	if(isset($_POST['p3']))
		$p[2] = $_POST['p3'];
	if(isset($_POST['p4']))
		$p[3] = $_POST['p4'];
	if(isset($_POST['p5']))
		$p[4] = $_POST['p5'];
	if(isset($_POST['p6']))
		$p[5] = $_POST['p6'];
	if(isset($per)){
		for($i = 0; $i < 6; $i++){
			$s[$i] = 0;
		}
		for($i = 0; $i < 6; $i++){
			$res[$i] = false;
		}
		$_SESSION['per'] = $per;
		$_SESSION['opc'] = $opc;
		$_SESSION['p'] = $p;
		$_SESSION['s'] = $s;
		for($i = 0; $i < 5; $i++){
			for($j = 0; $j < 5; $j++){
				$b[$i][$j] = true;
			}
		}
		$_SESSION['b'] = $b;
		$_SESSION['res'] = $res;
		header("Location: ./readXML.php?file=".$opc);
		//echo '<script type="text/javascript">location.reload(true);</script>';
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
					<li><a href="./index.php"><i class="icon-home"></i>Inicio</a></li>
					<li><a href="./created/create.php"><i class="icon-pencil"></i>Crear Juego</a></li>
				</ul>
			</div>
		</div>
	</div>
	<img class="image" src="./images/logo.png">
	
	<div class="page secondary">
		<div class="page-region">
            <div class="page-region-content">
                <div class="grid">
                    <div class="row">
						<div class="span10" <?php if(!isset($_GET['per'])) echo 'style="display:none;"'; ?>>
							<center><h2>Información de los Equipos</h2></center><br>
							<form method="POST">
								<input type="hidden" name="per"<?php echo 'value='.$_GET['per'];?> />
								<input type="hidden" name="opc"<?php echo 'value='.$_GET['opc'];?> />
								<div <?php if($_GET['per'] < 1) echo 'style="display:none;"'?>>
									<h3>Equipo 1</h3>
									<div class="input-control text">												
										<input <?php if($_GET['per'] >= 1) echo 'type="text"'; else echo 'type="hidden"';?> name="p1" onkeypress="return handleEnter(this, event)"/>
										<button class="btn-clear"></button>
									</div>
								</div>
								<div <?php if($_GET['per'] < 2) echo 'style="display:none;"'?>>
									<h3>Equipo 2</h3>
									<div class="input-control text">												
										<input type="text" name="p2" onkeypress="return handleEnter(this, event)"/>
										<button class="btn-clear"></button>
									</div>
								</div>
								<div <?php if($_GET['per'] < 3) echo 'style="display:none;"'?>>
									<h3>Equipo 3</h3>
									<div class="input-control text">												
										<input type="text" name="p3" onkeypress="return handleEnter(this, event)"/>
										<button class="btn-clear"></button>
									</div>
								</div>
								<div <?php if($_GET['per'] < 4) echo 'style="display:none;"'?>>
									<h3>Equipo 4</h3>
									<div class="input-control text">												
										<input type="text" name="p4" onkeypress="return handleEnter(this, event)"/>
										<button class="btn-clear"></button>
									</div>
								</div>
								<div <?php if($_GET['per'] < 5) echo 'style="display:none;"'?>>
									<h3>Equipo 5</h3>
									<div class="input-control text">												
										<input type="text" name="p5" onkeypress="return handleEnter(this, event)"/>
										<button class="btn-clear"></button>
									</div>
								</div>
								<div <?php if($_GET['per'] < 6) echo 'style="display:none;"'?>>
									<h3>Equipo 6</h3>
									<div class="input-control text">												
										<input type="text" name="p6" onkeypress="return handleEnter(this, event)"/>
										<button class="btn-clear"></button>
									</div>
								</div>
								<center><input type="submit" value="Empezar el Juego" style="width:500px; height:50px;"/></center>
							</form>
						</div>
						<div class="span14" <?php if(isset($_GET['per'])) echo 'style="display:none;"'; ?>>
							<br>
							<div class="span10">
								<center><h2>Iniciar Juego</h2></center><br>
								<center>
								<?php 
									if (isset($_GET['err']))echo '<h2><span class="label important">Error: </span><span class="label warning">'.$_GET['err'].'</span></h2>'; 
									if (isset($_GET['msg']))echo '<h2><span class="label success">Éxito: </span><span class="label info">'.$_GET['msg'].'</span></h2>';
								?>
								</center>
								<form name="next" id="next">
									<div class="input-control select">
										<select name="opc">
											<?php
												$path = './uploaded';
												$dir_handle = @opendir($path) or die("No se pudo abrir $path");
												while ($file = readdir($dir_handle)) {
													if(strlen($file) > 3){
														$name = substr($file, 0, (strlen($file) - 4));
														echo '<option>'.$name.'</option>';
													}
												}
												closedir($dir_handle);
											?>
										</select>								
									</div>
									<input type="hidden" name="per" id="per"/>
								</form>
								
							</div>
							<div class="span4">
								<center><h2>Subir Archivo</h2></center>
								<form action="upload.php" method="post" enctype="multipart/form-data">
									<input name="archivo" type="file" size="35" /></br>
									<center><input name="enviar" type="submit" value="Subir Archivo" style="width:300px; height:25px;"/></center>
									<input name="action" type="hidden" value="upload" />     	
								</form>
								<?php if(isset($_GET['msg'])) echo '<br><br><br>'; ?>
							</div>
							<h2><?php for($i = 0; $i < 35; $i++) echo '&nbsp;';?>Cantidad de Jugadores</h2>
							<div class="tile icon" onclick="document.getElementById('per').value = 2;next.submit();">
									<img src="images/P2.png" width="150"/>
							</div>
							<div class="tile bg-color-blue icon" onclick="document.getElementById('per').value = 3;next.submit();">
									<img src="images/P3.png" width="150"/>
							</div>
							<div class="tile bg-color-green icon" onclick="document.getElementById('per').value = 4;next.submit();">
									<img src="images/P4.png" width="150"/>
							</div>
							<div class="tile bg-color-yellow icon" onclick="document.getElementById('per').value = 5;next.submit();">
									<img src="images/P5.png" width="150"/>
							</div>
							<div class="tile bg-color-red icon" onclick="document.getElementById('per').value = 6;next.submit();">
									<img src="images/P6.png" width="150"/>
							</div>
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