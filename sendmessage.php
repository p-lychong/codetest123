<?php
    $content = '';
    foreach ($_POST as $key => $value) {
        if($value){
        $content .= "<b>$key</b>: <i>$value</I>\n";
        }
    }
    if(trim($content)){
        $content ="<b>Message from site:</b>\n".$content;
        $apiToken = "7096996253:AAFsx-SMfu2pau9as3bFfFxilBPXUBPZpxU";
        $data = [
            'chat_id' => '@sendmassagechong',
            'text' => $content,
            'parse_mode' => 'HTML'
        ];
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMassage?".http_build_query($data));
    }
