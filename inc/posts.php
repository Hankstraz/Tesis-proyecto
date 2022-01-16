<?php

/**
 * Devuelve todo el listado de posts
 */
function get_all_posts()
{
	global $app_db;
	$result = $app_db->query("SELECT * FROM articulos ORDER BY FECHACREACION DESC");

	return $app_db->fetch_all($result);
}

//function para obtener todos los items de una lista para cargar un ddl
function get_all_items($nombreTabla)
{
	global $app_db;
	$result = $app_db->query("SELECT * FROM $nombreTabla");

	return $app_db->fetch_all($result);
}
/**
 * Busca y devuelve un sólo post
 * Si no lo encuentra, devuelve false
 */
function get_post($post_id)
{
	global $app_db;
	$query = "SELECT * FROM articulos WHERE PK_ARTICULOID = " . $post_id;
	$result = $app_db->query($query);

	if (!$result) {
		die(mysqli_error($app_db));
	}
	return $app_db->fetch_assoc($result);
}

function get_images($userId)
{
	global $app_db;
	$query = "SELECT * FROM fotos WHERE FK_USUARIOID = " . $userId;
	$result = $app_db->query($query);

	if (!$result) {
		die(mysqli_error($app_db));
	}
	return $app_db->fetch_all($result);
}
//funcion para incrementar id de cualquier tabla
/*
   $nombreID: nombre del pk de la tabla
   $nombreTabla: nombre de la tabla
*/
function incrementar($nombreID, $nombreTabla)
{
	global $app_db;
	$query = "SELECT MAX(" . $nombreID . ")+1 AS idactual FROM " . $nombreTabla;

	$result = $app_db->query($query);
	$row = mysqli_fetch_array($result);
	return $row['idactual'];
}

//funcion para obtener la id del item tipoArticulo
function getID($tipoarticulo, $nombreID)
{
	global $app_db;

	$query = "SELECT $nombreID AS id FROM tipoarticulos WHERE NOMBRE = $tipoarticulo";

	$result = $app_db->query($query);
	$row = mysqli_fetch_array($result);
	return $row['id'];
}
//funcion para insertar post nuevo
function insert_post($title, $extracto, $contenido, $tipoarticulo)
{
	global $app_db;
	//$idarticulo = getID($tipoarticulo, "PK_TIPOARTICULOID");
	$published_on = date('Y-m-d');
	$id = incrementar("PK_ARTICULOID", "articulos");
	$idInt = intval($id);
	$idIntarticulo = intval($tipoarticulo);
	$query = "INSERT INTO articulos
	(PK_ARTICULOID, FECHACREACION, CONTENIDO, ESTADO, FK_TIPOARTICULOID, TITLE, EXTRACTO)
	VALUES ('$idInt', '$published_on','$contenido', '1', '$idIntarticulo', '$title', '$extracto')";

	$result = $app_db->query($query);
}

//funcion para crear usuarios
function insert_usuario($nombre, $usuario, $mail, $pass, $fechaNacimiento, $genero)
{
	global $app_db;
	$passencriptado = md5($pass);
	//$fechaNacimiento = date('Y-m-d');
	$id = incrementar("PK_USUARIOID", "usuarios");
	$idInt = intval($id);
	$idgenero = intval($genero);
	$query = "INSERT INTO usuarios
	(PK_USUARIOID, NOMBREAPELLIDO, USERNAME, FECHA_NAC, PASS, EMAIL, ESTADO, FK_GENERO)
	VALUES ('$idInt', '$nombre','$usuario', '$fechaNacimiento', '$passencriptado', '$mail', '1', '$idgenero')";

	$result = $app_db->query($query);
}

//funcion para eliminar post
function delete_post($nombreID, $nombreTabla, $id)
{
	global $app_db;

	$result = $app_db->query("DELETE FROM $nombreTabla WHERE $nombreID = $id");
}

//funcion para crear feedback
function insert_feedback($comentarios)
{
	global $app_db;

	$id = incrementar("PK_FEEDBACKID", "feedbacks");
	$idInt = intval($id);
	$idUsuario = intval($_COOKIE["id"]);
	$query = "INSERT INTO feedbacks
	(PK_FEEDBACKID, COMENTARIO, FK_USUARIOID)
	VALUES ('$idInt', '$comentarios','$idUsuario')";

	$app_db->query($query);
}

//funcion para insertar imagenes de perfil
function insert_imagen($fileName, $descripcion, $esparaperfil)
{
	global $app_db;

	$idUsuario = $_COOKIE["id"];
	if ($esparaperfil == 1) {
		Desactualizar_Perfil($idUsuario);
		$actual = 1;
	} else {
		$actual = 0;
	}

	$fechaSubida = date('Y-m-d');
	$id = incrementar("PK_FOTOID", "fotos");
	$idIntFoto = intval($id);
	$query = "INSERT into fotos (PK_FOTOID, TITULOFOTO, DESCRIPCION, FK_USUARIOID, FECHASUBIDA, PERFILACTUAL) VALUES ('$idIntFoto','$fileName','$descripcion','$idUsuario','$fechaSubida','$actual')";
	$result = $app_db->query($query);

	return $result;
}

//funcion para desactualizar el perfil actual y colocar el nuevo subido
function Desactualizar_Perfil($idUsuario)
{
	global $app_db;

	$query = "UPDATE fotos SET PERFILACTUAL = 0 WHERE FK_USUARIOID = $idUsuario";
	$app_db->query($query);
}

