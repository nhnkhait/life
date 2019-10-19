<?php
set_time_limit (0);

// include '../libraries/DOM/DOM.php';

// function getDom($link)
// {
//     $ch = curl_init($link);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     $content = curl_exec($ch);
//     curl_close($ch);
// 	$dom = str_get_html($content);
	
//     return $dom;
// }

// function saveLink($filename, $content) {
// 	$pathfull = "$filename";
// 	$write = fopen($pathfull, "a");
// 	fwrite($write, ''.$content.'');
// 	fclose($write);
// }

// $dom2 = getDom('http://tuhaoviet.vn/dac-san-vung-mien-cp100.html');
// $getEle = $dom2->find('a[class=img_news fl-left mrl]');
// foreach ($getEle as $link) {
//     saveLink('tuhaoviet.txt', $link->href."\n");
// }

// echo 'GET LINK PAGE: 1 THANH CONG!'."\n";

// for ($i=2; $i <= 80; $i++) {
//     $dom2 = getDom('http://tuhaoviet.vn/dac-san-vung-mien-cp100-page'.$i.'.html');
//     $getEle = $dom2->find('a[class=img_news fl-left mrl]');
//     foreach ($getEle as $link) {
//         saveLink('tuhaoviet.txt', $link->href."\n");
//     }
//     echo 'GET LINK PAGE: '.$i.' THANH CONG!'."\n";
// }

// echo '---XONG HET---';

require '../libraries/DOM/DOM.php';
require 'process/config.php';

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

function fixContent($content) {
    $content = preg_replace('#<div class="wp_rp_wrap  wp_rp_vertical_m" id="wp_rp_first">(.*?)</div>#', '', $content);
    $content = preg_replace("/<div class=\"pd-rating\" id=\"(.*?)\"><\/div>/", '', $content);
    $content = preg_replace('/<ul.*?\/ul>/i','', $content);
    $content = preg_replace('/<article class="entry clr">/', '', $content);
    $content = preg_replace('/<div class="gallery .*? >/', '', $content);
    $content = preg_replace('/<div align="justify">/', '', $content);
    $content = preg_replace('/<div>/', '', $content);
    $content = preg_replace('/<\/div>/', '', $content);
    $content = preg_replace('/<\/article>/', '', $content);
    $content = preg_replace("/<a href=\"(.*?)\">/", '', $content);
    $content = preg_replace("/<\/a>/", '', $content);
    $content = preg_replace("/<p style=\"text-align: left;\" align=\"right\"><\/p>/", '', $content);
    $content = preg_replace("/<p><span.*?\/p>/", '', $content);
    $content = preg_replace("/<p><strong>.*?\/p>/", '', $content);
    $content = preg_replace("/<p><strong><span.*?\/p>/", '', $content);
	return $content;
}

$urls = 'tuhaoviet.txt';
$docf = file($urls);
// Đến 1060
for ($i = 0; $i < count($docf); $i++) {

    $url = trim($docf[$i]);

    $dom2 = getDom($url);

    $getEle = $dom2->find('h1[class=news-title pbm mbm]');
    foreach ($getEle as $element) {
        $cuisine_name = $element->plaintext;
    }

    $getEle = $dom2->find('h2[class=news-summary]');
    foreach ($getEle as $element) {
        $cuisine_summary = $element->innertext;
    }

    $getEle = $dom2->find('div[class=news-description mbm]');
    foreach ($getEle as $element) {
        $cuisine_description = $element->innertext;
    }

    $getEle = $dom2->find('div[class=news-description mbm] img');
    foreach ($getEle as $element) {
        $cuisine_img = $element->src;
        if ($cuisine_img == NULL) {
            $cuisine_image = 'photo-default.jpg';
        } elseif (filter_var($cuisine_img, FILTER_VALIDATE_URL)) {
            $cuisine_image = $cuisine_img;
        } else {
            $cuisine_image = 'http://tuhaoviet.vn'.$cuisine_img;
        }
        $temp = explode(".", $cuisine_image);
        $newFileName = 'photo-' . md5(time()) . '.' . end($temp);
        file_put_contents('../upload/'.$newFileName, file_get_contents($cuisine_image));
        $cuisine_image = $newFileName;
    }

    $time = date('Y-m-d H:i:s');
    $cxd = 'Chưa xác định';
    $sql    = "INSERT INTO cuisines (post_by_user, cuisine_source, cuisine_name, cuisine_description, cuisine_image, cuisine_summary, cuisine_location, post_at_time) VALUES (1, '$url', '$cuisine_name', '$cuisine_description', '$cuisine_image', '$cuisine_summary', 'Chưa xác định', '$time')";
    @mysqli_query($connectDB, $sql);
    
    echo $i . '/' . count($docf) . ' <---> ' . $url."\n";

}