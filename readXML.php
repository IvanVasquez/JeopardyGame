<?php
	session_start();
	$f = $_GET['file'];
	$file = './uploaded/'.$f.'.xml';
	if (file_exists($file)) {
		$xml = simplexml_load_file($file);
		$num = 0;
		foreach ($xml->categoria as $cat){
			$_SESSION['categorias'][$num] = '<h4><b>'.$cat->nombre.'</b></h4>';
			$_SESSION['categoriasb'][$num] = '<b>'.$cat->nombre.'</b>';
			$_SESSION['info'][$num][0][0] = $cat->p1.'';
			$_SESSION['info'][$num][0][1] = $cat->r1.'';
			$_SESSION['info'][$num][1][0] = $cat->p2.'';
			$_SESSION['info'][$num][1][1] = $cat->r2.'';
			$_SESSION['info'][$num][2][0] = $cat->p3.'';
			$_SESSION['info'][$num][2][1] = $cat->r3.'';
			$_SESSION['info'][$num][3][0] = $cat->p4.'';
			$_SESSION['info'][$num][3][1] = $cat->r4.'';
			$_SESSION['info'][$num][4][0] = $cat->p5.'';
			$_SESSION['info'][$num][4][1] = $cat->r5.'';
			$num++;
		}
        header("Location: ./home.php");
	} else {
		exit('Failed to open '.$f.'.xml.');
	}	
?>