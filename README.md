# movies-app-back
app de peliculas

## Descripción

Este es un sistema de gestión de películas construido con Laravel en el backend y Vue en el frontend. Permite a los usuarios iniciar sesión, agregar, editar y eliminar películas. Los usuarios pueden ver una lista de películas y gestionar los datos asociados.

## Requisitos

- [XAMPP](https://www.apachefriends.org/index.html) (para PHP, MySQL y Apache)
- [Node.js](https://nodejs.org/) (para el frontend con Vue)
- [Composer](https://getcomposer.org/) (para manejar dependencias de PHP)

## Configuración del Backend

1. **Clonar el Repositorio**:
   ```bash
   git clone https://github.com/cristhianvr24/movies-app-back.git
   cd movies-app

2. **Instalar Dependencias de PHP**:
    ```bash
    composer install
3. **Configurar el archivo `.env`**:
   copiar el archivo `.env.example` a `.env`
   ```bash
   cp .env.example .env
4. **Generar la clave de la app**:
   ```bash
   php artisan key:generate
5. **Ejecutar Migraciones**:
   ```bash
   php artisan migrate
6. **Iniciar el servidor de desarrollo**:
   ```bash
   php artisan serve
   
El servidor deberia estar disponible en `http://localhost:8000`
