<?php
$my_str="Hello world\n";
echo count(explode(" ",$my_str));
echo "\n";
echo strlen($my_str);

// str_word_count
echo "\n".str_word_count($my_str);

//str_replace
echo "\n".str_replace("world","Peter",$my_str);

//

