Version Laravel 5.4

Luego de clonar y siguiente paso generar codigo Esto descargara la estructura base de la aplicación.Posteriormente se debe actualizar las dependencias de la herramienta para su correcto funcionamiento, para ello se debe ejecutar:




composer update 





Esto desargará todas las dependencias requeridas por la aplicación y generará todos los archivos de configuración correspondientes.


El siguiente paso es crear el archivo .env que contendrá la configuración de acceso a la aplicación, base de datos, correo electrónico, etc. Para esto copiamos el archivo .env.example con el nombre .env y se modifican los valores de las variables de configuración de acuerdo al entorno de instalación en donde hayamos instalado la aplicación.


Por defecto, cuando se descarga e instalan las dependencias del sistema, la clave única del sistema se encuentra vacía por lo que es necesario generarla con el siguiente comando:




php artisan key:generate 





El siguiente paso a realizar es la migración de la estructura de la base de datos, para lo cual se debe haber configurado correctamente el archivo .env (como se mencionó con anterioridad)


La migración de la estructura de la base de datos se realiza con el comando




php artisan migrate
