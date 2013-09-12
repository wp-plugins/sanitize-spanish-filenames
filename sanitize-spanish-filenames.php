<?php
/*
Plugin Name: Sanitize Spanish Filenames
Plugin URI: http://www.samuelaguilera.com/archivo/filtrar-tildes-nombre-archivo-wordpress.xhtml
Description: Filtra el nombre de los archivos que se suben a la librería multimedia, sutituyendo los caracteres áéíóúüñºª y ÁÉÍÓÚÜÑ por aeiouunoa y AEIOUUN respectivamente.
Version: 1.0.3
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

		$original_chars = array(
			'/А/','/Б/','/В/','/Г/', // cyrillic alphabet
			'/Д/','/Е/','/Ж/','/З/','/И/',
			'/Й/','/К/','/Л/','/М/','/Н/',
			'/О/','/П/','/Р/','/С/','/Т/',
			'/У/','/Ф/','/Х/','/Ц/','/Ч/',
			'/Ш/','/Щ/','/Ь/','/Ю/','/Я/',
			'/а/','/б/','/в/','/г/','/д/','/е/','/ж/',
			'/з/','/и/','/й/','/к/','/л/',
			'/м/','/н/','/о/','/п/','/р/',
			'/с/','/т/','/у/','/ф/','/х/',
			'/ц/','/ч/','/ш/','/щ/',
			'/ь/','/ю/','/я/',

			'/Ґ/','/ґ/','/Є/','/є/','/І/','/і/','/Ї/','/ї/', // ukrainian
			'/Ё/','/ё/','/Ы/','/ы/','/Ъ/','/ъ/','/Э/','/э/', // russian
			'/Ў/','/ў/', // belorussian
			'/Ä/','/ä/','/Ö/','/ö/','/Ü/','/ü/','/ß/', // german
			'/Ą/','/ą/','/Ć/','/ć/','/Ę/','/ę/','/Ł/','/ł/','/Ń/','/ń/','/Ó/','/ó/','/Ś/','/ś/','/Ź/','/ź/','/Ż/','/ż/', // polish (new unique letters)
			'/Ő/','/ő/','/Ű/','/ű/', // hungarian
			'/ě/','/š/','/č/','/ř/','/ž/','/ý/','/á/','/é/','/ď/','/ť/','/ň/','/ú/','/ů/', // czech
			'/Ě/','/Š/','/Č/','/Ř/','/Ž/','/Ý/','/Á/','/É/','/Ď/','/Ť/','/Ň/','/Ú/','/Ů/',

			'/À/','/Á/','/Â/','/Ã/','/Å/','/Æ/','/Ç/','/È/','/É/','/Ê/','/Ë/','/Ì/','/Í/','/Î/','/Ï/','/Ð/','/Ñ/','/Ò/','/Ô/','/Õ/','/×/','/Ø/','/Ù/','/Ú/','/Û/','/Ý/','/Þ/', // extra all (http://www.atm.ox.ac.uk/user/iwi/charmap.html)
			'/à/','/á/','/â/','/ã/','/å/','/æ/','/ç/','/è/','/é/','/ê/','/ë/','/ì/','/í/','/î/','/ï/','/ð/','/ñ/','/ò/','/ô/','/õ/','/×/','/ø/','/ù/','/ú/','/û/','/ý/','/þ/','/ÿ/','/Ÿ/',

			'/№/','/“/','/”/','/«/','/»/','/„/','/@/','/%/', // other
			'/‘/','/’/','/`/','/´/','/º/','/ª/'
		);

		$sanitized_chars = array(
			'a','b','v','h', // cyrillic alphabet
			'd','e','zh','z','y',
			'j','k','l','m','n',
			'o','p','r','s','t',
			'u','f','h','c','ch',
			'sh','shh','','ju','ja',
			'a','b','v','h','d','e','zh',
			'z','y','j','k','l',
			'm','n','o','p','r',
			's','t','u','f','h',
			'c','ch','sh','sch',
			'','ju','ja',

			'g','g','je','je','i','i','ji','ji', // ukrainian
			'jo','jo','y','y','','','ye','ye', // russian
			'u','u', // belorussian
			'ae','ae','oe','oe','ue','ue','ss', // german
			'a','a','c','c','e','e','l','l','n','n','o','o','s','s','z','z','z','z', // polish
			'o','o','u','u', // hungarian
			'e','s','c','r','z','y','a','e','d','t','n','u','u',  // czech
			'e','s','c','r','z','y','a','e','d','t','n','u','u',

			'a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','d','n','o','o','o','x','o','u','u','u','y','p', // extra all
			'a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','d','n','o','o','o','x','o','u','u','u','y','p','y','y',

			'','','','','','','','', // other
			'','','','','o','a'
		);




$friendly_filename = preg_replace($original_chars, $sanitized_chars, $filename);

return $friendly_filename;

}

add_filter('sanitize_file_name', 'sa_sanitize_spanish_chars', 10);

?>
