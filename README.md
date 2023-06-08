<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# LEVANTAR PROYECTO EN LARAVEL - WINDOWS

Para levantar el proyecto en __laravel__ primero debemos asegurarnos de tener instalado __PHP__ asi:
1. ejecutamos en *cmd*
```
php --version
```
Nos aseguramos que nos devuelva por por ejemplo: __PHP 8.2.4 (cli)__

2. Nos aseguramos tambien de tener instalado [composer](https://getcomposer.org/) podemos comprobar ejecutando en *cmd* lo siguiente:
```
composer --version
```
Nos deberá devolver por cosola por ejemplo: __Composer version 2.5.7__.

3. Descargamos el proyecto desde github en un **.zip** o clonamos directamente el repositorio con ```git clone https://github.com/jesus305/corallo.git```

4. Una vez tenemos el proyecto en nuestra computadora navegamos al proyecto por consola así: ```cd corallo``` por ejemplo:

5. Estando ubicados en el proyecto copiamos el archivo *.env-template* y lo renombramos como: *.env* y configuramos las variables de entorno que tenemos

6. Una vez tenemos los pasos anteriores listo vamos a la terminal y ejecutamos ```composer install```
7. Luego ejecutamos ```php artisan key:generate``` para generar una nueva clave de aplicación
8. Corremos las migraciones de la BD con el siguiente comando: ```php artisan migrate```
9. Como en esté proyecto usamos algunos modulos de node ejecutamos el siguiente comando ```npm install```
10. Una vez tenemos todo instalado ya tenemos listo nuestro proyecto para correrlo, entonces ejecutamos el comando en la terminal ```php artisan serve``` Por defecto, el servidor se ejecutará en ```http://localhost:8000```
11. En una nueva instancia de la terminal también corremos el siguiente comando para cargar el diseño que es: ```npm run dev```

Y listo finalmente tenemos el proyecto listo para iniciar a desarrollar

## Créditos: [ronaldo071515](https://github.com/ronaldo071515)