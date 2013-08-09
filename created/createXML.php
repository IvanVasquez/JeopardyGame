<?php
	if(isset($_POST['nom'])) $name = $_POST['nom']; else $name = 'preguntas';		
	if(isset($_POST['cat1'])) $cat[0] = $_POST['cat1']; else $cat[0] = 'EMPTY';
	if(isset($_POST['cat1'])) $cat[1] = $_POST['cat2']; else $cat[1] = 'EMPTY';
	if(isset($_POST['cat1'])) $cat[2] = $_POST['cat3']; else $cat[2] = 'EMPTY';
	if(isset($_POST['cat1'])) $cat[3] = $_POST['cat4']; else $cat[3] = 'EMPTY';
	if(isset($_POST['cat1'])) $cat[4] = $_POST['cat5']; else $cat[4] = 'EMPTY';
	
	if(isset($_POST['p11'])) $p[0][0][0] = $_POST['p11']; else $p[0][0][0] = 'EMPTY';
	if(isset($_POST['r11'])) $p[0][0][1] = $_POST['r11']; else $p[0][0][1] = 'EMPTY';
	if(isset($_POST['p12'])) $p[0][1][0] = $_POST['p12']; else $p[0][1][0] = 'EMPTY';
	if(isset($_POST['r12'])) $p[0][1][1] = $_POST['r12']; else $p[0][1][1] = 'EMPTY';
	if(isset($_POST['p13'])) $p[0][2][0] = $_POST['p13']; else $p[0][2][0] = 'EMPTY';
	if(isset($_POST['r13'])) $p[0][2][1] = $_POST['r13']; else $p[0][2][1] = 'EMPTY';
	if(isset($_POST['p14'])) $p[0][3][0] = $_POST['p14']; else $p[0][3][0] = 'EMPTY';
	if(isset($_POST['r14'])) $p[0][3][1] = $_POST['r14']; else $p[0][3][1] = 'EMPTY';
	if(isset($_POST['p15'])) $p[0][4][0] = $_POST['p15']; else $p[0][4][0] = 'EMPTY';
	if(isset($_POST['r15'])) $p[0][4][1] = $_POST['r15']; else $p[0][4][1] = 'EMPTY';
	
	if(isset($_POST['p21'])) $p[1][0][0] = $_POST['p21']; else $p[1][0][0] = 'EMPTY';
	if(isset($_POST['r21'])) $p[1][0][1] = $_POST['r21']; else $p[1][0][1] = 'EMPTY';
	if(isset($_POST['p22'])) $p[1][1][0] = $_POST['p22']; else $p[1][1][0] = 'EMPTY';
	if(isset($_POST['r22'])) $p[1][1][1] = $_POST['r22']; else $p[1][1][1] = 'EMPTY';
	if(isset($_POST['p23'])) $p[1][2][0] = $_POST['p23']; else $p[1][2][0] = 'EMPTY';
	if(isset($_POST['r23'])) $p[1][2][1] = $_POST['r23']; else $p[1][2][1] = 'EMPTY';
	if(isset($_POST['p24'])) $p[1][3][0] = $_POST['p24']; else $p[1][3][0] = 'EMPTY';
	if(isset($_POST['r24'])) $p[1][3][1] = $_POST['r24']; else $p[1][3][1] = 'EMPTY';
	if(isset($_POST['p25'])) $p[1][4][0] = $_POST['p25']; else $p[1][4][0] = 'EMPTY';
	if(isset($_POST['r25'])) $p[1][4][1] = $_POST['r25']; else $p[1][4][1] = 'EMPTY';
	
	if(isset($_POST['p31'])) $p[2][0][0] = $_POST['p31']; else $p[2][0][0] = 'EMPTY';
	if(isset($_POST['r31'])) $p[2][0][1] = $_POST['r31']; else $p[2][0][1] = 'EMPTY';
	if(isset($_POST['p32'])) $p[2][1][0] = $_POST['p32']; else $p[2][1][0] = 'EMPTY';
	if(isset($_POST['r32'])) $p[2][1][1] = $_POST['r32']; else $p[2][1][1] = 'EMPTY';
	if(isset($_POST['p33'])) $p[2][2][0] = $_POST['p33']; else $p[2][2][0] = 'EMPTY';
	if(isset($_POST['r33'])) $p[2][2][1] = $_POST['r33']; else $p[2][2][1] = 'EMPTY';
	if(isset($_POST['p34'])) $p[2][3][0] = $_POST['p34']; else $p[2][3][0] = 'EMPTY';
	if(isset($_POST['r34'])) $p[2][3][1] = $_POST['r34']; else $p[2][3][1] = 'EMPTY';
	if(isset($_POST['p35'])) $p[2][4][0] = $_POST['p35']; else $p[2][4][0] = 'EMPTY';
	if(isset($_POST['r35'])) $p[2][4][1] = $_POST['r35']; else $p[2][4][1] = 'EMPTY';
	
	if(isset($_POST['p41'])) $p[3][0][0] = $_POST['p41']; else $p[3][0][0] = 'EMPTY';
	if(isset($_POST['r41'])) $p[3][0][1] = $_POST['r41']; else $p[3][0][1] = 'EMPTY';
	if(isset($_POST['p42'])) $p[3][1][0] = $_POST['p42']; else $p[3][1][0] = 'EMPTY';
	if(isset($_POST['r42'])) $p[3][1][1] = $_POST['r42']; else $p[3][1][1] = 'EMPTY';
	if(isset($_POST['p43'])) $p[3][2][0] = $_POST['p43']; else $p[3][2][0] = 'EMPTY';
	if(isset($_POST['r43'])) $p[3][2][1] = $_POST['r43']; else $p[3][2][1] = 'EMPTY';
	if(isset($_POST['p44'])) $p[3][3][0] = $_POST['p44']; else $p[3][3][0] = 'EMPTY';
	if(isset($_POST['r44'])) $p[3][3][1] = $_POST['r44']; else $p[3][3][1] = 'EMPTY';
	if(isset($_POST['p45'])) $p[3][4][0] = $_POST['p45']; else $p[3][4][0] = 'EMPTY';
	if(isset($_POST['r45'])) $p[3][4][1] = $_POST['r45']; else $p[3][4][1] = 'EMPTY';
	
	if(isset($_POST['p51'])) $p[4][0][0] = $_POST['p51']; else $p[4][0][0] = 'EMPTY';
	if(isset($_POST['r51'])) $p[4][0][1] = $_POST['r51']; else $p[4][0][1] = 'EMPTY';
	if(isset($_POST['p52'])) $p[4][1][0] = $_POST['p52']; else $p[4][1][0] = 'EMPTY';
	if(isset($_POST['r52'])) $p[4][1][1] = $_POST['r52']; else $p[4][1][1] = 'EMPTY';
	if(isset($_POST['p53'])) $p[4][2][0] = $_POST['p53']; else $p[4][2][0] = 'EMPTY';
	if(isset($_POST['r53'])) $p[4][2][1] = $_POST['r53']; else $p[4][2][1] = 'EMPTY';
	if(isset($_POST['p54'])) $p[4][3][0] = $_POST['p54']; else $p[4][3][0] = 'EMPTY';
	if(isset($_POST['r54'])) $p[4][3][1] = $_POST['r54']; else $p[4][3][1] = 'EMPTY';
	if(isset($_POST['p55'])) $p[4][4][0] = $_POST['p55']; else $p[4][4][0] = 'EMPTY';
	if(isset($_POST['r55'])) $p[4][4][1] = $_POST['r55']; else $p[4][4][1] = 'EMPTY';
	
	$xml = new DomDocument('1.0', 'UTF-8');
	$root = $xml->createElement('jeopardy');
	$root = $xml->appendChild($root);
	for ($i = 0; $i < 5; $i++) {
		$categoria = $xml->createElement('categoria');
		$categoria =$root->appendChild($categoria);		
		$nom = $xml->createElement('nombre',$cat[$i]);
		$nom = $categoria->appendChild($nom);
		for($j = 0; $j < 5; $j++){
			$idcat = $j+1;
			$p1 = $xml->createElement('p'.$idcat, $p[$i][$j][0]);
			$p1 = $categoria->appendChild($p1);
			$r1 = $xml->createElement('r'.$idcat,$p[$i][$j][1]);
			$r1 = $categoria->appendChild($r1);
		}
	}		
	$xml->formatOutput = true;
	$strings_xml = $xml->saveXML();
	$xml->save('./'.$name.'.xml');
	$xml->save('../uploaded/'.$name.'.xml');
	if(isset($_POST['download'])){
		$file = $name.'.xml';
		header("Content-disposition: attachment; filename=$file");
		header("Content-type: application/octet-stream");
		readfile($file);
		header("Location: ../?msg=Juego creado correctamente");
	}
	else{
		header("Location: ../?msg=Juego creado correctamente");
	}
?>
