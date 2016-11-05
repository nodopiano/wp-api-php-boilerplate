<?php
Namespace App\Controllers;

use App\Core\Controller;

/**
*
*/
class HomeController extends Controller
{

	public function show() {

		$page_url = file_get_contents('http://www.luovo.bio/wp-json/wp/v2/pages/61');
		$page = json_decode($page_url);
		$campi = array('txtimg_img', 'double_img', 'slide_image');
		foreach ($page->acf->page as $block) {
			$this->functions::getMedia($block, $campi);
		}
		return $this->twig->loadTemplate('index.html')->render(array('data' => $page));

	}
}
