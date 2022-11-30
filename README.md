# Proyecto SPA
<p>Proyecto de una SPA con Laravel y Vue.js para una prueba técnica de Europe Language Jobs</p>

<h2>Explicación:</h2>
<p>Para este proyecto me ha basado en una protectora de perros que rescata perros abandonados o maltratados y necesita una aplicación web para gestionar su perrera. En la página principal pueden ver todos los perros que tienen, una imagen del perro, su nombre, el sexo, el tamaño, la raza, el color, si está adoptado o no y la fecha en la que fue encontrado.</p>
<p>También pueden añadir un nuevo perro o eliminarlo. Quería hacer que también se pudiese editar la información de un perro, pero por culpa de la falta de tiempo y que es mi primer proyecto con vue.js no he podido acabar de desarrollarlo. Esta semana seguiré con esta parte del proyecto, aunque ya no cuente para la prueba para aprender más sobre vue.js</p>

<h2>Instalación:</h2>
<p>El proyecto está realizado con Laravel 8 utilizando Laragon para las rutas y la base de datos y Vue.js<p>
<ol>
    <li>Tener Laragon</li>
    <li>Descargar/Copiar el directorio</li>
    <li>Crear la conexión con las BD utilizando HeidiSQL(Laragon), los datos de conexión con la BD los encontraras en el fichero .env</li>
    <li>Crear una base de datos llamada spa</li>
    <li>Ejecutar las migraciones con el comando php artisan migrate</li>
    <li>Ejecutar los ficheros SQL empezando por el insertSizes.sql, luego insertSexes.sql y por último insertDogs.sql</li>
    <li>Inicializar Laragon y acceder utilizando el navegador a la URL: http://spa.test/</li>
</ol>
