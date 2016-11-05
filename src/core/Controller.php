<?php
Namespace App\Core;

use App\Core\Functions;
use Twig_Autoloader;
use Twig_Loader_Filesystem;
use Twig_Environment;
use App\Core\QueryBuilder;
use App\Core\Repositories\ApiRepository;

/**
 *
 */
class Controller
{

    protected $functions;
    protected $api;

    function __construct()
    {
        $this->functions = new Functions;
        Twig_Autoloader::register();
        $this->twig = new Twig_Environment(new Twig_Loader_Filesystem('../src/views'));
        $this->api = new ApiRepository(App::get('api')['driver']);
    }

    public function show()
    {
        return 'Ciao, Mondo!';
    }
}
