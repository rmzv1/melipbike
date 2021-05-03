<?php

include "db.php";

if(isset($_GET["id"])){
	$img = get_img($_GET["id"]);
	if($img!=null){
		del($img->id);
		unlink($img->folder.$img->src);
		header("Location: index.php");


	}
}

if(isset($_GET["id"])){
	$img = gal_img($_GET["id"]);
	if($img!=null){
		delete($img->id);
		unlink($img->folder.$img->src);
		header("Location: galeria-proyecto.php");


	}
}


?>