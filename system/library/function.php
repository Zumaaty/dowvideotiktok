<?php
function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.47 Safari/537.36');
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
function download($token, $type)
{
    $url = 'download.php?token='.$token.'&type='.$type.'';
    return $url;

}
function format_seconds($seconds)
{
    return gmdate(($seconds > 3600 ? "H:i:s" : "i:s"), $seconds);
}
function pcode($pData)
{
    $encryption_key = '2GQRyRTWQ3cArzFGxs';
    $encryption_iv = '9999999999999999';
    $ciphering = "AES-256-CTR"; 
    $encryption = openssl_encrypt($pData, $ciphering, $encryption_key, 0, $encryption_iv);
    return $encryption;
}
function encode($pData)
{
    $key = '9';
    $iv = '!@#$%^&*()_+?><:';
    $method = "AES-256-CBC";
    $encryption = base64_encode(openssl_encrypt($pData, $method, $key, 0, $iv));
    return $encryption;
}