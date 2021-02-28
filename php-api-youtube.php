<?php 
$channel_id = ""; // https://www.youtube.com/channel/{channel_id}
$api_key = ""; // didapat dari console.developers.google. Jangan lupa enable untuk Youtube API data
$api_response = file_get_contents('https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel_id.'&fields=items/statistics/subscriberCount&key='.$api_key);
$api_response_decoded = json_decode($api_response, true);
$jumlahSubscribers = $api_response_decoded['items'][0]['statistics']['subscriberCount'];
