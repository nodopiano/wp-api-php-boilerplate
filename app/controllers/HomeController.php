<?php
Namespace App\Controllers;

use Nodopiano\Corda\Controller;

/**
 *
 */
class HomeController extends Controller
{

    public function show() {
        return view('index.html',array('message' => 'Hello!'));

    }

    public function apiDemo() {
      return $this->api->pages(61,true);
    }

    public function edit(){
        return view('form.html',array('message' => 'Hello!'));
    }
}
