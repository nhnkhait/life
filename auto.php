<?php

include '../libraries/DOM/DOM.php';

function getDom($link)
{
    $ch = curl_init($link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $content = curl_exec($ch);
    curl_close($ch);
	$dom = str_get_html($content);
	
    return $dom;
}


$dom2 = getDom('https://www.cooky.vn/cong-thuc/salad-tom-sot-mayonnaise-42804/');
$text = $dom2->find('script[type=application/ld+json]', 2);
$string  = $text->innertext;

$string = json_decode($string, true);

//var_dump($string);
echo $string['description'];


