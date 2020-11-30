# Control de horas extra
## Sistema web que permite gestionar y calcular la información de pago de horas extra por rangos de tiempo laborados.

La aplicación permite configurar los rangos de tiempo laborados y los valores a pagar segun dichos rangos. Cuando se registran nuevas horas extra la aplicación calcula el monto a pagar según los rangos de tiempo configurados.

### Instalación

1. Instalación base.

        git clone https://github.com/rmirandasv/overtimes
        cd overtimes
        composer install
2. Renombrar archivo de configuración .env.example como .env.

        mv .env.example .env

3. Editar configuración (.env) según convenga y configurar conexión a base de datos.

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel
        DB_USERNAME=root
        DB_PASSWORD=
4. Correr migraciones y poblar configuración basica de la aplicación a nivel de base de datos.

        php artisan migrate:install
        php artisan migrate
        php artisan db:seed
        php artisan serve
5. Iniciar sesión con usuario **manager** y password **secret**

![Login page](http://rs.ronaldmirandaweb.com/ologin.png)

![Login page](http://rs.ronaldmirandaweb.com/ousers.png)


