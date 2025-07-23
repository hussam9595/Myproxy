<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$url = "https://cast-x.com/aghmdev/castxv2/api/get/?from=channels&cat=categories&parent=bein_sports_(_hd_)";

$headers = [
    "app-id: WzAbXVcQACtqByNMFjo4",
    "app-key: CWhDQAdBRWgLQGVQQw",
    "x-auth: Q1doRFFBZEJSV2dMUUdWUVF4VjRDMkJPUzFKaVpIOW5lV0pzY1hvZFFFdHhSa1Z1QkRCdFZUTVBmUXdTTlVoVUVXSjVZWDFuQ25RUGFrVkFCRWRFWmdGRFoxWW9DUWtiQjFZZ1FnY0Y",
    "x-dev: AGH_DEV",
    "user-agent: WINDROID_MOVIES_API V1.0, Android",
    "Referer: https://th3pr0andro.blogspot.com",
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_ENCODING, "gzip");

$response = curl_exec($ch);
curl_close($ch);

echo $response;
