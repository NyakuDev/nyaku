<?php

  webhookPost($_POST["message"], $_POST["channel"]);
header('Location: index.html') ;

function webhookPost($message, $channel) {
    $data = array("content" => $message, "username" => $_POST["name"]);
    $curl = curl_init($channel);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    return curl_exec($curl);
}

?>