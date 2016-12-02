<?php
Namespace App\Controllers;

use Nodopiano\Corda\Controller;

class HomeController extends Controller
{

  public function show()
  {
    $data = $this->api->pages(6);
    return view('index.html',array('data' => $data, 'message' => 'Hello!'));
  }

  public function page($id)
  {
    return json($this->api->pages($id));
  }

  public function apiDemo() {
    return json($this->api->pages(61));
  }

  public function edit()
  {
    return view('form.html',array('message' => 'Hello!'));
  }
}
