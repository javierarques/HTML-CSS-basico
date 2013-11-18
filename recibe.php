<?php 
/* RECIBE
 * Imprime el contenido de _POST o _GET
 *
 */

	if ( ! empty($_POST)) {
		echo '<pre>' .print_r($_POST, true) . '</pre>';
	}

	if ( ! empty($_GET)) {
		echo '<pre>' . print_r($_GET, true) . '</pre>';
	}	


 ?>