<?php
	$status = "";
	if ($_POST["action"] == "upload") {
		// obtenemos los datos del archivo
		$tamano = $_FILES["archivo"]['size'];
		$tipo = $_FILES["archivo"]['type'];
		$archivo = $_FILES["archivo"]['name'];
	   
		if ($archivo != "") {
			// guardamos el archivo a la carpeta files
			$destino =  "./uploaded/".$archivo;
			if (copy($_FILES['archivo']['tmp_name'],$destino)) {
				$status = "Archivo subido: ".$archivo;
			} else {
				$status = "Error al subir el archivo";
			}
		} else {
			$status = "Error al subir archivo";
		}
		header("Location: ./?msg=".$status);
	}
?>