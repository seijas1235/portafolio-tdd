<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto Portafolio con Laravel, Livewire y TDD

Este es un proyecto de portafolio desarrollado con el framework PHP Laravel, utilizando Livewire para la interactividad del front-end y siguiendo la metodología de Desarrollo Guiado por Pruebas (TDD).

## Descripción

El proyecto tiene como objetivo proporcionar una plataforma para mostrar tus habilidades, proyectos y experiencia en un formato atractivo y fácil de navegar. Utiliza tecnologías modernas como Livewire para una experiencia de usuario interactiva y Laravel para la construcción del backend.

## Funcionalidades

- Registro e inicio de sesión de usuarios.
- CRUD (Crear, Leer, Actualizar, Eliminar) de proyectos.
- Visualización de proyectos en el portafolio.
- Interfaz de usuario intuitiva y atractiva.

## Requisitos

- PHP >= 8.1
- Composer
- Node.js y NPM
- MySQL

## Instalación

1. Clona el repositorio: `git clone https://github.com/tu_usuario/tu_proyecto.git`
2. Instala las dependencias PHP: `composer install`
3. Copia el archivo de configuración `.env.example` y renómbralo a `.env`
4. Genera una nueva clave de aplicación: `php artisan key:generate`
5. Configura tu base de datos en el archivo `.env`
6. Ejecuta las migraciones: `php artisan migrate`
7. Instala las dependencias de JavaScript: `npm install`
8. Compila los assets: `npm run dev`
9. Inicia el servidor de desarrollo: `php artisan serve`

## Uso

Una vez que hayas seguido los pasos de instalación, puedes acceder al proyecto en tu navegador ingresando a `http://localhost:8000`.

## Contribución

Si deseas contribuir al proyecto, sigue estos pasos:

1. Haz un fork del repositorio
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`)
3. Realiza tus cambios y haz commits (`git commit -am 'Agrega una nueva característica'`)
4. Haz push a la rama (`git push origin feature/nueva-caracteristica`)
5. Crea un nuevo Pull Request

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

---

¡Gracias por revisar nuestro proyecto! Si tienes alguna pregunta o sugerencia, no dudes en crear un issue o ponerte en contacto con nosotros.
