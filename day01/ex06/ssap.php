#!/usr/bin/php
<?php
	function ft_split($s)
	{
		$arr = explode(" ", $s);
		foreach ($arr as $key => $value)
			if (empty($value))
				unset($arr[$key]);
		sort($arr, $sort_flags = SORT_STRING);
		return $arr;
	}
	$str = $argv;
	unset($str[0]);
	$str = implode(" ", $str);
	$str = ft_split($str);
	foreach($str as $value)
		echo "$value\n";
?>
