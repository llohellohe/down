<?php 
require_once(dirname(__FILE__)."/../../lib/DB.php");
require_once(dirname(__FILE__)."/../../lib/EdException.php");



try{

$db=new DB();

$showList=$db->getShowRootList();

}catch(ErrorException $e){
  go404();
}




$db->close();
?>




<div id="lmb">
<h2 class="lbt">Category</h2>
<ul id="cate">
<?php
	foreach ($showList as $root) {
		echo "<li><a href='categories.php?id=".$root['id']."''>".$root['name']."</a></li>";
		if($rootCid==$root['id']&&count($childList)>0){
?>
		<ul id="cate1">
		<?php
			foreach ($childList as $child) {
		?>
		<li><a href="child-category.php?id=<?php echo $child['id'];?>">&gt; <?php echo $child['name'];?></a></li>
		<?php
			}

		?>
		</ul>
<?php
		}
	}
?>
</ul>
<img src="images/1_13.jpg" />
</div>
