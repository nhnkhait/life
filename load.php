<?php
set_time_limit (0);
$type = addslashes($_GET['action']);

$connectDB = mysqli_connect('localhost', 'house86_quyet', 'l-O^HvY-Ck+.', 'house86_db') or die('Connection failed!');
@mysqli_set_charset($connectDB, 'utf8');
@date_default_timezone_set("Asia/Ho_Chi_Minh");

include 'simple_html_dom.php';

function getDom($link)
{
    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
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

switch ($type) {
    case "getlink":
        
        $dom2 = getDom('https://uma.vn/vi/san-pham/ban/ban-ca-phe.html?p=5');
        $getEle = $dom2->find('div[class=product-name text-uppercase] a');
        foreach ($getEle as $result) {
            saveLink('uma.txt', $result->href."\n");
        }
        echo 'GET LINK XONG!';

        break;

    case "getcontent":
        
        $urls = 'uma.txt';
        $docf = file($urls);
        $xlay = fopen('session.txt',"w");
        $batdau = file_get_contents('session.txt');
        if(empty($batdau)){ $batdau = 0; }

        for ($i = $batdau; $i < count($docf); $i++) {
            fwrite($xlay, $i);

            $url = trim($docf[$i]);
        
            $dom2 = getDom($url);
        
            $getEle = $dom2->find('div[class=product-function]');
            foreach ($getEle as $element) {
                $name = $element->plaintext;
            }
        
            $getEle = $dom2->find('div[class=product-name text-uppercase]');
            foreach ($getEle as $element) {
                $type = $element->plaintext;
            }
        
            $getEle = $dom2->find('span[class=price]');
            foreach ($getEle as $element) {
                $price = $element->plaintext;
            }
        
            $getEle = $dom2->find('div[class=images-slider] img');
            foreach ($getEle as $element) {
                $image = $element->src;
            }

            $getEle = $dom2->find('div[class=description]');
            foreach ($getEle as $element) {
                $description = $element->plaintext;
            }

            echo $name;

            $sql    = "INSERT INTO tbl_sofa (sofa_name, sofa_image, sofa_type, sofa_price, sofa_description) VALUES ('$name', '$image', '$type', '$price', '$description')";
            @mysqli_query($connectDB, $sql);
            
        }

        echo 'GET NOI DUNG OK';

        break;
    default:

        echo 'XIN MOI CHON: <a href="?action=getlink" >GET LINK</a> | <a href="?action=getcontent" >GET CONTENT</a>';

}



