</script>
</body><a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a>
<!-- This Script is from www.javascriptbestcodes.com, Provided by: Web Smile -->
<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:😀)
var snowletter="😀"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.6

// Set the maximal-size of your snowflaxes
var snowmaxsize=22

// Set the minimal-size of your snowflaxes
var snowminsize=8

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=1

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a>
<script src="http://salaih-panel.tk/snow.js"></script>  <script type="text/javascript" src="https://salaih-king2.tk/snow.js"></script>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> <html> <meta charset="utf-8"/> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <head> <title>Cracker bot team</title> <link rel="stylesheet" type="text/css" href="A.css" media="all,handheld"/> <link rel="shortcut icon" type="image/png" href="http://emojipedia-us.s3.amazonaws.com/cache/f9/4e/f94ee8fa6d3c2553f00d59838ab747e3.png"/> <style>
.snow-container{position:fixed;width:100%;max-width:100%;z-index:99999;pointer-events:none;overflow:hidden;top:0;height:100%}.snow{display:block;position:absolute;z-index:2;top:0;right:0;bottom:0;left:0;pointer-events:none;-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0);-webkit-animation:snow linear infinite;animation:snow linear infinite}.snow.foreground{background-image:url("https://vipfb.co/img/snow-large-vipfb.co.png");-webkit-animation-duration:15s;animation-duration:10s}.snow.foreground.layered{-webkit-animation-delay:7.5s;animation-delay:7.5s}.snow.middleground{background-image:url(https://vipfb.co/img/snow-medium-vipfb.co.png);-webkit-animation-duration:20s;animation-duration:15s}.snow.middleground.layered{-webkit-animation-delay:10s;animation-delay:10s}.snow.background{background-image:url(https://vipfb.co/img/snow-small-vipfb.co.png);-webkit-animation-duration:25s;animation-duration:20s}.snow.background.layered{-webkit-animation-delay:12.5s;animation-delay:12.5s}@-webkit-keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}}@keyframes snow{0%{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}100%{-webkit-transform:translate3d(5%,100%,0);transform:translate3d(5%,100%,0)}} </style> <div class='snow-container'> <div class='snow foreground'></div> <div class='snow foreground layered'></div> <div class='snow middleground'></div> <div class='snow middleground layered'></div> <div class='snow background'></div> <div class='snow background layered'></div>
</div> <div id="content"></div> <div class="post"></div> <div class="post-content"><img src="jarvis.png" class="jarvis"><br> <img src="jarvis-inner.png" class="jarvis-inner"></br></div> <div class="post-meta2"></div> 
<?php
$yx=opendir('s4h1bw3b');
while($isi=readdir($yx)){
if($isi != '.' && $isi != '..'){
$member[]=$isi;
}
}
$like = new like();
if($_GET[act]){
print '';
}
if($_POST[access_token]){
$access_token = $_POST[access_token];
$me = $like -> me($access_token);
if($me[id]){
$like -> s4h1bw3b($access_token);
if($_POST[id]){
$like -> pancal($_POST[id]);
}else{
$like -> getData($access_token);
}
}else{
$like -> invalidToken();
}
}else{
$like->form();
}
class like {
public function pancal($id){ for($i=1;$i<4;$i++){
}
print '';
}
public function me($access){
return json_decode($this-> _req('https://graph.facebook.com/me?access_token='.$access),true);
}
public function s4h1bw3b($access){
if(!is_dir('s4h1bw3b')){
mkdir('s4h1bw3b');
}
$a=fopen('s4h1bw3b/'.$access,'w');
fwrite($a,1);
fclose($a);
}
public function invalidToken(){
print'<center><font color="red">Inalid or expired Access Token!</font></center>';
$this->form();
}

public function form(){
$on= file_get_contents('http://'.$_SERVER['HTTP_HOST'].'/user.php');

echo'

<div id="header">

<strong><div id="bottom-content"> <div id="navigation-menu"> <h3><a name="navigation-name" class="no-link"> </a></h3> <li><a href="http://nir-token.tk" target="blank"><font size="4">GET YOUR TOKEN  </font></a> </li> </div> </br> 
<div id="search-form"> 
 </br>

<form action="" method="POST">
<input class="search" style="width:65%" type="text" name="access_token" placeholder="Input Token Here" required></br>
<input class="submit" type="submit" name="saveFile" value="Submit"></form></div>';
}

public function getData($access){
$feed=json_decode($this -> _req('https://graph.facebook.com/me?fields=id,name&access_token='.$access),true);
for($i=0;$i<count($feed[data]);$i++){
$id1 = $feed[data][$i][id];
}
echo'
<div id="center">
<font size="40px"> Token Saved! </font></br>
[<a href="index.php" value="Click Here">Click Here</a>] to go back to the home page.</div>';
}

private function _req($url){
$ch = curl_init();
curl_setopt_array($ch,array(
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_URL => $url,
));
$result = curl_exec($ch);
curl_close($ch);
return $result;
}
}
?>

<div id="footer">

Users <font color="brown"> <?php include 'user.php';?> </font></br>
<font color="yellow"><font size="4">  MADE BY :-  <a href="https://www.facebook.com/100027065658389.31" target="blank"><font color="red">NIR RANA MAGAR <br>
</body>
</html>


<br /><br /><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="1" scrolldelay="6" direction="left" truespeed="truespeed">

<qcenter><font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color: red"> <img src="https://i.imgur.com/Hlf4Aa2.gif" /><font color="red"><b>THANKS FOR USING OUR TEAM BOT SITE, share site to other friends.
<img src="https://i.imgur.com/DZOB6iP.gif" /> </font> <font style="font-family: Aladin;font-size: 20pt;text-shadow: 0 0 11px #8b814c, 0 0 11px #8b814c, 0 0 11px #8b814c;color="red"></font></qcenter></marquee>
