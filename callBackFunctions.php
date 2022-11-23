<?php
function myCallBack($item){
    return strlen($item);
}

$string = ["Apple","Orange", "banana", "coconut"];
$length = array_map("myCallBack", $string);// array_map calculate every string in an array.
print_r($length);
?>