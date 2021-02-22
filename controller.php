<?php 

########
#
# RZLSFT- INSTAGRAM COMMENT SCRIPT
# VER : V1.1
#
########
require __DIR__ . '/vendor/autoload.php';
use Phpfastcache\Helper\Psr16Adapter;
error_reporting(0);
function convert($var){
    $alphabet   = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';
    $url_prefix = 'https://www.instagram.com/p/';
    $url_suffix = '';
    $media_id   = 0;

    if (preg_match('/_/', $var)) {
        $parts      = explode('_', $var);
        $media_id   = $parts[0];
        $user_id    = $parts[1];

        if (is_numeric($media_id) && is_numeric($user_id)) {
            $type   = 'media_id';
        } else {
            $type   = 'shortcode';
        }
    } else {
        $type       = 'shortcode';
    }

    if ($type == 'media_id') {
        while ($media_id > 0) {
            $remainder  = $media_id % 64;
            $media_id   = ($media_id - $remainder) / 64;
            $url_suffix = $alphabet[$remainder] . $url_suffix;
        }
        return $url_prefix . $url_suffix;
    } else {
        foreach (str_split($var) as $letter) {
            $media_id   = ($media_id * 64) + strpos($alphabet, $letter);
        }
        return $media_id;
    }
}

if (@!empty($_POST['media'])) {

	extract($_POST);


	

	if (@!empty($media)) {
	if (@!empty($adet)) {
	if (@!empty($text)) {

$dosya = fopen('userler.txt', 'r');
$icerik = fread($dosya, filesize('userler.txt'));
$donusturme=explode("-",$icerik);
$sayi=count($donusturme)-2;
$random=rand(0,$sayi);
$veri=$donusturme[$random];
$parcala=explode(",",$veri);
$username = str_replace("[", "", $parcala[0]);
$password = str_replace("]", "", $parcala[1]);


if (@$parcala[2]) {
	$proxyTam = str_replace("]", "", $parcala[2]);
	$instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(['proxy' => $proxyTam]),$username, $password, new Psr16Adapter('Files'));
	$login=$instagram->login();
}else{
	$instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $username, $password, new Psr16Adapter('Files'));
	$login=$instagram->login();
}


$shortCode=explode("/", $media);
$mediaId=convert("$shortCode[4]");
for ($i=0; $i <$adet ; $i++) { 
	$addComment = $instagram->addComment($mediaId,$text);
	sleep($delay);
}

if ($addComment == "basarili") {
	$data['durum']="basarili";
	$data['message']="Yorumlar Gönderildi";
		print_r(json_encode($data));
}else if($addComment == "silik"){
	$data['durum']="hata";
	$data['message']="Medya Bulunamadı";
		print_r(json_encode($data));
}else{
		$data['durum']="hata";
	$data['message']="Hata, Tekrar Deneyiniz";
		print_r(json_encode($data));
}

}else{

	$data['durum']="hata";
	$data['message']="Lütfen Boş Alan Bırakmayınız";
		print_r(json_encode($data));
}
}else{

	$data['durum']="hata";
	$data['message']="Lütfen Boş Alan Bırakmayınız";
		print_r(json_encode($data));
}
}else{

	$data['durum']="hata";
	$data['message']="Lütfen Boş Alan Bırakmayınız";
		print_r(json_encode($data));
}

}

if (@!empty($_POST['username'])) {
	extract($_POST);
	
	
	if (!empty($username)) {
		if (!empty($password)) {

if ($proxy) {
	$instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(['proxy' => $proxy]), $username, $password, new Psr16Adapter('Files'));
	$login=$instagram->login();
}else{
	$instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $username, $password, new Psr16Adapter('Files'));
	$login=$instagram->login();
}

	
	if ($login == "hata") {
			$data['durum']="hata";
	$data['message']="Kullanıcı adınızı veya şifrenizi kontrol ediniz.";
		print_r(json_encode($data));
	}else if($login =="proxyHata")
{

	$data['durum']="hata";
	$data['message']="Proxy kontrol Ediniz";
		print_r(json_encode($data));
}else
	{



		$file = 'userler.txt';
		$find = "[".$_POST['username'].",".$_POST['password']."]";
		$contents = file_get_contents($file);
		$pattern = preg_quote($find, '/');
		$pattern = "/^.*$pattern.*$/m";


		if(preg_match_all($pattern, $contents, $matches)){

	$data['durum']="basarili";
	$data['message']="User Zaten Ekli";
		print_r(json_encode($data));
		}
		else{
$data['durum']="basarili";
	$data['message']="Başarılı User eklenmiştir";
		print_r(json_encode($data));
$dosya = fopen ("userler.txt" , 'a');
$yaz="[".$_POST['username'].",".$_POST['password'].",".$proxy."]-";

fwrite ( $dosya , $yaz ) ;
fclose ($dosya);
} 




}

}else{

	$data['durum']="hata";
	$data['message']="Lütfen Boş Alan Bırakmayınız";
		print_r(json_encode($data));
}

}else{

	$data['durum']="hata";
	$data['message']="Lütfen Boş Alan Bırakmayınız";
		print_r(json_encode($data));
}



}



?>