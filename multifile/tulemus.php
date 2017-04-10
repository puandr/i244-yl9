<?php require_once('head.html')?>


<div id="wrap">
<?php
	$pildid = array(1,2,3,4,5,6);
	if (isset( $_GET['pilt']) && in_array($_GET['pilt'], $pildid)){
		echo '<p>Täname hääletamast! :)</p>';
		echo '<p>Valisite pildi nr '.$_GET['pilt'].'</p>';
		echo '<img src="pildid/nameless'.$_GET['pilt'].'.jpg" alt="nimetu '.$_GET['pilt'].'" />';
		
	} else {
		echo '<p>Kahjuks pole midagi valitud! :(</p>';
	}
?>
	

</div>

<?php require_once('foot.html')?>