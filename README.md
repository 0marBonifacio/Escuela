Intalación
========================

1) Instalación de la base de datos
----------------------------------

Crear un directorio llamado "escuela" sin comillas en el directorio del
servidor web y clonar el contenido:

	git https://github.com/0marBonifacio/Escuela


2) Instalación de la base de datos
----------------------------------

Importar la estructura de la base de datos que se encuentra en el directorio
db.

Por ejemplo:

	mysql -uroot -p < rutadelservidor/escuela/db/db.sql

3) Ejecución del sistema
-------------------------------------

Acceder al directorio de la aplicación mediante un navegador web, por ejemplo:

	http://localhost/escuela/web/

Recuerde cambiar localhost por el nombre de dominio o la dirección ip del servidor.

