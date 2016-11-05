<?php
Namespace App\Core;

use App\Core\Functions;
use Twig_Autoloader;
use Twig_Loader_Filesystem;
use Twig_Environment;



/**
*
*/
class Controller
{

	protected $functions;

	function __construct()
	{
		$this->functions = new Functions;
		Twig_Autoloader::register();
		$this->twig = new Twig_Environment(new Twig_Loader_Filesystem('../src/views'));
	}

	public function show()
	{
		return 'Ciao, Mondo!';
	}
}