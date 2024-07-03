#TIENDA
Lo primero a hacer es verificar que tanto PHP, como composer este bien configurado (php -v, composer --version).

    Sino esta instalado composer ejecutas estos comandos
    - php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    - HASH="$(curl -sS https://composer.github.io/installer.sig)"
    - php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    - php composer-setup.php
    - php -r "unlink('composer-setup.php');"
    
    Despues se mueve a una ubicacion del sistema
    - sudo mv composer.phar /usr/local/bin/composer

    Una vez hecho esto, se ejecuta (composer install)

    Despues, en MacOS o Linux, se cambia los permisos de escritura de la carpeta cache dentro de writable (sudo chmod -R 777 writable/cache)

    Despues cree la BD cumpliendo con los requisitos solicitados (d: Clave primaria, autoincremental, nombre: VARCHAR(100), descripcion: TEXT, precio: DECIMAL(10,2), cantidad: INT)

    Se configura el env con los datos de conexion para la base de datos

    Despues cree el modelo de la tienda dentro de app/Models llamado ProductoModel que implementa la abstraccion de Modelo de CodeIgniter y contiene los metodos basicos del CRUD
    
    Despues se crea el controlador primario de Productos, el cual instancia el model de Producto, estructura de los datos a procesar y ejecuta los metodos contenidos en el modelo

    Despues hice una UI muy basica para que el usuario tenga una interfaz para usar

    Por ultimo implemente una validacion HTML basica para que ningun campo se fuera vacio.
