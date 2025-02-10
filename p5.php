<?php 
$file=fopen("abc.txt","w") or die("Unable to open file");
fwrite($file,"hello");
fclose($file);
$file=fopen("abc.txt","r");
echo("File content is ".fgets($file)."<br>");
fclose($file);

$abc=array("modi","yogi");
print_r($abc);

