<?php

require_once(dirname(__FILE__)."/../lib/DB.php");
require_once(dirname(__FILE__)."/../lib/EdException.php");


$id=$_GET["id"];
$page=$_GET["page"];
$rootCid=$id;

try{

$db=new DB();

$category=$db->getCategory($id);

$rootCid=$category['parent'];

}catch(ErrorException $e){
  go404();
}

$childList=$db->getChildCategory($rootCid);

$latestList=$db->getLatestSoftwareByCategory($id);

$total=$db->getTotalSoftwareCountByCategory($id);

$db->close();

$child=true;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free <?php echo $category['name'];?> software download</title>
<meta name="keywords" content="free <?php echo $category['name'];?> software, free <?php echo $category['name'];?> software download, download <?php echo $category['name'];?>, <?php echo $category['name'];?> software, <?php echo $category['name'];?>" />
<meta name="description" content="Free download <?php echo $category['name'];?> software by last week downloads at DownloadV.com" />
<link rel="stylesheet" type="text/css" href="css/public.css">
</head>

<body>

<div id="top">
<div id="frame">
<div class="tl"><a href="#">DownladV.com, Your free <?php echo $category['name'];?> Software Download Portal.</a></div>
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
Your are here > <a href="index.php">Home</a> > <?php echo $category['name'];?> - Your free download source, download What</div>
<div id="main">
<div id="left" class="tl">
<?php require("modules/category.php");?>
<div id="lmb">
<h2 class="lbt2">Hot Keywords</h2>
<ul id="hot">
<li><a href="#">windows live mail download </a></li>  
<li><a href="#">photoshop cs2 download </a></li>  
<li><a href="#">google talk download </a></li> 
<li><a href="#">download orbit </a></li> 
<li><a href="#">down free limewire basic  </a></li>
<li><a href="#">free limewire basic </a></li> 
<li><a href="#">limewire basic  </a></li>
<li><a href="#">limewire basic download</a></li>  
<li><a href="#">limewire basic free </a></li>
<li><a href="#">free download limewire basic plus </a></li> 
<li><a href="#">down limewire basic </a></li>
</ul>
<img src="images/1_13.jpg" />
</div>

</div>
<div id="right" class="tr1">
<div id="rbar">
<img src="images/2_02.jpg" width="700" height="190" /></div>
<?php 
if(count($latestList)>0){
?>
  <div id="rmb">
<div id="rbt"><h3>Latest <?php echo $category['name'];?> downloads</h3>
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
<?php }?>
</div>

<?php require_once('modules/footer.php');?>
</div>


<div class="clear"></div>
</div>
</div>

</body>
</html>
