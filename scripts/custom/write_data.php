<?php

    $post_data = json_decode(file_get_contents('php://input'), true);

    $name = "./data/".$post_data['filename'].".csv"; 
    $data = $post_data['filedata'];

    // Write the file to disk
    file_put_contents($name, $data);
?> 
