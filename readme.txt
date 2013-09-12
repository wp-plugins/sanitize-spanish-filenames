=== Sanitize Spanish Filenames ===
Contributors: samuelaguilera
Donate link: http://www.samuelaguilera.com
Tags: utf-8, spanish, international characters, filename, nombre archivo, español, acentos, sanitize
Requires at least: 3.0
Tested up to: 3.6.1
Stable tag: 1.0.3
License: GPL2

Filtra el nombre de los archivos sutituyendo o eliminando los carácteres especiales que contengan.

== Description ==

Filtra el nombre de los archivos que se suben a la librería multimedia (no afecta a los archivos ya subidos), sutituyendo los siguientes caracteres:

а б в г д е ж з и й к л м н о п р с т у ф х ц ч ш щ ь ю я ґ є і ї ё ы ъ э ў ą ć ę ł ń ó ś ź ż à á â ã ä å æ ç è é ê ë ì í î ï ð ñ ò ó ô õ ö × ø ù ú û ü ý þ ÿ ß ő ű ě š č ř ž ý á é ď ť ň ú ů

Por alternativas que no causen las incompatibilidades que los carácteres especiales suelen provocar en los nombres de archivo.

= Requirements =

* WordPress 3.0.x o superior (puede que funcione en versiones anteriores, pero no está probado)
    	
== Installation ==

* Extrae el contenido de archivo zip y súbelo al directorio <code>wp-content/plugins/</code> de tu WordPress (también lo puedes instalar directamente desde tu WordPress) y después activa la extensión, no tiene página de opciones.

== Frequently Asked Questions ==

= ¿Esta extensión sirve para versiones anteriores a WordPress 3.0? =

Puede. Pero no ha sido probado. Funcionará siempre que el filtro y la función sanitize_file_name funcionen tal y como lo hacen en la rama 3.x

= ¿Tienes previsto añadir otras funciones? =

En principio no. Pero si se te ocurre alguna forma de mejorar esta extensión, puedes contactar conmigo a través del formulario de contacto que encontrarás en mi web.

= Tengo muchos archivos ya subidos con carácteres especiales, ¿los modificará? =

No. El filtro que realiza esta extensión se realiza durante la subida del archivo, y por tanto no afectará a los archivos subidos antes de activar la extensión.
                                  
== Changelog ==

= 1.0.3 =

* Ampliado extensamente el juego de carácteres que se filtran. Limpiando así no sólo carácteres españoles sino de otros idiomas y algunos símbolos.

= 1.0.2 =

* Arreglado un pequeño fallo por el cual el caracter º se sustituia por 'a' en lugar de 'o', y el caracter ª también tenían intercambiado el caracter de sustitución.

= 1.0.1 =

* Añadidos los caracteres ü Ü º ª que serán sustituidos por u U o a

= 1.0 =

* Lanzamiento inicial.

== Upgrade Notice ==

= 1.0.3 =
Actualización recomendada.


