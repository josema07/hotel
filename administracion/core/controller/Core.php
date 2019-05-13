<?php


class Core {

	public static function alert($text){
		echo "<script>alert('".$text."');</script>";
	}

	public static function redir($url){
		echo "<script>window.location='".$url."';</script>";
	}







}




?>