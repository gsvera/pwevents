<?php

    $path = '../assets/fotos/';
    $images = [];

    if($handler = opendir($path)){
        while(false !== ($file = readdir($handler))){
            array_push($images, $file);
        }
    }

    // echo json_encode($images;
    var_dump($images);
    