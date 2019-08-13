<?php
// code verion 1
$url='https://www.youtube.com/embed/IMJHc6CLbPM?width%3D640%26amp%3';
	$gurl=parse_url( $url);
	$pic=explode('/',$gurl['path']);
	$id=$pic[2];
$item_img='https://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
// show in html code
echo '<img src="'.$item_img.'">';
?>