<?php
Namespace App\Controllers;

use Nodopiano\Corda\Controller;

class HomeController extends Controller
{

  public function show()
  {
    $data = $this->api->pages(getenv('API_PAGE_ID'));
    return view('index.html',array('data' => $data, 'message' => 'Hello!'));
  }

  public function page($id)
  {
    return json($this->api->pages($id));
  }

  public function edit()
  {
    return view('form.html',array('message' => 'Hello!'));
  }
}
