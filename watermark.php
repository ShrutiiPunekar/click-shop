<?php
// Load the stamp and the photo to apply the watermark to
$stamp = imagecreatefrompng('images/share2_btn.png');
$im = imagecreatefromjpeg('images/bag4.jpg');

// Set the margins for the stamp and get the height/width of the stamp image
$marge_right =30;
$marge_bottom =30;
$sx = imagesx($stamp);
$sy = imagesy($stamp);



// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

// Output and free memory
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?
*01
