<?php
$headers = apache_request_headers();
$client_time = (isset($headers[‘If-Modified-Since’]) ? strtotime($headers[‘If-Modified-Since’]) : 0);
$now=gmmktime();
$now_list=gmmktime()-60*5;
if ($client_time<$now and $client_time >$now_list){
    //header(‘Last-Modified: ‘.gmdate(‘D, d M Y H:i:s’, $client_time).’ GMT’, true, 304);
    exit(0);
}else{
    //header(‘Last-Modified: ‘.gmdate(‘D, d M Y H:i:s’, $now).’ GMT’, true, 200);
}
?>