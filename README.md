# CRUD - Gestión de Notas (Tareas) | Note - Proyecto Laravel 11 - Materialize

Este es un proyecto para la gestión de notas (Tareas), permite crear, listar, actualizar y eliminar una nota, tarea o actividad,  esta creado con Laravel 11 y utiliza Materialize para el diseño. A continuación, se detallan algunas de las características y convenciones utilizadas en el desarrollo de este proyecto.

## Características

- **Rutas Dinámicas**: El proyecto utiliza rutas dinámicas para gestionar las diferentes URLs de la aplicación.
- **Controlador Liviano**: Se sigue el principio de controladores livianos, donde la lógica de negocio se mantiene mínima en los controladores.
- **Custom Requests**: Se utilizan Custom Requests para la validación de datos, asegurando que los datos sean validados antes de llegar al controlador.
- **Tipado de Datos**: Se hace uso del tipado de datos para garantizar la integridad de los datos y facilitar la detección de errores.
- **Tratamiento de Errores y Mensajes de Error**: Se implementa un manejo robusto de errores y se muestran mensajes de error personalizados.
- **Mensajes Flash**: Se utilizan mensajes flash para proporcionar retroalimentación al usuario sobre acciones satisfactorias.

## Instalación

Para instalar y ejecutar este proyecto en tu entorno local, sigue estos pasos:

1. Clona este repositorio:
    ```bash
    git clone https://github.com/pgonzalesmv/notes-app.git
    ```

2. Navega al directorio del proyecto:
    ```bash
    cd notes-app
    ```

3. Instala las dependencias de Composer:
    ```bash
    composer install
    ```

4. Copia el archivo de configuración de entorno:
    ```bash
    cp .env.example .env
    ```

5. Configura tu base de datos en el archivo `.env`.

6. Ejecuta las migraciones:
    ```bash
    php artisan migrate
    ```
7. Inicia el servidor de desarrollo:
    ```bash
    php artisan serve
    ```