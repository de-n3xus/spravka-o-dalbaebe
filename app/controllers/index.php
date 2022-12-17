<?php
// 135 275
header('Content-type: image/png; charset=UTF-8');

$img = $_SERVER['DOCUMENT_ROOT'] . '/template.jpg';
$font = $_SERVER['DOCUMENT_ROOT'] . '/Montserrat_SemiBold.ttf';
$font_size = 15;
$degree = 0;
$text = rawurldecode($name);
$y = 300;
$pic = imagecreatefromjpeg($img);
$color = imagecolorallocate($pic, 0, 0, 0);

$symbols = mb_strlen($text, 'utf-8');

// 15
$i = 0;
$x = 225;
while($i <= $symbols)
{
    $i++;
    $x = $x - 5;
}

$temp_name = random_int(1000, 1000000);

imagettftext($pic, $font_size, $degree, $x, $y, $color, $font, $text);
imagepng($pic, $_SERVER['DOCUMENT_ROOT'] . '/' . $temp_name . '.png');
imagedestroy($pic);	

header('Content-Disposition: filename=Сегодняшний далбаеб - ' . $name . '.png');

readfile($_SERVER['DOCUMENT_ROOT'] . '/' . $temp_name . '.png');

unlink($_SERVER['DOCUMENT_ROOT'] . '/' . $temp_name . '.png');