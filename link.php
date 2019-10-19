<?php
set_time_limit (0);
// $id = intval($_GET['id']);
$id = 1;

include '../libraries/medoo.php';
include '../libraries/DOM/DOM.php';

$craw_link = $database->select('crawler', 'craw_url', ['id' => $id])[0];
$craw_rule = $database->select('crawler', 'craw_rule', ['id' => $id])[0];
$craw_rule = json_decode($craw_rule, true);

function getDom($link)
{
    $ch = curl_init($link);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch);
    curl_close($ch);
	$dom = str_get_html($content);
	
    return $dom;
}

function saveLink($filename, $content) {
	$pathfull = "$filename";
	$write = fopen($pathfull, "a");
	fwrite($write, ''.$content.'');
	fclose($write);
}

$dom2 = getDom($craw_link);
$getEle = $dom2->find('a[class=loop-entry-img-link]');
foreach ($getEle as $link) {
    saveLink('list-link.txt', $link->href."\n");
}

echo 'GET LINK PAGE: 1 THANH CONG!'."\n";

for ($i=2; $i <= 8; $i++) {
    $dom2 = getDom('http://wikivietnam.net/am-thuc/page/'.$i.'/');
    $getEle = $dom2->find('a[class=loop-entry-img-link]');
    foreach ($getEle as $link) {
        saveLink('list-link.txt', $link->href."\n");
    }
    echo 'GET LINK PAGE: '.$i.' THANH CONG!'."\n";
}

echo '---XONG HET---';



