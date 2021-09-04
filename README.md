Ejecutar los siguientes comandos y configurar el archivo .env con los datos de la base de datos:

composer install
php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=InterestSeeder
php artisan passport:install

Se crearon seeds con usuarios de prueba y con los intereses de prueba también para ahorrar tiempo, los datos para ingresar son:

admin@gmail.com
password

admin2@gmail.com
password

admin3@gmail.com
password


