### article php: http://phpdevenezuela.github.io/php-the-right-way/
### article about "empezar con Composer": https://www.acceseo.com/blog/como-usar-composer-aumentar-la-productividad-de-tu-equipo.html
### packagist (composer repository): https://packagist.org
### packagist monolog/monolog:       https://packagist.org/packages/monolog/monolog

### github
- monolog (logs): https://github.com/Seldaek/monolog
- mdf (pdf): https://github.com/mpdf/mpdf 

### directorio de proyecto
- $ cd C:\workspaces\frameworks\MAMP\htdocs\testeos-php7-composer

### creamos el archivo "composer.json" (dependencias)
- $ composer init 

### actualizamos composer
- $ composer self-update

### test1
- agregamos la dependencia "monolog" en "composer.json" y 
- la instalamos (se crea una nuevo subdirectorio: "vendor"):
- $ composer require monolog/monolog:1.*

### Importante ! : 
- se ha generado un fichero composer.lock que contendrá exactamente la versión descargada de cada una 
- de las dependencias. 
- Por ello cuando un nuevo miembro del equipo necesite participar en el proyecto se le pasarán los dos archivos
- de composer:  composer.json y composer.lock para que use (se descargue) exactamente las mismas versiones de las 
- dependencias que se están usando en este proyecto.

### creamos un script php para probar la nueva librería monolog: 
- $ copy con test1.php
- test1.php

### arrancamos un servidor local (php lo trae de serie):
- $ php -S localhost:8000

- http://localhost:8000/test1.php

### se crea el fichero "monolog.log" con los logs que hemos escrito.

## test2: 
### libreria pdf 
- $ composer require mpdf/mpdf
- test2.php




