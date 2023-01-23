<?php
	if(!isset($_SESSION)){
	session_start();
	}			
		
	if(!isset($_SESSION['id'])){
		die("Você nao pode acessar porque não esta logado <p> <a href=\"Login.php\">Entrar</a></p>");
	}