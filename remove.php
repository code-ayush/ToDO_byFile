<?php
    $collection=[];
    
    $file = file_get_contents("data.txt");

    $collection = unserialize($file);

    
    $i=$_REQUEST['index'];
    array_splice($collection,$i,1);


    $file = serialize($collection);

    file_put_contents("data.txt",$file);

    header("Location: {$_SERVER['HTTP_REFERER']}");
?> 