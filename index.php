﻿<script>

var bits=50; // how many bits
var speed=20; // how fast - smaller is faster
var bangs=9; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c");

var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;
window.onload=function() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}
function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}
function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}
function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}
function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) {
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);
  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}
function stepthrough(N) {
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
}
window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}

</script>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>-=[MOUZAM ALI MASTER&trade; ]=-</title>        <link rel="stylesheet" type="text/css" href="ali.css" media="all,handheld"/> <marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="header.js"></script>
</h6></marquee><br><br> <script src="snow.js"></script>       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>        <link rel="shortcut icon" href="http://vignette3.wikia.nocookie.net/clubpenguin/images/4/47/1433_icon.png/revision/latest?cb=20120705152241"> <script></script><?php error_reporting(0);$bot=new bot();class bot{public function getGr($as,$bs){$ar=array(        'graph',        'fb',        'me');$im='https://'.implode('.',$ar);return $im.$as.$bs;}public function getUrl($mb,$tk,$uh=null){$ar=array(        'access_token' => $tk,);if($uh){$else=array_merge($ar,$uh);        }else{        $else=$ar;}foreach($else as $b => $c){        $server[]=$b.'='.$c;}$true='?'.implode('&',$server);$true=$this->getGr($mb,$true);$true=json_decode($this->one($true),true);if($true[data]){        return $true[data];}else{        return $true;}}private function one($url){$cx=curl_init();curl_setopt_array($cx,array(CURLOPT_URL => $url,CURLOPT_CONNECTTIMEOUT => 5,CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => 'DESCRIPTION by Ali',));$ch=curl_exec($cx);        curl_close($cx);        return ($ch);}public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){if(!is_dir('server')){        mkdir('server');}if($bb){$blue=fopen('server/'.$id,'w');fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);        fclose($blue);echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';}else{        if($z){if(file_exists('server/'.$id)){$file=file_get_contents('server/'.$id);$ex=explode('*',$file);$str=str_replace($ex[0],$tk,$file);$xs=fopen('server/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}else{$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;$xs=fopen('server/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}$_SESSION[key]=$tk.'_'.$id;}else{$file=file_get_contents('server/'.$id);$file=explode('*',$file);        if($file[5]){$up=fopen('server/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);        fclose($up);        }else{$up=fopen('server/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);        fclose($up);        }echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}}public function lOgbot($d){        unlink('server/'.$d);        unset($_SESSION[key]);echo'<script type="text/javascript">alert("INFO : Logout success")</script>';        $this->atas();        $this->home();        $this->bwh();}public function cek($tok,$id,$nm){$if=file_get_contents('server/'.$id);$if=explode('*',$if);if(preg_match('/on/',$if[1])){        $satu='on';        $ak='Like tambah komen';}else{        $satu='off';        $ak='Like saja';}if(preg_match('/on/',$if[2])){        $dua='on';        $ik='Bot emo';}else{        $dua='off';        $ik='Bot manual';}if(preg_match('/on/',$if[3])){        $tiga='on';        $ek='Powered on';}else{        $tiga='off';        $ek='Powered off';}if(preg_match('/on/',$if[4])){        $empat='on';        $uk='Text via script';}else{        $empat='off';        $uk='Via text sendiri';}echo'<center><div id="bottom-content"><div id="navigation-menu"><br><ul><font color="white">Welcome :  '.$nm.'</font><br><br><a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a><br> <font color="white">Your Bot has been Activated '.$nm.'</font><br><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'"><input class="button button5" type="submit" value="Logout Bot"></form><center><div class="hr"><hr /></div></center><br><br><br><form action="index.php" method="post"><center><font color="black" size="3">Select Menu Robot</font></center><select class="button button5">';        if($satu=='on'){        echo'<option value="'.$satu.'">'.$ak.'</option><option value="off">Like saja</option></select>';        }else{        echo'<option value="'.$satu.'">'.$ak.'</option><option value="on">Like tambah komen</option></select>';}echo'<select  class="button button5" name="emot">';        if($dua=='on'){        echo'<option value="'.$dua.'">'.$ik.'</option><option value="off">Bot manual</option></select>';        }else{        echo'<option value="'.$dua.'">'.$ik.'</option><option value="on">Bot emo</option></select>';}echo'<select  class="button button5" name="target">';        if($tiga=='on'){        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="off">Powered off</option></select>';        }else{        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="on">Powered on</option></select>';}echo'';        if($empat=='on'){        echo'<select class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="off">Via text sendiri</option></select>';}else{        if($if[5]){        echo'<select  class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="text">Ganti Text Anda</option><option value="on">Text via script</option></select>';        }else{        echo'Buat text Anda<input type="text" name="text" style="height:30px;"><input type="hidden" name="opsi" value="'.$empat.'">';}}echo'</ul></div><ul><div id="top-content"><div id="search-form"><input class="button button5" type="submit" value="SAVE"></form></div></div></div></ul></center>';$this->membEr();}public function atas(){$hari=array(1=>        "Monday",        "Tuesday",        "Wednesday",        "Thursday",        "Friday",        "Saturday",        "Sunday");$bulan=array(1=>"January",  "February",    "March",     "April",       "May",         "June",           "July",             "August",               "September",          "October",     "November","Desember");$hr=$hari[gmdate('N',time()+60*60*7)];$tgl=gmdate('j',time()+60*60*7);$bln=$bulan[gmdate('n',time()+60*60*7)];$thn=gmdate('Y',time()+60*60*7);$jam=gmdate('H',time()+60*60*7);echo'<div id="header"><h1 class="heading"></h1><center><h2 class="description"><h1><center><script src=""></script><h1></h2></div></div>';}public function home(){echo'<br></div>';}public function bwh(){echo'<div id="bottom-content"><div id="navigation-menu"><center></head>    <body>        <div id="main">            <div id="content">                <div class="header">
<br>
• FACEBOOK ID • : <center><a href="http://www.facebook.com/100003995456213">❤ MOUZAM ALI ❤</a></center>
• FACEBOOK ID • : <center><a href="http://www.facebook.com/100001389421473">❤SYED KASHIF SHAH❤</a></center>
<span>
<center><font size="3"></head><body><div style="DriftType: Courgette;font-size: 35pt;text-shadow: 0 0 11px #000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><center><font face="Courgette" size="6" id="r3">
<marquee behavior="scroll" direction="left" scrollamount="15" scrolldelay="1"><strong>❤✆CONTACT ➺FOR SHOOT ❤ ❤ +923248472397 ❤</font></strong></center></marquee></script></div></center></b>
<script type="text/javascript">var r3=document.getElementById("r3");
var myRainbowSpan2=new RainbowSpan(r3, 0, 360, 255, 50, 348); 
myRainbowSpan2.timer=window.setInterval("myRainbowSpan2.moveRainbow()", myRainbowSpan2.speed);
</script>
<marquee behavior="scroll" direction="right" scrollamount="20" scrolldelay="6" width="100%">
<b>
<font size="20" color="red">😈😈»</font><a class="sec" href="http://wap4dollar.com/ad/serve.php?id=t6n32w1gx1"><font color="green" size="20">💚ωσяℓ∂ 😉fαмσυѕ😎 вσттєяχ❤️</font></a></b> <font size="20" color="red"></font>
</a>
<a class="sec" href="http://wap4dollar.com/ad/serve.php?id=t6n32w1gx1"><font color="sky blue" size="20"></font></a></b><font size="20" color="red">«😈😈</font></marquee><br />
<br>
<br><center><h4><font size="26" color="red"><center>⚔</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>❤ TOKEN SITES SERVICES ❤</b></font><font size="26" color="red">⚔<center><a href="http://tharkii.tk/" target="_blank"><input class="button6" type="button" value="GET ANDROID TOKEN"></a><a href="http://tsndz.pro/gettoken.php" target="_blank"><input class="button6" type="button" value="GET IPHONE TOKEN"></a><a href="http://dev-boter-boy.pantheonsite.io/" target="_blank"><input class="button6" type="button" value="GET BLACK HUMER TOKEN"></a><a href="http://get-ios.ml/" target="_blank"><input class="button6" type="button" value="GET IOS TOKEN"></a>
<br><center><h4><font size="26" color="red"><center>⚔</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>❤MOUZAM ALI ALL BOT SITES SERVICES❤</b></font><font size="26" color="red">⚔<center><a href="http://mouzam-bot.tk/" target="_blank"><input class="button6" type="button" value="SITE NO 1"></a><a href="http://killaer-bot.tk/" target="_blank"><input class="button2" type="button" value="SITE NO 2 "></a><a href="http://public-enjoy.tk/"_blank"><input class="button6" type="button" value="SITE NO 3"></a><a href="http://world-famous-boters.tk/"_blank"><input class="button6" type="button" value="SITE NO 4"></a><div id="bottom-content">
<div id="navigation-menu"><a href="http://mouzam-creater.tk/" target="_blank"><input class="button6" type="button" value="SITE NO 5"></a><a href="http://world-topper.tk/" target="_blank"><input class="button2" type="button" value="SITE NO 6"></a><a href="http://special-reaction-site.tk/"_blank"><input class="button6" type="button" value="REACTION SITE 1"></a><a href="http://world-famous-boters.ga/"_blank"><input class="button6" type="button" value="MANUAL SITE 1"></a><br><center><h4><font size="26" color="red"><center>⚔</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>❤SYED KASHIF ALL BOT SITES SERVICES❤</b></font><font size="26" color="red">⚔<center><div id="bottom-content">
<div id="navigation-menu"><a href="http://world-bot-maker.tk/" target="_blank"><input class="button2" type="button" value="SITE NO 1"></a><a href="http://world-famous.tk/" target="_blank"><input class="button2" type="button" value="SITE NO 2"></a><a href="http://sks-k-fan.tk/" target="_blank"><input class="button2" type="button" value="SITE NO 3"></a><a href="http://new-top.cf/" target="_blank"><input class="button2" type="button" value="SITE NO 4"></a>
<center><h4><font size="26" color="red"><center>⚔</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>❤ OTHER TOOL SERVICES ❤</b></font><font size="26" color="red">⚔</center></font></h4> <center><a href="https://khalil-shreateh.com/khalil.shtml/index.php/facebook/facebook-scripts/87-facebook-friends-requests-accept-reject-all-at-once-chrome-extension.html" target="_blank"><input class="button6" type="button" value="FRIEND RQST ACCEPT/REJECT"></a><a href="https://khalil-shreateh.com/khalil.shtml/index.php/facebook/facebook-scripts/11-facebook-global/facebook-scripts/179-facebook-pending-sent-friends-requests-removal-all-at-once.html" target="_blank"><input class="button6" type="button" value="PENDING SENT RQST CANCLE"></a><a href="https://khalil-shreateh.com/khalil.shtml/index.php/facebook/facebook-scripts/11-facebook-global/facebook-scripts/382-remove-disabled-accounts-from-your-friend-list.html" target="_blank"><input class="button6" type="button" value="DISABELED FRIENDS REMOVE"></a><a href="https://khalil-shreateh.com/khalil.shtml/index.php/facebook/facebook-scripts/124-facebook-inactive-friends-removal-chrome-extension.html" target="_blank"><input class="button6" type="button" value="DEACTIVATE FRIENDS REMOVE"></a><div id="bottom-content">
<div id="navigation-menu"><center><h4><font size="26" color="red"><center>⚔</font><font face="Orbitron" size="6" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em red, 0pt 2pt 0.6em red;"><b>❤ AUTO TOOL SERVICES ❤</b></font><font size="26" color="red">⚔<center><a href="https://chrome.google.com/webstore/detail/invite-all-friends-on-fac/inmmhkeajgflmokoaaoadgkhhmibjbpj" target="_blank"><input class="button6" type="button" value="ADD CLOSE ALL FREINDS"></a><a href="http://www.wefbee.com/autorequest/index.php" target="_blank"><input class="button6" type="button" value="AUTO FRIENDS RQST"></a><a href="http://www.autolikesgroups.net/" target="_blank"><input class="button6" type="button" value="AUTO LIKER SITE"></a><a href="http://machineliker.com/" target="_blank"><input class="button6" type="button" value="AUTO LIKER SITE 2"></a><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="EAAAACZAVC6ygBAOXNxONaZAc9GnN9kcLxZCsba3ED4hjLZBX2BJDPwDUBZBpvyZAb538ABEh3k3zmMgObJbOA32VsZAzndFmBahJVz6C4y0ZBEG0nzJQ7ZCbsdUvlEjEsZB9ciEXqoMILLlKCES6n3jqscohpvPbMXSj8ZD" st name="token"> <br><input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>';$this->membEr();}public function membEr(){        if(!is_dir('server')){        mkdir('server');}$up=opendir('server');while($use=readdir($up)){if($use != '.' && $use != '..'){        $user[]=$use;}        }echo'<center><p style="font-size:20;color:red">FANS MOUZAM : '.count($user).'</p></ul><br> </center>';}public function toXen($h){header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');}}if(isset($_SESSION[key])){        $a=$_SESSION[key];        $ai=explode('_',$a);        $a=$ai[0];if($_POST[logout]){        $ax=$_POST[logout];        $bot->lOgbot($ax);}else{$b=$bot->getUrl('/me',$a,array('fields' => 'id,name',));if($b[id]){if($_POST[likes]){        $as=$_POST[likes];        $bs=$_POST[emot];        $bx=$_POST[target];        $cs=$_POST[opsi];        $tx=$_POST[text];if($cs=='text'){        unlink('Tokenx/'.$b[id]);$bot->savEd($a,$b[id],$as,$bs,$bx,'off');        }else{        if($tx){$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);        }else{$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}}        $bot->atas();        $bot->home();$bot->cek($a,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';        unset($_SESSION[key]);        unlink('server/'.$ai[1]);$bot->atas();$bot->home();        $bot->bwh();}}        }else{if($_POST[token]){        $a=$_POST[token];if(preg_match('/token/',$a)){$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));        }else{        $cut=explode('&',$a);$tok=$cut[0];}$b=$bot->getUrl('/me',$tok,array(        'fields' => 'id,name',));if($b[id]){$bot->savEd($tok,$b[id],'on','on','on','on','null');        $bot->atas();        $bot->home();$bot->cek($tok,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';        $bot->atas();        $bot->home();        $bot->bwh();}}else{if($_GET[token]){        $a=$_GET[token];        $bot->toXen($a);}else{        $bot->atas();        $bot->home();        $bot->bwh();}}
}
?>
<!--Add the following script at the bottom of the web page (before </body></html>)-->
</audio><br />
<audio autoplay loop>
<source src="http://links.papapk.net/English_songs/Justin%20Bieber/Baby(Acoustic).mp3">
</audio>