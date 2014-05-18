<?php

require_once ('Database.php');
require_once ('SmartySingleton.php');

class Builder {
	
	private function build() {


		// clear everything (thumbs, photos, db table)

		// scan raw photos dir
		
		// copy photos to output dir (small resize ~ 1600)

		// create various thumbs and write them to output dir
		
		// fill database with this information
		
		// output info html to the user








		/*
		 * For thumbnails, we use Flickr size suffixes:
		 * "_t": thumbnail, 100px on longest side
		 * "_m": small, 240px on longest side
		 * "_n": small, 320px on longest side
		 * "" : medium, 500px on longest side
		 * "_z": medium 640, 640px on longest side
		 * "_c": medium 800, 800px on longest side
		 * "_b": large, 1024px on longest side
		 */

		$thumbsDir = $smarty -> getConfigVars('thumbs_directory');

		$subDir = $thumbsDir . basename($file);

		if (!file_exists($subDir)) {
			mkdir($subDir);

			foreach ($variable as $key => $value) {

			}
		}
	}

}
?>
