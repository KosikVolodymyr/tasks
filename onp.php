<?php
	fscanf(STDIN,"%d",$n);
	
	for ($j = 0; $j < $n; $j++) {
	    $str = trim(fgets(STDIN, 1024));

		$mass = ['+' => 0, '-' => 0, '*' => 0, '/' => 0, '^' => 0, '(' => 1, ')' => 2];
		$stack = [];
		$res = '';

		for ($i = 0; $i < strlen($str); $i++) {
			if (!isset($mass[$str[$i]])) {
				$res .= $str[$i];
			} elseif ($mass[$str[$i]] == 0) {
				$stack[] = $str[$i];
 			} elseif ($str[$i] == ')') {
 				$res .= array_pop($stack);
 			}
		}

		print $res."\n";
	}
?>