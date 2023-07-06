<?php

$input1 = "SAIPPUAKIVIKAUPPIAS";
$input2 = "Aibohphobia";
$input3 = "Anna";
$input4 = "Civic";
$input5 = "My gym";
$input6 = "No lemon, no melon";

//ubah sesuai inputan yang ingin diinginkan
$input6 = strtolower(str_replace(' ', '', $input6));

$array = str_split($input6);


for ($i=0;$i<count($array);$i++){
    
    for($j= count($array)-$i-1;$j>=0;$j--){
        if($array[$i]==$array[$j]){
            $palindrome="ya";
        }else{
            $palindrome="tidak";
            break;
        }
        break;
    }
}

if($palindrome=="ya")
echo "true";
if($palindrome=="tidak")
echo "false";


?>