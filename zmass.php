<body background="https://i.pinimg.com/originals/8b/00/b3/8b00b3a6971714332c701d0dd6957c51.jpg">
<?php
#Zone-H MASS PHP##
echo "Kirito1337 MASS [Zone-H.Org]";
ob_start();
set_time_limit(0);
error_reporting(0);
echo '<title>Zone-H Mass , Kirito1337</title><center><form method="post" action="">
Defacer : <input type="text" name="defacer"><br><br>
Mass:
<textarea name="siteler" cols="60" rows="7"></textarea><br>
<input type="submit" value="SEND (ZONE-H)">
</form></center>';
$defacer = $_POST['defacer'];
$siteler = explode("\r\n",$_POST['siteler']);
foreach($siteler as $yenisiteler){
$trim=trim($yenisiteler);
$sil = ereg_replace("http","",$trim);
$sil2 = ereg_replace("://","",$sil);
$ekle = "http%3A%2F%2F$sil2";
$curl = curl_init();
  $header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
  $header[] = "Cache-Control: private, max-age=0";
  $header[] = "Connection: keep-alive";
  $header[] = "Keep-Alive: 115";
  $header[] = "Accept-Charset: ISO-8859-9,utf-8;q=0.7,*;q=0.7";
  $header[] = "Accept-Language: tr-TR,tr;q=0.8,en-us;q=0.5,en;q=0.3";
  $header[] = "Pragma: "; 
$git = "http://zone-h.org/notify/single";
curl_setopt($curl, CURLOPT_URL,$git);
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; tr; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729)');
  curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
  curl_setopt($curl, CURLOPT_REFERER, 'http://zone-h.org/notify/single');
  curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate');
  curl_setopt($curl, CURLOPT_POST,1);
  curl_setopt($curl, CURLOPT_POSTFIELDS,"defacer=$defacer&domain1=$ekle&hackmode=17&reason=1");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_TIMEOUT, 10);
$exec = curl_exec($curl);
if(! $exec==""){
echo '<center>Postalandý : '.$trim.'<br></center>';
ob_flush();
flush();
}
}
?>
