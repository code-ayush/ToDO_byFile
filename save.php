<?php
    $text = $_POST["text"];
    $collection=[];

    $file = file_get_contents("data.txt");

    if($file==''){
        file_put_contents("data.txt","a:0:{}");
        $file = file_get_contents("data.txt");
        $collection = unserialize($file);
    }
    else{

    $collection = unserialize($file);
    }

    
    array_push($collection, ['caption' => $text, 'isCompleted' => false]);
    
    $file = serialize($collection);

    file_put_contents("data.txt",$file);


    header("Location: {$_SERVER['HTTP_REFERER']}");
?>