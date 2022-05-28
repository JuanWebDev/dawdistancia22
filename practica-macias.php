<?php

/**
 * 
 * Autor y versión del script
 *
 * @autor Juan José Macías Berbén
 *
 * @version 1.0
 *
 * @package Application_Ejercicio
 */


/**
 * Función que devuelve el nombre
 * completo.
 * 
 *
 * @param string $firstName Nombre del usuario
 * @param string $surName Apellido del usuario
 *  
 *
 * {@internal Inserta un salto de línea al final
 * (etiqueta solo visible a desarrolladores)
 * }
 *
 * @return string Devuelve una cadena de texto 
 * con el nombre completo
 */
function getFullName(string $firstName,string $surName):string
{
	return $firstName.' '.$surName.PHP_EOL;
}


/**
 *
 * Función que devuelve el área de un rectángulo
 *
 * @param float $base Base del rectángulo
 * @param float $height Altura del rectángulo
 *
 *
 * @return float Devuelve el área en número decimal 
 *
 */
function getRectangleArea(float $base, float $height):float
{
	return $base*$height; 
}






echo getFullName('Juan José', 'Macías Berbén');
echo getRectangleArea(4.00,5.00);
echo PHP_EOL;
