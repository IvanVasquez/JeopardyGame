<?php
	header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="license" content="Licensed under MIT License"/>
    <title>Jeopardy UTCH</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon">	
	<link href="../css/modern.css" rel="stylesheet">
    <link href="../css/modern-responsive.css" rel="stylesheet">
    <link href="../css/site.css" rel="stylesheet" type="text/css">
    <link href="../js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="../js/assets/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="../js/assets/moment.js"></script>
    <script type="text/javascript" src="../js/assets/moment_langs.js"></script>
    <script type="text/javascript" src="../js/modern/dropdown.js"></script>
    <script type="text/javascript" src="../js/modern/accordion.js"></script>
    <script type="text/javascript" src="../js/modern/buttonset.js"></script>
    <script type="text/javascript" src="../js/modern/carousel.js"></script>
    <script type="text/javascript" src="../js/modern/input-control.js"></script>
    <script type="text/javascript" src="../js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="../js/modern/rating.js"></script>
    <script type="text/javascript" src="../js/modern/slider.js"></script>
    <script type="text/javascript" src="../js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="../js/modern/tile-drag.js"></script>
    <script type="text/javascript" src="../js/modern/calendar.js"></script>
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
				<a href="../index.php">
					<span class="element brand"><img class="place-left" src="../images/favicon.png" style="height: 20px">Jeopardy UTCH</span>
				</a>
				<div class="divider"></div>
				<ul class="menu" style="display: none;">
					<li><a href="../index.php"><i class="icon-home"></i>Inicio</a></li>
				</ul>
			</div>
		</div>
	</div>
	<img class="image" src="../images/logo.png">
	
	<div class="page secondary">
		<div class="page-region">
            <div class="page-region-content">
                <div class="grid">
                    <div class="row">
						<div class="span12">
							<h2>Diseña tus propias preguntas y Respuestas</h2>
							<form method="POST" action="./createXML.php">
								<h3>Nombre del Archivo</h3>
								<div class="input-control text">												
									<input type="text" name="nom" onkeypress="return handleEnter(this, event)"/>
									<button class="btn-clear"></button>
								</div>
								<label class="input-control checkbox">
									<input type="checkbox" name="download">
									<span class="helper">¿Desea descargar el archivo?</span>
								</label>
								<ul class="accordion dark" data-role="accordion">
									<li>
										<a href="#"> Categoría 1 </a>										
										<div>
											<h3>Nombre de la Categoría</h3>
											<div class="input-control text">												
												<input type="text" name="cat1" onkeypress="return handleEnter(this, event)"/>
												<button class="btn-clear"></button>
											</div>
											<table>
												<tr>
													<td>
														<h3>Pregunta 1</h3>
														<div class="input-control text">												
															<input type="text" name="p11" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 1</h3>
														<div class="input-control text">												
															<input type="text" name="r11" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 2</h3>
														<div class="input-control text">												
															<input type="text" name="p12" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 2</h3>
														<div class="input-control text">												
															<input type="text" name="r12" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 3</h3>
														<div class="input-control text">												
															<input type="text" name="p13" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 3</h3>
														<div class="input-control text">												
															<input type="text" name="r13" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 4</h3>
														<div class="input-control text">												
															<input type="text" name="p14" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 4</h3>
														<div class="input-control text">												
															<input type="text" name="r14" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 5</h3>
														<div class="input-control text">												
															<input type="text" name="p15" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 5</h3>
														<div class="input-control text">												
															<input type="text" name="r15" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</li>
									<li>
										<a href="#"> Categoría 2 </a>										
										<div>
											<h3>Nombre de la Categoría</h3>
											<div class="input-control text">												
												<input type="text" name="cat2" onkeypress="return handleEnter(this, event)"/>
												<button class="btn-clear"></button>
											</div>
											<table>
												<tr>
													<td>
														<h3>Pregunta 1</h3>
														<div class="input-control text">												
															<input type="text" name="p21" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 1</h3>
														<div class="input-control text">												
															<input type="text" name="r21" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 2</h3>
														<div class="input-control text">												
															<input type="text" name="p22" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 2</h3>
														<div class="input-control text">												
															<input type="text" name="r22" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 3</h3>
														<div class="input-control text">												
															<input type="text" name="p23" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 3</h3>
														<div class="input-control text">												
															<input type="text" name="r23" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 4</h3>
														<div class="input-control text">												
															<input type="text" name="p24" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 4</h3>
														<div class="input-control text">												
															<input type="text" name="r24" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 5</h3>
														<div class="input-control text">												
															<input type="text" name="p25" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 5</h3>
														<div class="input-control text">												
															<input type="text" name="r25" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</li>
									<li>
										<a href="#"> Categoría 3 </a>										
										<div>
											<h3>Nombre de la Categoría</h3>
											<div class="input-control text">												
												<input type="text" name="cat3" onkeypress="return handleEnter(this, event)"/>
												<button class="btn-clear"></button>
											</div>
											<table>
												<tr>
													<td>
														<h3>Pregunta 1</h3>
														<div class="input-control text">												
															<input type="text" name="p31" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 1</h3>
														<div class="input-control text">												
															<input type="text" name="r31" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 2</h3>
														<div class="input-control text">												
															<input type="text" name="p32" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 2</h3>
														<div class="input-control text">												
															<input type="text" name="r32" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 3</h3>
														<div class="input-control text">												
															<input type="text" name="p33" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 3</h3>
														<div class="input-control text">												
															<input type="text" name="r33" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 4</h3>
														<div class="input-control text">												
															<input type="text" name="p34" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 4</h3>
														<div class="input-control text">												
															<input type="text" name="r34" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 5</h3>
														<div class="input-control text">												
															<input type="text" name="p35" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 5</h3>
														<div class="input-control text">												
															<input type="text" name="r35" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</li>
									<li>
										<a href="#"> Categoría 4 </a>										
										<div>
											<h3>Nombre de la Categoría</h3>
											<div class="input-control text">												
												<input type="text" name="cat4" onkeypress="return handleEnter(this, event)"/>
												<button class="btn-clear"></button>
											</div>
											<table>
												<tr>
													<td>
														<h3>Pregunta 1</h3>
														<div class="input-control text">												
															<input type="text" name="p41" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 1</h3>
														<div class="input-control text">												
															<input type="text" name="r41" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 2</h3>
														<div class="input-control text">												
															<input type="text" name="p42" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 2</h3>
														<div class="input-control text">												
															<input type="text" name="r42" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 3</h3>
														<div class="input-control text">												
															<input type="text" name="p43" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 3</h3>
														<div class="input-control text">												
															<input type="text" name="r43" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 4</h3>
														<div class="input-control text">												
															<input type="text" name="p44" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 4</h3>
														<div class="input-control text">												
															<input type="text" name="r44" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 5</h3>
														<div class="input-control text">												
															<input type="text" name="p45" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 5</h3>
														<div class="input-control text">												
															<input type="text" name="r45" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</li>
									<li>
										<a href="#"> Categoría 5 </a>										
										<div>
											<h3>Nombre de la Categoría</h3>
											<div class="input-control text">												
												<input type="text" name="cat5" onkeypress="return handleEnter(this, event)"/>
												<button class="btn-clear"></button>
											</div>
											<table>
												<tr>
													<td>
														<h3>Pregunta 1</h3>
														<div class="input-control text">												
															<input type="text" name="p51" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 1</h3>
														<div class="input-control text">												
															<input type="text" name="r51" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 2</h3>
														<div class="input-control text">												
															<input type="text" name="p52" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 2</h3>
														<div class="input-control text">												
															<input type="text" name="r52" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 3</h3>
														<div class="input-control text">												
															<input type="text" name="p53" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 3</h3>
														<div class="input-control text">												
															<input type="text" name="r53" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 4</h3>
														<div class="input-control text">												
															<input type="text" name="p54" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 4</h3>
														<div class="input-control text">												
															<input type="text" name="r54" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<h3>Pregunta 5</h3>
														<div class="input-control text">												
															<input type="text" name="p55" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
													<td>
														<h3>Respuesta 5</h3>
														<div class="input-control text">												
															<input type="text" name="r55" onkeypress="return handleEnter(this, event)"/>
															<button class="btn-clear"></button>
														</div>
													</td>
												</tr>
											</table>
										</div>
									</li>
								</ul>
								<center><input type="submit" value="Crear Archivo de Preguntas" style="width: 500px; height: 50px;"/></center>
							</form>
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