<?php
	$allStates='Mississippi Alabama Texas Massachusetts Kansas';
	$statesArray=[];
	$state1=explode(' ',$allStates);
	$i=0;
	foreach($state1 as $state){
		if(preg_match('/xas$/',($state))){
			$statesArray[$i]=($state);
			$i=$i+1;
			echo "</br> The states that ends in xas:".$state;
		}
	}
	foreach($state1 as $state){
		if(preg_match('/^M.*s$/',($state))){
			$statesArray[$i]=($state);
			$i=$i+1;
			echo "</br> The states that begins with M and ends in s:".$state;
		}
	}
	foreach($state1 as $state){
		if(preg_match('/^k.*s$/',($state))){
			$statesArray[$i]=($state);
			$i=$i+1;
			echo "</br> The states that begins with K and ends in s:".$state;
		}
	}
	foreach($state1 as $state){
		if(preg_match('/a$/',($state))){
			$statesArray[$i]=($state);
			$i=$i+1;
			echo "</br> The states that ends in a:".$state;
		}
	}
	foreach($statesArray as $element => $value){
		echo "</br>". $value ."is the element". $element;
	}
?>
