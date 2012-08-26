<?php
$navClass="class='hover'";
?>


<div id="nav">
<ul>
<li><a href="index.php" <?php if($curNav=="home"){echo $navClass;}?> >Home</a></li>
<li><a href="#" <?php if($curNav=="cate"){echo $navClass;}?> >Categories</a></li>
<li><a href="#" <?php if($curNav=="new"){echo $navClass;}?> >New releases</a></li>
<li><a href="#" <?php if($curNav=="most"){echo $navClass;}?> >Most popular</a></li>
<li><a href="#" <?php if($curNav=="pick"){echo $navClass;}?> >Our picks</a></li>
<li><a href="#" <?php if($curNav=="submit"){echo $navClass;}?> >Submit your software</a></li>
</ul>
</div>