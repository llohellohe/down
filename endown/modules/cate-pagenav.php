<?php

if($pageSize==0){
$pageSize=10;
}


if($page==0){
$page=1;
}


if($total%$pageSize==0){
	$totalPage=$total/$pageSize;
}else{
	$totalPage=$total/$pageSize+1;
}

$showPage=$page+8;
if($showPage>$totalPage){
$showPage=$totalPage;
}

$from=($page-1)*$pageSize+1;
$to=$page*$pageSize;
if($to>$total){
$to=$total;
}

?>
<div id="pag">
<div class="pl">
<?php echo "Results: ".$from."-".$to." of ".$total;?>
</div>
<div class="pr">

<?php
if($page>1){
	$pre=$page-1;
	if($child){
	echo "<a href='child-category.php?id=".$id."&page=".$pre."'><</a>";
	}else{
	echo "<a href='categories.php?id=".$id."&page=".$pre."'><</a>";
	}
}

for ($i=$page;$i<=$showPage;$i++) {
	if($child){
	echo "<a href='child-category.php?id=".$id."&page=".$i."'>".$i."</a>";
	}else{
	echo "<a href='categories.php?id=".$id."&page=".$i."'>".$i."</a>";
	}
}
if($showPage<$totalPage){
	$next=$page+1;
	if($child){
	echo "<a href='child-category.php?id=".$id."&page=".$next."'>></a>";
	}else{
	echo "<a href='categories.php?id=".$id."&page=".$next."'>></a>";
}
}
?>

</div>
</div>