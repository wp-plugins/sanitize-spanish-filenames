<?php
/*
Plugin Name: Sanitize Spanish Filenames
Plugin URI: http://www.samuelaguilera.com
Description: Filtra el nombre de los archivos que se suben a la librería multimedia, sutituyendo los caracteres áéíóúñ y ÁÉÍÓÚÑ por aeioun y AEIOUN respectivamente.
Version: 1.0
Author: Samuel Aguilera
Author URI: http://www.samuelaguilera.com
License: GPL2
*/

/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 3 as published by
    the Free Software Foundation.
    
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function sa_sanitize_spanish_chars ($filename) {


$spanish_chars = array( '/á/', '/é/', '/í/', '/ó/', '/ú/', '/ñ/', '/Á/', '/É/', '/Í/', '/Ó/', '/Ú/', '/Ñ/' );
$sanitized_chars = array('a', 'e', 'i', 'o', 'u', 'n', 'A', 'E', 'I', 'O', 'U', 'N');

$friendly_filename = preg_replace($spanish_chars, $sanitized_chars, $filename);

return $friendly_filename;

}

add_filter('sanitize_file_name', 'sa_sanitize_spanish_chars', 10);

?>
