<?php

include "../inc/config.php";

$text = $_POST['text'];
$language = $_POST['language'];

// Replace with your own API key
$apiKey = "AIzaSyAkOSof8REz7ozJnJSzVbl4Qy5HEJn8qmI";


if($language=="engtojv"){
    $sourceLang = "en";
    $targetLang = "jv";
}else if($language=="jvtoeng"){
    $sourceLang = "jv";
    $targetLang = "en";
}else if($language=="idtojv"){
    $sourceLang = "id";
    $targetLang = "jv";
}else if($language=="jvtoid"){
    $sourceLang = "jv";
    $targetLang = "id";
}else if($language=="zhtojv"){
    $sourceLang = "zh";
    $targetLang = "jv";
}else if($language=="jvtozh"){
    $sourceLang = "jv";
    $targetLang = "zh";
}


// Set the URL for the Google Translate API
$url = "https://translation.googleapis.com/language/translate/v2?key=".$apiKey;

// Set the data to be sent in the API request
$data = array(
    'q' => $text,
    'target' => $targetLang,
    'source' => $sourceLang
);

// Initialize cURL and set the options for the API request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the API request and get the response
$response = curl_exec($ch);

// Check for any errors during the API request
if(curl_errno($ch)){
    echo 'Error: ' . curl_error($ch);
} else {
    // Parse the JSON response and display the translated text
    $jsonResponse = json_decode($response, true);
    echo $jsonResponse['data']['translations'][0]['translatedText'];
    $result = $jsonResponse['data']['translations'][0]['translatedText'];
    //var_dump($jsonResponse);

    //$text_lang = $jsonResponse['data']['translations'][0]['detectedSourceLanguage'];
}

// Close the cURL session
curl_close($ch);


$sql = "insert into translator(text,text_lang,result, result_lang) values ('$text','$sourceLang','$result', '$targetLang')";

$simpan = mysqli_query($koneksi, $sql);

?>