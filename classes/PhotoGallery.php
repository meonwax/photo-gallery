<?php

require_once ('SmartySingleton.php');

class PhotoGallery {

	public function display() {
			
		$images = array();
		$thumbs = array();

		$smarty = SmartySingleton::instance();
		$smarty -> configLoad('gallery.conf', 'images');

		$imagesDir = $smarty -> getConfigVars('images_directory');
		//$thumbsWidth = $smarty->getConfigVars('thumbs_width');
		//$thumbsHeight = $smarty->getConfigVars('thumbs_height');
		
		
		// TODO: read photos and thumbs from database

		if ($photosHandle = opendir($imagesDir)) {

			while (false !== ($file = readdir($photosHandle))) {

				//~ var_dump(filetype($file));

				if ($file != "." && $file != ".." && $imageSize = getimagesize($imagesDir . $file)) {

					// Check if thumbnail already exists
					if (!file_exists($thumbsDir . $file)) {

						//~ $exif = exif_read_data($imagesDir.$file);
						//~ if($exif && isset($exif['Orientation'])) {
						//~ var_dump($exif['Orientation']);
						//~ }

						// Calculate resize ratios for resizing
						$ratioW = $thumbsWidth / $imageSize[0];
						$ratioH = $thumbsHeight / $imageSize[1];

						// Smaller ratio will ensure that the image fits in the view
						$ratio = $ratioW < $ratioH ? $ratioW : $ratioH;

						// Determine the width and height of the thumbnail
						$width = $imageSize[0] * $ratio;
						$height = $imageSize[1] * $ratio;

						// Open hires image
						$photo = imagecreatefromjpeg($imagesDir . $file);

						// Create a thumbnail
						$thumb = imagecreatetruecolor($width, $height);

						// Resize the image to thumbnail size
						imagecopyresampled($thumb, $photo, 0, 0, 0, 0, $width, $height, $imageSize[0], $imageSize[1]);

						imagejpeg($thumb, $thumbsDir . $file, 100);
					}

					// Add to assoc array
					$images[$thumbsDir . $file] = $imagesDir . $file;
				}
			}

			closedir($photosHandle);
		}

		$smarty -> assign('images', $images);
		$smarty -> assign('thumbs', $thumbs);

		$smarty -> display('index.tpl');
	}
}
?>
