<?php
//Llamada al modelo
require_once("models/personas_model.php");

//creacion de objeto modelo
$per=new personas_model();

//Asigna valores a variable datos array de valores
$datos=$per->get_personas();

//Llamada a la vista
require_once("views/personas_view.php");
?>


