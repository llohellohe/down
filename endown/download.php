<?php
require_once(dirname(__FILE__)."/../lib/DB.php");

require_once(dirname(__FILE__)."/../lib/EdException.php");


$id=$_GET["id"];
$page=$_GET["page"];

try{

$db=new DB();
$software=$db->getSoftWare($id);

if($id==1){
$latestSoftware=$db->getSoftWare(9);
}
}catch(ErrorException $e){
  go404();
}

$db->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Download Free 
<?php

echo $software['name'].",".$software['name'].$software['version']; 

?> 

Download</title>
<meta name="keywords" content="<?php echo $software['name'].",Download ".$software['name']." ".$software['name']." ".$software['version']." Download"?>" />
<meta name="description" content="<?php echo $software['summary']?>" />
<link rel="stylesheet" type="text/css" href="css/public.css">
</head>

<body>

<div id="top">
<div id="frame">
<div class="tl"><a href="#">DownladV.com, Your free <?php echo $software['name']?> Software Download Portal.</a></div>
<div class="tr"><a href="#"><img src="images/1_02.jpg" /></a><a href="#"><img src="images/1_03.jpg" /></a></div>
<div id="tnr"><a href="http://www.downloadv.com"><h1>DownloadV</h1></a>
<div class="tr"><script type="text/javascript"><!--
google_ad_client = "pub-6095026974399688";
/* 468x60, 创建于 11-5-11 */
google_ad_slot = "3531353071";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>
<div id="nav">
<ul>
<li><a href="#" class="hover">Home</a></li>
<li><a href="#">Categories</a></li>
<li><a href="#">New releases</a></li>
<li><a href="#">Most popular</a></li>
<li><a href="#">Our picks</a></li>
<li><a href="#">Submit your software</a></li>
</ul>
</div>
<div id="search">
  <form id="sform" name="form1" method="post" action="">
  <input type="text" name="textfield" id="stext" />
  <input type="submit" name="button" id="sbut" value="" />
  </form>
<div class="key"><a href="#">avi dvd,</a>   <a href="#">Google Earth,</a>   <a href="#">outlook,</a>   <a href="#">cd clone,</a>   <a href="#">Corel...</a>   
<a href="#">avi dvd,</a>   <a href="#">Google Earth,</a>   <a href="#">outlook,</a>    <strong><a href="#">Hot Search Keywords</a></strong></div>
</div>
<div id="wz">
Your are here > <a href="#">Dvd Convvet</a> > <a href="#">Video Editors</a> > Dvd to mp4 Convert - Your free download</div>

<div id="main">
<div id="left" class="tr1">
  <div class="add"><script type="text/javascript"><!--
google_ad_client = "pub-6095026974399688";
/* 160x600, 创建于 11-5-11 */
google_ad_slot = "6186671689";
google_ad_width = 160;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
</div>
<div id="right" class="tl">
<div id="rmb">
<div id="rbt"><h3>Free Download <?php echo $software['name']?> <span class="hs"><?php echo $software['version']?></span></h3>
</div>
<div id="rnr">
<hr class="x">
<div class="add">
<script type="text/javascript"><!--
google_ad_client = "pub-6095026974399688";
/* 336x280, 创建于 11-5-11 */
google_ad_slot = "0652046987";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
</div>
<img src="images/1_19.jpg" /></div>

<div class="wz">
Download in Progress ... Please Wait.<br />
If your download does not start ,Please click the following link:
</div>

<div id="mdown">
<div class="mdr"><div class="dl"><img src="images/3_07.jpg" /><a href="<?php echo $software['link']?>">Download Link</a></div> <div class="dr1"><a href="#">Report Link Error</a></div></div>
</div>

<?php
if($latestSoftware){
?>
<div id="rmb">
<div id="rbt" style="line-height:20px;"><h3>&nbsp;</h3>
</div>
<div id="rnr">
<p class="rwz"><?php echo $software['name']?> is not the latest version, we recommend you download <br />
  <a href="detail.php?id=9">latest <?php echo $latestSoftware['name']?></a> (version:<?php echo $latestSoftware['version']?>)</p> 
</div>
<img src="images/1_19.jpg" />
</div>
<?php } ?>

<div id="rmb">
<div id="rbt"><h3>Programs related to <span class="hs">VSO ConvertXtoDVD</span></h3>
</div>
<div id="rnr">
<hr class="x">
<div id="news" class="nbg">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong><br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder or ...</div>
<div id="news" class="nbg2">
<img src="images/1_23.jpg" />
<strong><a href="#">DVDFab DVD Copy 8.0.8.5</a></strong><br />
DVDFab DVD Copy is the most powerful and flexible DVD copying/burning software ... </div>
<div id="news" class="nbg">
<img src="images/1_24.jpg" />
<strong><a href="#">WinX Bluray DVD iPhone Ripper 4.5.0</a></strong><br />
WinX Bluray DVD iPhone Ripper gives you the easiest way to play ... </div>
<div id="news" class="nbg2">
<img src="images/1_25.jpg" />
<strong><a href="#">CCleaner 1.41.544</a></strong><br />
CCleaner is the ideal tool to erase all traces of your e-visits ... 
</div>
</div>
<img src="images/1_19.jpg" />
</div>

</div>

<?php require_once('modules/footer.php');?>


<div class="clear"></div>
</div>
</div>

</body>
</html>
