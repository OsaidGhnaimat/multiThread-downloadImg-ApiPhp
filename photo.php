<?php
extract($_GET);
$url=base64_decode($url);

// $url_to_image = 'https://jsonplaceholder.typicode.com/photos';
// $my_save_dir  = "./asset/img/api/";
$filename     = basename($url);               
$complete_save_loc = 'images/'.$filename;

file_put_contents($complete_save_loc, file_get_contents($url));

?>