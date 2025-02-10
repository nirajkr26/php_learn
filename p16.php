<?php
// function revArr($arr){
//     $size = count($arr);
//     for ($i = 0; $size / 2; $i++) {
//         $temp = $arr[$i];
//         $arr[$i] = $arr[$size - 1 - $i];
//         $arr[$size - 1 - $i] = $temp;
//     }
//     return $arr;
// }
// $ab = [1, 2, 3, 4, 5, 6, 7];
// $rev = revArr($ab);
// print_r($rev);

// function removeEven($ab){
//     $arr = array_filter($ab, function($value) {
//         return $value % 2 != 0;
//     });
//     return $arr;
// }
// $filtered = removeEven($ab);
// print_r($filtered);

function listFiles($dir){
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file == "." || $file == "..") continue;
        $path = $dir.DIRECTORY_SEPARATOR.$file;
        if (is_dir($path)) {
            listFiles($path);
        } else {
            echo $path."\n";
        }
    }
}
// Corrected directory path to use forward slashes
listFiles("C:");
?>