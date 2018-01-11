<?php
/**CuiBapVH@Gmail.Com**/
/**06/01/2018**/
/**Updated 10/01/2018**/
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
if (isset($_GET['page'])) $page=$_GET['page']; else $page=1;
if (isset($_GET['lop'])) $class=$_GET['lop']; else $class=11;
$curl=auto("http://giaothonghocduong.com.vn/danh-sach-thi-sinh.html?round=&user_name=&full_name=&region=bac&city_id=35&district_id=404&level=&school_id=30008&class_id=$class&page=$page&per-page=50");
$temp=strstr($curl, '<h5 class="text-blue text-bold">Tổng số: <span class="text-error text-bold text-17">');
$temp1 = strstr($temp,'<footer>');
//echo $temp1;
$noidung = str_replace($temp1,'',$temp);
echo'<html><title>*.Danh Sách Thí Sinh.*</title><link href="http://stc.giaothonghocduong.com.vn/files/css/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/Font-Awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/js/owl.carousel/owl.carousel.min.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/files/css/animate.css" rel="stylesheet">
<link href="http://stc.giaothonghocduong.com.vn/themes/v1/files/css/giaothong_style.css?v=3.6" rel="stylesheet">';
$noidung=str_replace('<a class="text-bold no-hover" href="/giaothong/site/result-user/','<a class="text-bold no-hover" href="/ketqua/',$noidung);
echo $noidung;
echo'<!--Coded By CuiBapVH--><!--Liên Hệ: CuiBapVH@Gmail.Com--></html>';
