<?php

require_once(dirname(__FILE__)."/../lib/DB.php");
require_once(dirname(__FILE__)."/../lib/EdException.php");


$db=new DB();


try{
$id=$_GET["id"];

$category=$db->getCategory($id);

}catch(ErrorException $e){
  go404();
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>free <?php echo  $category['name'];?> software, News Readers  <?php echo  $category['name'];?> software, Free download!</title>
<meta name="keywords" content="free <?php echo  $category['name'];?> software, download <?php echo  $category['name'];?>, <?php echo  $category['name'];?> free download, News 软件大分类名 software" />
<meta name="description" content="free <?php echo  $category['name'];?> software, News <?php echo  $category['name'];?> software, Free download!" />
<link rel="stylesheet" type="text/css" href="css/public.css">
</head>

<body>

<div id="top">
<div id="frame">
<div class="tl"><a href="#">DownladV.com, Your free <?php echo  $category['name'];?> Software Download Portal.</a></div>
<div class="tr"><strong>Download DVD software for free</strong><a href="#"><img src="images/1_02.jpg" /></a><a href="#"><img src="images/1_03.jpg" /></a></div><div id="tnr"><a href="http://www.downloadv.com"><h1>DownloadV</h1></a>
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
Your are here > <a href="#">Home</a> > Dvd Convvet - Your free download source, download What</div>

<div id="main">
<div id="left" class="tl">
<?php require_once('modules/category.php');?>
<?php require_once('modules/top-download.php');?>
<?php require_once('modules/hot-keyword.php');?>


</div>
<div id="right" class="tr1">
  <div id="rmb">
<div id="rbt"><h3>Picked DVD SoftWare</h3>
<div class="more"><img src="images/1_14.jpg" width="9" height="10" /><a href="#">more</a></div>
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




<div id="rmb">
<div id="rbt"><h3>Latest downloads</h3>
<div class="more"><img src="images/1_14.jpg" width="9" height="10" /><a href="#"><strong>Latest</strong></a>  | <a href="#">more Popular</a></div>
</div>
<div id="rnr">
<hr class="x">
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>
<div id="news" class="lx">
<img src="images/1_22.jpg" />
<strong><a href="#">Sothink Video Encoder for Adobe Flash 2.5</a></strong>[ 17.5MB | Freeware | Win All ]<br />
Sothink Video Encoder for Adobe Flash, also called Flash Video Encoder.</div>

<div id="pag">
<div class="pl">Results: 1-30 of 6630</div>
<div class="pr"><a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> <a href="#">8</a> <a href="#">9</a> <a href="#">></a></div>
</div>

</div>
<img src="images/1_19.jpg" />
</div>

</div>

<?php require_once('modules/footer.php');?>

</div>


<div class="clear"></div>
</div>
</div>

</body>
</html>
