<?php
$directory="D:\javascript huxn"; //Specify the directory
if(!is_dir($directory)){
    mkdir($directory,0777,true);

}

$files=scandir($directory);
if($files!==false){
    foreach($files as $file){
        if($file!="." && $file!=".."){
            echo "File: ".$file."<br>";
        }
    }
}else{
    echo "Failed to open directory";
}

?>