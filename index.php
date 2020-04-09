<?php

function remainderDivision($a, $b){
	$t = $a / $b;
	return $t - intval($t);
}

function isLeapYear($year){
	
	if(remainderDivision($year, 400) == 0 || 
		(remainderDivision($year, 4) == 0 && remainderDivision($year, 100) != 0))
		return true;
	return false;
}

if(isLeapYear($year))
	echo $year . ' la nam nhuan.';
else
	echo $year. ' khong la nam nhuan.';

?>
<form action="#" method="post">
	<p>Moi ban nhap nam</p>
	<input type="text" name="year" value="<?=$year?>" />
	<input type="submit" value="Kết quả">
</form>
<?php
if (is_numeric ( $GLOBALS ['year'] ) ) {
    isLeapYear ( $GLOBALS ['year'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>
