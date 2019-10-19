<?php
set_time_limit (0);
include '../libraries/medoo.php';

$count = $database->count('cuisines');

for ($i = 1; $i <= $count; $i++) {
    $image = $database->select('cuisines', 'cuisine_image', ['id' => $i])[0];
    $fileSize = filesize('../upload/'.$image);
    if (getimagesize($image) === false) {
        unlink($image);
        $database->delete('cuisines', ['id' => $i]);
        echo $i.'da duoc xoa...'."\n";
    }
}