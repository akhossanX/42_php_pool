#!/usr/bin/php
<?php
	$set = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~";
	function ft_strcmp($s, $d)
	{
		$i = strlen($s);
		$k = strlen($d);
		$min_len = $i > $k ? $k : $i;
		$j = 0;
		$s = strtolower($s);
		$d = strtolower($d);
		while ($j < $min_len)
		{
			if ($s[$j] != $d[$j])
			{
				$cmp = strpos($GLOBALS['set'], $s[$j]) - strpos($GLOBALS['set'], $d[$j]);
				return $cmp;
			}
			$j++;
		}
		return $i - $k;
	}
	function ft_sort(&$arr, $func)
	{
		foreach ($arr as $key1 => &$value1)
		{
			foreach ($arr as $key2 => &$value2)
			{
				$dif = $func($value1, $value2);
				if ($key1 < $key2 && $dif > 0)
				{
					$tmp = $value1;
					$value1 = $value2;
					$value2 = $tmp;
				}
			}
		}
	}
	$av = $argv;
	array_shift($av);
	$av = implode(" ", $av);
	$av = trim($av);
	while (strpos($av, "  "))
		$av = str_replace("  ", " ", $av);
	$av = explode(" ", $av);
	ft_sort($av, 'ft_strcmp');
	foreach ($av as $value)
		echo $value."\n";
?>
