<?php
function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl,CURLOPT_TIMEOUT,6);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 4.2.2; R831 Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36');
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
$curl=auto("http://giaothonghocduong.com.vn/giaothong/site/result-user/$_GET[id]");
$temp=strstr($curl, '<div id="main-content">');
$temp1 = strstr($temp,'<footer>');
$noidung = str_replace($temp1,'',$temp);
echo'<title>Kết Quả Thi</title><link href="http://stc.giaothonghocduong.com.vn/files/css/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/Font-Awesome-master/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,500,500italic,700,700italic&amp;subset=latin,vietnamese" rel="stylesheet">
<link href="/files/css/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/animate.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/themes/v1/files/css/style.css?v=3.6" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/js/flipclock-master/compiled/flipclock.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/js/owl.carousel/owl.carousel.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/themes/v1/files/css/giaothong_style.css?v=3.6" rel="stylesheet">';
echo $noidung;