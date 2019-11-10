<?php
    $json_string= file_get_contents("https://content.guardianapis.com/search?api-key=41822d18-a45b-4018-8bcf-752e4ee29f66");
    
    $data = json_decode($json_string, TRUE);


    echo '<pre>';
    print_r($data["response"]["results"][0]);
    echo '</pre>';

?>