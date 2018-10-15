<?php

	session_start();//antes de qualquer impressão de dado!!

	//variavel que verifica se o usuário está autentificado;
	$usuário_autenticado = false;

	//usuarios do sistema
	$usuarios_app = array(
	array('email'=>'adm@teste.com.br','senha'=>'123456'),
	array('email'=>'user@teste.com.br','senha'=>'abcd')
	);

	foreach ($usuarios_app as $key => $value){
		if($value['email'] == $_POST['email'] && $value['senha']==$_POST['senha'])
		{
			$usuário_autenticado = true;
			$_SESSION['autenticado'] = 'SIM';
		}
	}

	if($usuário_autenticado){
			header('location: home.php');
		}else{
			$_SESSION['autenticado'] = 'NÃO';
			header('location: index.php?login=erro');
		}
		


	//super global GET
	/*
	print_r($_GET);

	echo '</br>';

	echo $_GET['email'];

	echo $_GET['senha'];
	*/

	

?>