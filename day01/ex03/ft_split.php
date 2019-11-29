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
?>
