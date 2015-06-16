<?php
	$arr1 = array(1,2,3,4);

	foreach($arr1 as &$value){
		$value = $value * 2;
		echo "$value\n";
	}

	$arr2 = array(
		"one"=>1,
		"two"=>2,
		"three"=>3,
		"four"=>4
	);

	foreach($arr2 as $key=>$value){
		echo "Key: $key Value: $value \n";
	}
	
?>
