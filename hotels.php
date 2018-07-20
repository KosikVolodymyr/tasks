<?php
	fscanf(STDIN,"%d %d",$n,$m);
	$testSum = 0;
	$sum = 0;
	$d = '';
	$j = 0;
	$num = fgets(STDIN, 1024);
	while ($num) {
		$d .= $num;
		$num = fgets(STDIN, 1024);
	}
	$d = explode(" ", trim($d));
	for ($i = 0; $i < $n; $i++) {
		$list[] = $d[$i];
		$testSum += $d[$i];
		if (($testSum < $m) && ($sum < $testSum)) {
			$sum = $testSum;
		} elseif ($testSum > $m) {
			while ($testSum > $m) {
				$testSum -= $list[$j];
				$j++;
			}
			if ($sum <= $testSum) {
				$sum = $testSum;
			}
		} elseif ($sum == $testSum) {
			$sum = $testSum;
		}
	}
	
	print $sum."\n";
?>