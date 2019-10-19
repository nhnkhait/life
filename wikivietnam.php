<?php
set_time_limit (0);

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

$urls = 'wikivietnam.txt';
$docf = file($urls);

for ($i = 0; $i < count($docf); $i++) {

    $url = trim($docf[$i]);

    $dom2 = getDom($url);

    $getEle = $dom2->find('h1[class=post-header-title]');
    foreach ($getEle as $element) {
        $cuisine_name = $element->plaintext;
    }

    $getEle = $dom2->find('article[class=entry clr]');
    foreach ($getEle as $element) {
        $cuisine_description = fixContent($element->outertext);
    }

    $getEle = $dom2->find('img[class=attachment-wpex-post size-wpex-post wp-post-image]');
    foreach ($getEle as $element) {
        $cuisine_image = $element->src;
        $temp = explode(".", $cuisine_image);
        $newFileName = 'photo-' . md5(time()) . '.' . end($temp);
        file_put_contents('../upload/'.$newFileName, file_get_contents($cuisine_image));
        $cuisine_image = $newFileName;
    }

    $getEle = $dom2->find('a[rel=category tag]');
    foreach ($getEle as $element) {
        $cuisine_location = substr($element->plaintext, 0, strlen($element->plaintext));
    }

    $time = date('Y-m-d H:i:s');

    $sql    = "INSERT INTO cuisines (post_by_user, cuisine_source, cuisine_name, cuisine_description, cuisine_image, cuisine_location, post_at_time) VALUES (1, '$url', '$cuisine_name', '$cuisine_description', '$cuisine_image', '$cuisine_location', '$time')";
    @mysqli_query($connectDB, $sql);
    
    echo $i . '/' . count($docf) . ' <---> ' . $url."\n";
}




