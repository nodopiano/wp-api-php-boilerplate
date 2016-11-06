<?php
Namespace App\Controllers;

use App\Core\Controller;

/**
 *
 */
class HomeController extends Controller
{

    public function show() {

        // $page = $this->api->pages(61);
        return $this->twig->loadTemplate('index.html')->render(array('message' => 'Hello!'));

    }
    

    public function edit(){
        return $this->twig->loadTemplate('form.html')->render(array('message' => 'Hello!'));
    }
}
