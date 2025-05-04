<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## Proyecto Laravel CRUD

Este proyecto consiste en un CRUD básico para mostrar un formulario funcional con el código.

**Instrucciones de Ejecución:**

1.  **Clonar el repositorio:** Utiliza el siguiente comando para obtener el código del proyecto:
    ```bash
    git clone <URL_del_repositorio>
    ```
    *(Reemplaza `<URL_del_repositorio>` con la dirección real de tu repositorio)*

2.  Después de clonar el repositorio, navega al directorio del proyecto en tu terminal:
    ```bash
    cd nombre_del_proyecto
    ```
    *(Reemplaza `nombre_del_proyecto` con el nombre de la carpeta que se creó al clonar el repositorio)*

3.  Instala las dependencias de PHP utilizando Composer:
    ```bash
    composer install
    ```
    Este comando descargará e instalará todas las librerías y paquetes de los que depende el proyecto, definidos en el archivo `composer.json`.

4.  **Ejecutar los servidores:** Abre dos terminales en la raíz del proyecto.
    * **Terminal 1 (PHP):** Ejecuta el siguiente comando para iniciar el servidor de desarrollo de Laravel:
        ```bash
        php artisan serve
        ```
    * **Terminal 2 (Vite):** Ejecuta el siguiente comando para compilar los assets y habilitar la recarga en caliente:
        ```bash
        npm run dev
        ```

5.  **Acceder a la aplicación:** Una vez que ambos servidores estén corriendo, dirígete a la dirección que se muestra en la terminal donde ejecutaste `php artisan serve` (normalmente `http://localhost:8000`) en tu navegador web.
