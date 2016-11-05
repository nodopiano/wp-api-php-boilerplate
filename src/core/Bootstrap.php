<?php
Namespace App\Core;

Use App\Core\Router;
Use App\Core\Request;
Use App\Core\Database\Connection;
Use App\Core\Database\QueryBuilder;
Use App\Core\App;

/**
 * Class Bootstrap
 * @author yourname
 */
class Bootstrap
{
 
    public static function boot()
    {
        // App::bind('database', new QueryBuilder(
            // Connection::make(App::get('config')['database'])
        // ));
        App::bind('api', require 'config/api.php' );
    }

}

