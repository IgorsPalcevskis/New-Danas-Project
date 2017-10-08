<?php

$text = "danapole1980@gmail.com";

$my_img = imagecreate( 195, 45 );                             //width & height
$background  = imagecolorallocate( $my_img, 255,   255,   255 );
$text_colour = imagecolorallocate( $my_img, 0, 0, 0 );
$line_colour = imagecolorallocate( $my_img, 255, 255, 255 );
imagestring( $my_img, 4, 15, 25, $text, $text_colour );
imagesetthickness ( $my_img, 2 );
imageline( $my_img, 15, 45, 190, 45, $line_colour );

header( "Content-type: image/png" );
imagepng( $my_img );
imagecolordeallocate( $line_color );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );


?>