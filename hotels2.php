<?php
	fscanf(STDIN,"%d %d",$n,$m);
	$testSum = 0;
	$sum = 0;
	$d = '';
	$i = 0;
	$j = 0;
	$num = fgets(STDIN, 1024);
	while ($num) {
		$d .= $num;
		$num = fgets(STDIN, 1024);
	}
	$d = explode(" ", trim($d));
	$testSum += $d[$i];
	while ($i < $n) {
		if ($testSum <= $m) {
			if ($sum < $testSum) {
				$sum = $testSum;
			}
			$i++;
			$testSum += $d[$i];
		} else {
			$testSum -= $d[$j];
			$j++;
		}
	}
	
	print $sum."\n";
?>