<?php
// code verion 2
$url='https://www.youtube.com/watch?v=v80leBOVqTM';
    parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
    $id=$my_array_of_vars['v'];
$item_img='https://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
// show in html code
echo '<img src="'.$item_img.'">';

?>
