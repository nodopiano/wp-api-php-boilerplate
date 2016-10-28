<?php
  
  require_once 'assets/vendor/autoload.php';

  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem('assets/views');
  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate('index.html');

  $page = 'URL';

  $page = json_decode($page_url);

  echo $template->render(array('data' => $page));

?>
