<?php

require_once(dirname(__FILE__)."/../lib/DB.php");
require_once(dirname(__FILE__)."/../lib/EdException.php");


$id=$_GET["id"];
$page=$_GET["page"];

$rootCid=$id;

try{

$db=new DB();

$category=$db->getCategory($id);

}catch(ErrorException $e){
  go404();
}

$pickedList=$db->batchGetSoftware($category['picked']);

$latestList=$db->getLatestSoftwareByCategory($id);

$childList=$db->getChildCategory($id);

$total=$db->getTotalSoftwareCountByCategory($id);

$db->close();
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
<?php $curNav="cate";require('modules/nav.php')?>
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
<?php
foreach ($pickedList as $software) {
?>
<div id="news" class="nbg">
<img class="thumb"  src="<?php echo $software['thumb']?>" />
<strong><a href="detail.php?id=<?php echo $software['id']?>"><?php echo $software['name']." ".$software['version']?></a></strong><br />
<?php echo $software['summary']; ?>
</div>
<?php
}
?>	
<hr class="x">
</div>
<img src="images/1_19.jpg" />

</div>



<?php 
if($total>0){
?>
<div id="rmb">
<div id="rbt"><h3>Latest downloads</h3>
<div class="more"><img src="images/1_14.jpg" width="9" height="10" /><a href="#"><strong>Latest</strong></a>  | <a href="#">more Popular</a></div>
</div>
<div id="rnr">
<hr class="x">

<?php
foreach ($latestList as $software) {
?>
<div id="news" class="lx">
<img class="thumb" src="<?php echo $software['thumb']?>"/>
<strong><a href="detail.php?id=<?php echo $software['id']?>"><?php echo $software['name']." ".$software['version'];?></a></strong>[ <?php echo $software['size']; ?> | Freeware | Win All ]<br />
<?php echo $software['summary'] ;?>
</div>
<?php
}
?>

<?php require('modules/cate-pagenav.php');?>

</div>
<img src="images/1_19.jpg" />
</div>
<?php } ?>

</div>

<?php require_once('modules/footer.php');?>

</div>


<div class="clear"></div>
</div>
</div>

</body>
</html>
