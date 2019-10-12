<?php
[$filename, $timestamp] = $argv;
$timestamp = $timestamp ?: time();
echo "\n";
if(is_numeric($timestamp)){
    $date = date('Y-m-d H:i:s', $timestamp);
    echo $date, "\n";
    exec("printf '$date'| pbcopy");
    echo "\n", '已复制到剪贴板';
}else if($ts = strtotime($timestamp)){
        echo $ts,"\n";
        exec("printf '$ts'| pbcopy");
        echo "\n", '已复制到剪贴板';
    
}else{
    echo "\n", 'FAILED:未正确解析';
}
echo "\n";