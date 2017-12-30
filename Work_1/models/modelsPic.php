<?php
class Picture {	
	
	// public function downl ($ArrV) {
	public function downl () {
		$uploaddir = '../uploads/';
		$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);
		$fileend = '';
		echo $uploadfile;
		
		// $size = getimagesize ($uploadfile);
		// $fp = fopen($uploadfile, "rb");
		// if ($size && $fp) {
			// echo "<br>Ширина: " . $size[0] .'<br>'; 
			// echo "Высота: " . $size[1] .'<br>'; 
			// echo "Ширина и Высота: " . $size[3] .'<br>'; 
		// } else {
			// echo "Не удалось проверить резмер файла! <br />"; 
		// }
		// $width_orig = $size[0];
		// $height_orig = $size[1];
		// $width = 300;
		// $height = 300;
		// $tmp_name = $_FILES['myfile']['tmp_name'];
		// $image_p = imagecreatetruecolor($width, $height);
		// $image = ImageCreateFromPNG($tmp_name);		
		// if($size[0] > 300|| $size[1] > 300){
			// imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
			// imagepng($image_p,$tmp_name,0);
			// imagedestroy($image_p);
			// imageresize(" ",$uploadfile,320,240,75);
			// $this->resize(320,240);
			
		// }

		if($_FILES['myfile']['type'] == "image/jpeg" || $_FILES['myfile']['type'] == "image/jpg" || $_FILES['myfile']['type'] == "image/png" || $_FILES['myfile']['type'] == "image/gif"){	
			echo " OKKK JPEG";
		}
		if($_FILES['myfile']['type'] != "image/jpeg" || $_FILES['myfile']['type'] != "image/jpg" || $_FILES['myfile']['type'] != "image/png" || $_FILES['myfile']['type'] != "image/gif"){	
			echo " BEDJPEG";
			exit;
		}
		
		if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
			echo "Файл коректно загружен на сервер!\n";
			return true;
		}
		else {
			echo "Файл не загружен!\n";
			return false;
		}
		$size = getimagesize ($uploadfile);
		$fp = fopen($uploadfile, "rb");
		if ($size && $fp) {
			echo "<br>Ширина: " . $size[0] .'<br>'; 
			echo "Высота: " . $size[1] .'<br>'; `
			echo "Ширина и Высота: " . $size[3] .'<br>'; 
		} else {
			echo "Не удалось проверить резмер файла! <br />"; 
		}
	
	}
	
	public function imageresize($outfile,$infile,$neww,$newh,$quality) {
		$im=imagecreatefromjpeg($infile);
		$im1=imagecreatetruecolor($neww,$newh);
		imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));

		// imagejpeg($im1,$outfile,$quality);
		imagedestroy($im);
		imagedestroy($im1);
		echo "<br>WELL<br>";
    }
	public  function resize($width,$height) {
      $new_image = imagecreatetruecolor($width, $height);
      imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
      $this->image = $new_image;
   }
	
}
?>