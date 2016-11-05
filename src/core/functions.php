<?php
Namespace App\Core;

/**
*
*/
class Functions
{
	public static function getMedia($blocco, $array_fields) {
		if(isset($blocco->acf_fc_layout)) {
			if ($blocco->acf_fc_layout == 'slideshow' && isset($blocco->slideshow)) {
				foreach ($blocco->slideshow as $slide) {
					Self::getMedia($slide, $array_fields);
				}
			}
		}

		foreach ($array_fields as $field_name ) {
			if (isset($blocco->$field_name) && $blocco->$field_name != NULL) {
				$url = 'http://www.luovo.bio/wp-json/wp/v2/media/'.$blocco->$field_name;
				$media = json_decode(file_get_contents($url));
				$blocco->$field_name = $media->guid->rendered;
			}
		}
	}
}
