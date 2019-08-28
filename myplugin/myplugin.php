<?php
/**
* Plugin Name: myplugin
* Plugin URI: http://www.codificatuidea.com/
* Description: Plugin de ejemplo
* Version: 1.0
* Author: Sebastian Rincon
* Author URI: http://www.codificatuidea.com/
**/

function code_myplugin() {

    // Se incluye la variable $wpdb para instanciar la conexion con la base de datos
    global $wpdb;

    // Realizacion de una consulta de la tabla my_table

    // Reemplazar my_table por una tabla existente en la base de datos
    $query = "SELECT * FROM my_table";

    // Obtención de los resultados de la consulta mediante get_results()
    $rows = $wpdb->get_results($query);
    
    // Impresión de resultados de la consulta
    echo "<pre>".print_r($rows, true)."</pre>";
}

function shortcode_myplugin() {
	ob_start();
	code_myplugin();
	return ob_get_clean();
}

// Shortcode para incluir el wordpress en cualquier pagina, [myplugin]
add_shortcode( 'myplugin', 'shortcode_myplugin' );
?>
