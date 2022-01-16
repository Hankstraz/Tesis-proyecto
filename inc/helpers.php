<?php

function redirect_to($path){
    header('Location: ' . SITE_URL . $path);
    die();
}

/*function is_logged_in() {
	$is_user_logged_in = isset( $_SESSION['user'] ) === ADMIN_USER;
	return $is_user_logged_in;
}*/

function login( $username, $password ) {
	if ( $username === ADMIN_USER && $password === ADMIN_PASS ) {
		$_SESSION['user'] = ADMIN_USER;
		return true;
	}else{
		$_SESSION['user'] = $username;
		return true;
	}

	return false;
}

function logout() {
	setcookie("type","",time()-3600);
	setcookie("id","",time()-3600);
	setcookie("nombre","",time()-3600);
	//unset( $_SESSION['user'] );
	redirect_to( 'index.html' );
	//session_destroy();
}

//Comentar Ctrl + KC
//Descomentar Ctrl + KU
//Ordenar código Alt + Shift + F