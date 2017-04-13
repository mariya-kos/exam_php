<?php
header('Location: ' . $_SERVER['HTTP_REFERER']);
sendRequest($_POST);

function sendRequest($array) {
    if ($array) {
        $requestData = date('d.m.Y H:i', time()) . "\n\n";
        foreach ($_POST as $key => $value) {
            if ($value !== '') {
                $requestData .= $key . ': ' . $value . "\n";
            }
        }
        echo $requestData;
        $file = fopen("requests/request.txt", 'ct');
        fwrite($file, $requestData);
        fclose($file);
    }
}

