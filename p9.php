<?php
$cars= array("alto"=>500,"volvo"=>900);
foreach($cars as $key=>$value){
    echo $key." is equal to ".$value."\n";
}

for($i=1;$i<4;$i++){
    for($j=1;$j<4;$j++){
        echo "$i $j\n";
        if($i==2 && $j==2) break;
    }
}
