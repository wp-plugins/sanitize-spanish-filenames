=== Sanitize Spanish Filenames ===
Contributors: samuelaguilera
Donate link: http://www.samuelaguilera.com
Tags: utf-8, spanish, international characters, filename, nombre archivo, español, acentos
Requires at least: 3.0
Tested up to: 3.1.1
Stable tag: 1.0.1

Filtra el nombre de los archivos sutituyendo los caracteres áéíóúüñºª y ÁÉÍÓÚÜÑ por aeiouunoa y AEIOUUN respectivamente.

== Description ==

Filtra el nombre de los archivos que se suben a la librería multimedia, sutituyendo los caracteres áéíóúüñºª y ÁÉÍÓÚÜÑ por aeiouunoa y AEIOUUN respectivamente.

Esto hace que los nombres de los archivos sean más "amigables" con algunos servidores o incluso algunas extensiones de WordPress que no se llevan bien con los nombres de archivos que contienen carácteres internacionales como los usados en el idioma español.

= Requirements =

* WordPress 3.0.x o superior (puede que funcione en versiones anteriores, pero no está probado)
    	
== Installation ==

* Extrae el contenido de archivo zip y súbelo al directorio <code>wp-content/plugins/</code> de tu WordPress (también lo puedes instalar directamente desde tu WordPress) y después activa la extensión, no tiene página de opciones.

== Frequently Asked Questions ==

= ¿Esta extensión sirve para versiones anteriores a WordPress 3.0? =

Puede. Pero no ha sido probado. Funcionará siempre que el filtro y la función sanitize_file_name funcionen tal y como lo hacen en la rama 3.x

= ¿Tienes previsto añadir otras funciones? =

En principio no. Pero si se te ocurre alguna forma de mejorar esta extensión, puedes contactar conmigo a través del formulario de contacto que encontrarás en mi web.
                                  
== Changelog ==

= 1.0.1 =

* Añadidos los caracteres ü Ü º ª que serán sustituidos por u U o a

= 1.0 =

* Lanzamiento inicial.


