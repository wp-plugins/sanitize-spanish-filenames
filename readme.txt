=== Clean Filenames ===
Contributors: samuelaguilera
Tags: utf-8, spanish, international characters, filename, nombre archivo, español, acentos, sanitize, cleanup, upload, media library, hebrew, cyrillic
Requires at least: 3.0
Tested up to: 4.2.2
Stable tag: 1.0.8
License: GPL2

Removes or replace international or special characters that can make your filenames not compliant with some servers or services.     

== Description ==

= Features =

= Makes three tasks for getting cleaner and safe to use filenames =

* Removes or replace special/international characters that can make your filenames not compliant with servers that don't have support for international locales and filenames, or third-party services. (e.g. 'España.png' will become 'Espana.png', 'prüfen' will become 'prufen').
* Replaces any '+' in the filename with '-' (e.g. 'A+nice+picture.png' will become 'A-nice-picture.png').
* Replaces any '.' character before the one used for file extension with '-'(e.g. 'A.nice.picture.png' will become 'A-nice-picture.png').
* After running all character replacement filters, a last filter is applied to ensure that the filename only contains letters, numbers, underscores, dashes, and dots. Any other character will be removed from the filename.

This reduces problems with some servers, services, plugins... That may have problems handling filenames with special or international characters.

The plugin does his job during file upload process, so it'll change only filenames for files being uploaded after plugin activation.

It supports characters from belarusian, cyrillic alphabet, czech, german, hebrew, hungarian, russian, polish, spanish, ukrainian, and some other special characters (e.g. №, @, $, etc.)

= Requirements =

* WordPress 3.0 or higher
    	
== Installation ==

* Simply install from your WP dashboard or upload it using FTP, and install. No configuration needed.

== Frequently Asked Questions ==

= Will change filenames for files uploaded beftore activating the plugin? =

No. The plugin does his job during file upload process, so it'll change only filenames for files being uploaded after plugin activation.
                                  
== Changelog ==

= 1.0.8 =

* Added support for Hebrew (letters will be replaced, puntuation and ligatures will be removed). e.g. 'א' will be replaced by 'a', and 'װ' will be removed from the filename.
* After running all character replacement filters, a last filter is applied to ensure that the filename only contains letters, numbers, underscores, dashes, and dots. Any other character will be removed from the filename.

= 1.0.6 =

* Plugin name changed from Sanitize Spanish Filenames to Clean Filenames to better reflect actual purpose of the plugin (originally it was created only for spanish characters).
* Changed readme content and language.

= 1.0.5 =

* Added: Replaces any '.' character in the filename except for last one (for file extension) with '-'.

= 1.0.4 =

* Added: Replaces any '+' in the filename with '-'.

= 1.0.3 =

* Many more characters and some symbols added. Cleaning not only spanish characters but from other languages too.

= 1.0.2 =

* Fixed a little bug that causes 'º' replaced by 'a' instead of 'o', and same problem for 'ª'.

= 1.0.1 =

* Added characters ü Ü º ª that will be replaced with u U o a

= 1.0 =

* Initial release.

== Upgrade Notice ==

= 1.0.5 =

* Added: Replaces any '.' character in the filename except for last one (for file extension) with '-'.

= 1.0.4 =

* Added: Replaces any '+' in the filename with '-'.

= 1.0.3 =
Recommended upgrade.


