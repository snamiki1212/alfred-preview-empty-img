#!/usr/bin/php -f

<?php
$width = is_null($argv[1]) ? 500 : $argv[1];
$height = is_null($argv[2]) ? 500 : $argv[2];
$file_name = is_null($argv[3]) ? "result.png" : $argv[3];

$image = imagecreate($width, $height);

// Blue background and red text
$background_color = imagecolorallocate($image, 255, 255, 255);
// $font_color = imagecolorallocate($image, 255, 0, 0);

// Write the string and save to disk
// imagestring($image, 5, 10, 30, 'Nothing to install', $font_color);
imagepng($image, $file_name);

// return
$cwd = getcwd();
$full_path = "{$cwd}/{$file_name}";
echo $full_path
?>
