<?php

#########################################
#########################################/-
/*$icerik	 = stream_context_create(
    array(
        "http" => array(
            "header" => "Furkanv1.0 Crawler"
        )
    )
);*/
#########################################
#########################################
/*
$link 		= "http://www.ip-adress.com/Proxy_Checker/";
$linkicek	= file_get_contents($link);
echo $linken;*/
/*
function getir($baslangic, $son, $cekilmek_istenen)
{
    @preg_match_all('/' . preg_quote($baslangic, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
    return @$m[1];
}
$proxyler	= getir('<td>',"</td>",$linkicek);
print_r($proxyler);*/



    $curl_handle=curl_init();
    curl_setopt($curl_handle, CURLOPT_URL,'http://www.ip-adress.com/Proxy_Checker/');
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'GoogleBot');
    $link = curl_exec($curl_handle);
    curl_close($curl_handle);
	
function getir($baslangic, $son, $cekilmek_istenen)
{
    @preg_match_all('/' . preg_quote($baslangic, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $cekilmek_istenen, $m);
    return @$m[1];
}
$proxyler	= getir('<td>',"</td>",$link);

echo '<html>
<head>
<style>
.city {
   float: left;
   margin: 10px;
   padding: 10px;
   max-width: 300px;
   height: 300px;
   border: 1px solid black;
}   
</style><title>FurkanSANDAL %100 Çalışan Proxy</title>
</head>
<body><center>
<body style="background-color:powderblue;">';

// 5 9 13 17
$ayir			= $proxyler["5"].":".$proxyler["9"].":".$proxyler["13"].":".$proxyler["17"].":".$proxyler["21"];
$dahadaayir		= explode(":",$ayir);
$proxykonum		= $proxyler["6"]."-".$proxyler["10"]."-".$proxyler["14"]."-".$proxyler["18"]."-".$proxyler["22"];
$konumayir		= explode("-",$proxykonum);
echo "<b><h2>%100 Calışan Proxyler</h2></b><br><br><br>";

$basla 		= 0;
$proxybasla	= 1;
$limit 		= 4;


for($sayac=0;isset($dahadaayir);$sayac){
	if($sayac==5){
		echo "<br><br><b>
Transparent = Squid Proxy / Yüksek Hız<br>
Anonymous	= Gizli / Orta Hız<br>
Elite		= Gizli / Yüksek Hız<br><br>
</b>";
echo date('H:i:s',time())."'te Kontrol Edildi.";
		die();
	}
	echo $dahadaayir[$basla]." - ".$dahadaayir[$proxybasla]."  		---- ".$konumayir[$sayac]."<br><br>";
	$basla++;
	$basla++;
	$proxybasla++;
	$proxybasla++;
	$sayac++;
}


?>
