# movies-app-back
app de peliculas 
Configuración Rápida
1. Clonar el Repositorio
Clona el repositorio desde GitHub:

bash
Copiar código
git clone <URL_DEL_REPOSITORIO>
cd <NOMBRE_DEL_DIRECTORIO>
2. Instalar Dependencias
Instala las dependencias del proyecto:

bash
Copiar código
composer install
3. Configuración del Archivo .env
Copia el archivo .env.example y renómbralo a .env:

bash
Copiar código
cp .env.example .env
Configura las variables de entorno en el archivo .env, especialmente para la base de datos y la clave de aplicación.

4. Generar la Clave de Aplicación
Genera la clave de aplicación:

bash
Copiar código
php artisan key:generate
5. Migrar la Base de Datos
Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

bash
Copiar código
php artisan migrate
6. Ejecutar el Servidor de Desarrollo
Inicia el servidor de desarrollo:

bash
Copiar código
php artisan serve
El backend estará disponible en http://localhost:8000.
