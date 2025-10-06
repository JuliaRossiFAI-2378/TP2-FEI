<h3>Guía de instalación</h3>

Para poder ejecutar este proyecto se requieren las siguientes herramientas:

- Un editor de código, recomendamos [Visual Studio Code](https://code.visualstudio.com/)

- [Git](https://git-scm.com/), el sistema de control de versiones

- [Node.js](https://nodejs.org/en), un entorno JavaScript

- [Composer](https://getcomposer.org/), una herramienta de gestión de dependencias en PHP

- [XAMPP](https://www.apachefriends.org/es/index.html), sistema de gestión de bases de datos MySQL, servidor web Apache y los intérpretes para lenguajes de script PHP

<br/>

Una vez instaladas las herramientas ejecutar el editor de codigo, abrir una terminal y seguir los pasos:

<br/>
Guia de instalacion de wordpress:
<br/><br/>
1. Ubicar la terminal en el directorio deseado para instalar el proyecto y clonar el repositorio ejecutando en consola el comando:
<br/><br/>
<b>IMPORTANTE: si bien la carpeta "laravel" puede ser instalada en cualquier directorio, el resto de los archivos 
deben ser ubicados en una carpeta llamada "wordpress" dentro del directorio "htdocs" de xampp (normalmente la ubicacion del mismo es
C:\xampp\htdocs).</b><br/><br/>

```bash
git clone https://github.com/JuliaRossiFAI-2378/TP2-FEI.git
```
2. Modificar el nombre de la carpeta "TP2-FEI" a "wordpress".

3. Abrir el panel de XAMPP e iniciar los servicios "Apache" y "MySql".

4. Dirigirse a "localhost/phpmyadmin".

5. Dirigirse al boton de "Importar" y seleccionar el archivo "wordpress.sql" para importar la base de datos.

6. Dirigirse a "localhost/wordpress" para utilizar el sitio.

<br/>
Guia de instalacion del proyecto en laravel: 
<br/>

1. Ubicar la terminal en la carpeta "laravel".

2. Instalar las dependencias de composer necesarias para el proyecto ejecutando el comando:

```bash
composer install
```

3. Instalar las dependencias de node necesarias para el proyecto ejecutando el comando:

```bash
npm install
```

4. Configurar el archivo <i><b>.env</b></i>, para esto se recomienda copiar el archivo <i><b>.env.example</b></i> pegarlo en la raíz del proyecto y cambiarle el nombre a <i><b>.env</b></i>. Para hacer esto ejecutar el comando:

```bash
cp .env.example .env
```

5. En el mismo archivo <i><b>.env</b></i> cambiar la linea que dice "APP_URL" para que quede lo siguiente
```bash
APP_URL=http://localhost:8000/
```

6. Generar la clave de la aplicación:

```bash
php artisan key:generate
```

7. En caso de que lo haya cerrado, abrir el panel de XAMPP e iniciar los servicios "Apache" y "MySql".

8. Migrar la base de datos ejecutando el comando:

```bash
php artisan migrate
```

9. Laravel pregunta si desea crear la base de datos, conteste:

```bash
yes
```

10. Poblar la base de datos:

```bash
php artisan db:seed
```

11. Utilizar el siguiente comando:

```bash
npm run build
```

12. Para correr la aplicacion utilice el siguiente comando y luego dirigase a "localhost:8000/"

```bash
composer run dev
```

<br/>
<br/>
