#parques IDRD

Instalacion:

1. En composer.json agregar:

```json
"require": {
    "idrd/parques": "dev-master"
}
```

2. Realizar composer update;

En config/app agregar:

```php
'providers' => [
	...
    Idrd\Parques\ParquesServiceProvider::class,
]
```

3. Ejecutar 'php artisan vendor:publish' para que se copien los archivos de configuración y vistas al proyecto.

config/parques.php

4. Crear modelo de Parque extender el modelo del modulo de parques.

Para crear el modelo ejecutar php artisan make:model Documento y extender el modelo respectivo del paquete.

```php
namespace App;

use Idrd\Parques\Repo\Parque as MParque;

class Parque extends MParque
{
    //
}

4. Crear una conexión nueva que apunte a la base de datos de parques en el archivo de configuración (config/database.php): 

```php
'connections' => [
    'mysql' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST', 'db_modulo'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'database'),
        'username' => env('DB_USERNAME', 'user'),
        'password' => env('DB_PASSWORD', 'pass'),
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => null,
    ],

    'db_parques' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST', 'db_parques'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'database'),
        'username' => env('DB_USERNAME', 'user'),
        'password' => env('DB_PASSWORD', 'pass'),
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => null,
    ]
],
```

5. Editar el archivo de configuración de parques (config/parques.php)

```php
return array( 
  'conexion' => 'db_parques',
  'modelo_parque' => 'App\Parque'
);
```
