<?php
include("RollingCurlX.php");
$api_url = 'https://jsonplaceholder.typicode.com/photos';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$user_data = $response_data;
$RCX = new RollingCurlX(80 , "callback_functn" );

foreach ($user_data as $user) {

    $url_to_image = $user->url.".jpg";
    $my_save_dir  = "./asset/img/api/";
    $filename     = basename($url_to_image);
    $complete_save_loc = $my_save_dir.$filename;
    $url_to_image=base64_encode($url_to_image);
    
//     $ch = curl_init();
//    echo "http://localhost/apiPhoto/photo.php/".$url_to_image  ;
//     curl_setopt($ch, CURLOPT_URL,"http://localhost/apiPhoto/photo.php?url=".$url_to_image);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 0.1);

//     curl_setopt($ch, CURLOPT_POSTFIELDS,
//                 "postvar1=value1&postvar2=value2&postvar3=value3");
    

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
//     echo $server_output = curl_exec($ch);
// $url = "http://localhost/apiPhoto/photo.php?url=".$url_to_image;
// $post_data = ['user' => 'bob', 'token' => 'dQw4w9WgXcQ']; //set to NULL if not using POST
// //$user_data = ['foo', $whatever];
// $options = [CURLOPT_FOLLOWLOCATION => false];
// // $headers=array('AUTH','xx');
// function callback_functn($response, $url, $request_info, $time) {
//     $time; //how long the request took in milliseconds (float)
//     $request_info; //array returned by curl_getinfo($ch), plus a couple extras
// }
// //$RCX->addRequest($url, $post_data, 'callback_functn', NULL, $options, NULL);
// $RCX->addRequest($url, $post_data, 'callback_functn', NULL, $options, NULL);


//     // file_put_contents($complete_save_loc, file_get_contents("http://localhost:8000/employee/photoDownload/".$url_to_image));
// }

//$RCX->execute();
// $url = "http://localhost/apiPhoto/photo.php?url=".$url_to_image;
// $post_data = ['user' => 'bob', 'token' => 'dQw4w9WgXcQ']; //set to NULL if not using POST
// //$user_data = ['foo', $whatever];
// function callback_functn($response, $url, $request_info, $time) {
//     $time; //how long the request took in milliseconds (float)
//     $request_info; //array returned by curl_getinfo($ch), plus a couple extras
// }

// $RCX->addRequest($url, $post_data, 'callback_functn', NULL, $options, NULL);
// $RCX->execute();

//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
//     echo $server_output = curl_exec($ch);
// $url = "http://localhost/apiPhoto/photo.php?url=".$url_to_image;
// $post_data = ['user' => 'bob', 'token' => 'dQw4w9WgXcQ']; //set to NULL if not using POST
// //$user_data = ['foo', $whatever];
// $options = [CURLOPT_FOLLOWLOCATION => false];




    $url = "http://localhost/apiPhoto/photo.php?url=".$url_to_image;
    $post_data = ['user' => 'bob', 'token' => 'dQw4w9WgXcQ']; //set to NULL if not using POST
    //$user_data = ['foo', $whatever];
    $options = [CURLOPT_FOLLOWLOCATION => false];
    

    $RCX->addRequest($url, $post_data, 'callback_functn', NULL, $options, NULL);
    $RCX->setTimeout(10);


}
$RCX->execute();
// function callback_functn($response, $url, $request_info, $user_data, $time) {
//     $time; //how long the request took in milliseconds (float)
//     $request_info; //array returned by curl_getinfo($ch), plus a couple extras
// }
function callback_functn($response) {
        
} 
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sadsad</h1>
</body>
</html>